<?php

declare(strict_types=1);

namespace Arbor\Api\Gateway;

use Arbor\Api\Gateway\HttpClient\HttpClientInterface;
use Arbor\Api\Exception\ServerErrorException;
use Arbor\ChangeLog\Change;
use Arbor\Filter\CamelCaseToDash;
use Arbor\Filter\PluralizeFilter;
use Arbor\Model\Collection;
use Arbor\Model\Hydrator;
use Arbor\Model\ModelBase;
use Arbor\Query\Exception;
use Arbor\Query\Query;
use Psr\Http\Client\ClientExceptionInterface;

class PsrRestGateway implements GatewayInterface
{
    protected string $applicationId;

    public function __construct(
        protected HttpClientInterface $httpClient,
        protected Hydrator            $hydrator,
        protected CamelCaseToDash     $camelCaseToDash,
        protected PluralizeFilter     $pluralizeFilter
    )
    {
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    public function setApplicationId(string $applicationId): GatewayInterface
    {
        $this->applicationId = $applicationId;
        $this->httpClient->setApplicationId($applicationId);
        return $this;
    }

    /**
     * @param ModelBase $model
     * @return ModelBase
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function create(ModelBase $model): ModelBase
    {
        $resource = $this->getResource($model->getResourceType());

        $arrayRepresentation = $this->hydrator->extractArray($model);
        $resourceRoot = $this->getResourceRoot($model->getResourceType());
        $options = ['body' => ['request' => [$resourceRoot => $arrayRepresentation]]];

        $responseRepresentation = $this->httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, $this->buildUrl($resource), $options);

        if (!array_key_exists($resourceRoot, $responseRepresentation)) {
            throw new Exception('API Error: ' . print_r($responseRepresentation, true));
        }

        $resultingModelRepresentation = $responseRepresentation[$resourceRoot];
        $this->hydrator->hydrateModel($model, $resultingModelRepresentation);

        return $model;
    }

    /**
     * Currently meant for use with following entities:
     * - Students
     * - StudentMembership
     * - StudentSecondaryMembership
     * - Staff
     * - Exams
     * - Documents
     *
     * @param string $resource
     * @param Collection $collection
     * @param bool $checkForPersistence
     * @return Collection
     * @throws ClientExceptionInterface
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function bulkCreate(string $resource, Collection $collection, bool $checkForPersistence = true): Collection
    {
        $resourceUrl = $this->getResource($resource);
        $resourceRoot = $this->getResourceRoot($resource);

        $createCollection = new Collection();
        $options = ['body' => ['request' => []]];

        /** @var ModelBase $model */
        foreach ($collection as $model) {
            if ($resource !== $model->getResourceType()) {
                throw new Exception(sprintf('Not all elements of collection are of type "%s"', $resource));
            }
        }

        /** @var ModelBase $model */
        foreach ($collection as $model) {
            if ($model->getResourceUrl() !== null) {
                throw new Exception(
                    sprintf('Model you want to create already exists on "%s"', $model->getResourceUrl())
                );
            }

            $userTags = $model->getUserTags();

            if ($checkForPersistence && $userTags && count($userTags) > 0) {
                $query = new Query();
                $query->setResourceType($resource);

                foreach ($userTags as $tagName => $tagValue) {
                    $query->addUserTagFilter($tagName, $tagValue);
                }

                $models = $this->query($query)->getArrayCopy();

                if (count($models) > 0) {
                    $foundModel = current($models);

                    throw new Exception(
                        sprintf('Model you want to create already exists on "%s"', $foundModel->getResourceUrl())
                    );
                }
            }

            $createCollection->add($model);
            $arrayRepresentation = $this->hydrator->extractArray($model);
            $options['body']['request'][] = [$resourceRoot => $arrayRepresentation];
        }

        try {
            $responseRepresentation = $this->httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_POST, $this->buildUrl($resourceUrl), $options);
        } catch (ServerErrorException $exception) {
            $responseRepresentation = $exception->getResponsePayload();

            $failedResponses = array_reduce($responseRepresentation['results'] ?? [], static function ($responses, $item) {
                if (isset($item['status']) && $item['status']['success'] === false) {
                    $responses[] = $item['status'];
                }

                return $responses;
            }, []);

            throw new ServerErrorException(
                $exception->getMessage() . (count($failedResponses) ? PHP_EOL . json_encode($failedResponses) : ''),
                $exception->getCode(),
                $exception->getPrevious(),
                $exception->getRequestPayload(),
                $exception->getResponsePayload(),
                $exception->getServerExceptionClass(),
                $exception->getServerExceptionMessage(),
                $exception->getServerExceptionTrace()
            );
        }

        foreach ($responseRepresentation['results'] as $key => $result) {
            if (!$result['status']['success']) {
                continue;
            }

            $this->hydrator->hydrateModel($createCollection[$key], $result[$resourceRoot]);
        }

        return $createCollection;
    }

    /**
     * @param ModelBase $model
     * @return ModelBase
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function refresh(ModelBase $model): ModelBase
    {
        $arrayRepresentation = $this->httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_GET, $model->getResourceUrl());

        $resourceRoot = $this->getResourceRoot($model->getResourceType());
        if (false === array_key_exists($resourceRoot, $arrayRepresentation)) {
            throw new Exception("Resource {$model->getResourceType()} with ID {$model->getResourceId()} could not be retrieved from URL: " . $model->getResourceUrl());
        }

        $this->hydrator->hydrateModel($model, $arrayRepresentation[$resourceRoot]);
        return $model;
    }

    /**
     * @param string $resource
     * @param string $id
     * @return ModelBase
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function retrieve(string $resource, string $id): ModelBase
    {
        $url = $this->buildUrl($this->getResource($resource), $id);
        $arrayRepresentation = $this->httpClient->sendRequest(
            HttpClientInterface::HTTP_METHOD_GET,
            $url
        );
        $resourceRoot = $this->getResourceRoot($resource);

        if (!array_key_exists($resourceRoot, $arrayRepresentation)) {
            throw new Exception("Resource $resource with ID $id could not be retrieved from URL: $url");
        }

        $model = $this->instantiateModel($resource);
        $this->hydrator->hydrateModel($model, $arrayRepresentation[$resourceRoot]);
        // $model->initialArrayRepresentation = $arrayRepresentation;

        return $model;
    }

    /**
     * @param string $resourceType
     * @param array $propertyFilters
     * @param array $userTags
     * @return false|mixed|null
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function findOne(string $resourceType, array $propertyFilters, array $userTags): mixed
    {
        if (0 === count($propertyFilters) && 0 === count($userTags)) {
            return null;
        }

        $models = $this->findAll($resourceType, $propertyFilters, $userTags);

        if (count($models) > 0) {
            return current($models);
        }

        return null;
    }

    /**
     * @param string $resourceType
     * @param array $propertyFilters
     * @param array $userTags
     * @return array
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function findAll(string $resourceType, array $propertyFilters, array $userTags): array
    {
        $query = new Query();

        $query->setResourceType($resourceType);
        foreach ($propertyFilters as $propertyName => $value) {
            $operator = Query::OPERATOR_EQUALS;
            if (is_array($value)) {
                $operator = $value[0];
                $value = $value[1];
            }

            $query->addPropertyFilter($propertyName, $operator, $value);
        }
        //foreach ($userTags as $key => $value) {
        //    $query->addUserTagFilter($key, $value);
        //}
        return $this->query($query)->getArrayCopy();
    }

    public function findByProperty()
    {
        // implement find by a single property
        // ?filter.propertyName.equals=propertyValue
    }

    public function instantiateModel(string $resourceType): ModelBase
    {
        $modelClass = "Arbor\\Model\\$resourceType";
        $modelClassFile = __DIR__ . "/../../Model/$resourceType.php";
        if (false !== mb_strpos($resourceType, '_')) {
            // This is a module resource
            list($modulePrefix, $moduleResource) = explode('_', $resourceType, 2);
            $modelClass = "Arbor\\Model\\$modulePrefix\\$moduleResource";
            $modelClassFile = __DIR__ . "/../../Model/$modulePrefix/$moduleResource.php";
        }

        // Check whether a specific class for this resource has been autogenerated if not then use the base class.
        // This is a development measure and can be removed once all models have been autogenerated
        if (!file_exists($modelClassFile)) {
            $modelClass = ModelBase::class;
        }
        return new $modelClass($resourceType, [], $this);
    }

    /**
     * @param ModelBase $model
     * @return ModelBase
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function update(ModelBase $model): ModelBase
    {
        $url = $model->getResourceUrl();
        $resourceType = $model->getResourceType();

        $arrayRepresentation = $this->hydrator->extractArray($model);
        $resourceRoot = $this->getResourceRoot($resourceType);

        $previousModel = $this->retrieve($resourceType, $model->getResourceId());
        $prevModelArrRepresentation = $this->hydrator->extractArray($previousModel);
        $modelDiff = $this->diffArrayRepresentationRecursive($arrayRepresentation, $prevModelArrRepresentation);

        if (empty($modelDiff)) {
            return $model;
        }

        $options = ['body' => ['request' => [$resourceRoot => $modelDiff]]];
        $responseRepresentation = $this->httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_PUT, $url, $options);

        // Revision ID is a read-only property so lets remove it before sending the update request to the API
        if (array_key_exists('revisionId', $responseRepresentation)) {
            unset($responseRepresentation['revisionId']);
        }

        if (!array_key_exists($resourceRoot, $responseRepresentation)) {
            throw new Exception('API Error: ' . print_r($responseRepresentation, true));
        }

        $resultingModelRepresentation = $responseRepresentation[$resourceRoot];
        $this->hydrator->hydrateModel($model, $resultingModelRepresentation);

        return $model;
    }

    /**
     * @param ModelBase $model
     * @return array
     * @throws ServerErrorException
     */
    public function delete(ModelBase $model): array
    {
        return $this->httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_DELETE, $model->getResourceUrl());
    }

    public function describe($resource): void
    {
        // This method is not implemented and should be removed in future
    }

    /**
     * @param string $resourceType
     * @param int $fromRevision
     * @param int $toRevision
     * @return Change[]
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function getChanges(string $resourceType, int $fromRevision, int $toRevision): array
    {
        $resourceSegment = $this->getResource($resourceType);

        $uri = $this->buildUrl($resourceSegment, 'changelog') . '?';
        if ($fromRevision > 0) {
            $uri .= "from-revision=$fromRevision&";
        }

        if ($toRevision > -1) {
            $uri .= "to-revision=$toRevision&";
        }

        $arrayRepresentation = $this->httpClient->sendRequest(HttpClientInterface::HTTP_METHOD_GET, $uri);

        if (!array_key_exists('changes', $arrayRepresentation)) {
            return [];
        }

        return $this->hydrateModelChanges($arrayRepresentation['changes'], $resourceType);
    }

    /**
     * @param Query $query
     * @return Collection
     * @throws Exception
     * @throws ServerErrorException
     * @throws \Arbor\Model\Exception
     */
    public function query(Query $query): Collection
    {
        $pluralResource = $this->pluralizeFilter->filter($query->getResourceType());
        $resourceRoot = $this->getResourceRoot($pluralResource);
        $options = ['query' => $query->getQueryOptions()];

        $arrayRepresentation = $this->httpClient->sendRequest(
            HttpClientInterface::HTTP_METHOD_GET,
            $this->buildUrl($pluralResource),
            $options
        );

        if (array_key_exists($resourceRoot, $arrayRepresentation)) {
            return $this->hydrateModel($arrayRepresentation[$resourceRoot], $query->getResourceType());
        }

        return new Collection();
    }

    /**
     * @throws \Arbor\Model\Exception
     */
    protected function hydrateModel(array $results, string $resourceType): Collection
    {
        $listing = new Collection();

        foreach ($results as $result) {
            $model = $this->instantiateModel($resourceType);
            $this->hydrator->hydrateModel($model, $result);
            $listing->add($model);
        }

        return $listing;
    }

    /**
     * @param array $resourceChanges
     * @param string $resourceType
     * @return array
     * @throws \Arbor\Model\Exception
     */
    public function hydrateModelChanges(array $resourceChanges, string $resourceType): array
    {
        $changes = [];

        foreach ($resourceChanges as $result) {
            $model = $this->instantiateModel($resourceType);
            $this->hydrator->hydrateModel($model, $result['changedObject']);
            $changes[] = new Change($model, $result['changeType'], $result['fromRevision'], $result['toRevision']);
        }
        return $changes;
    }

    /**
     * Finds difference between two array representations recursively.
     * Array keys like 'entityType' and 'href' will be ignored on difference check
     * and added to the returning difference array.
     *
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public function diffArrayRepresentationRecursive(array $array1, array $array2): array
    {
        $difference = [];

        foreach ($array1 as $key => $value) {
            if (is_array($value)) {
                if (!isset($array2[$key])) {
                    $difference[$key] = $value;
                } elseif (!is_array($array2[$key])) {
                    $difference[$key] = $value;
                } else { // This is some of MIS model types
                    if (!($new_diff = $this->diffArrayRepresentationRecursive($value, $array2[$key]))) {
                        continue;
                    }

                    $difference[$key] = $new_diff;
                    if (array_key_exists('entityType', $array2[$key])) { // Preserve 'entityType' and 'href' since those values are mandatory, but not changed
                        $difference[$key]['entityType'] = $value['entityType'];
                        $difference[$key]['href'] = $value['href'];
                    }
                }
            } elseif (!array_key_exists($key, $array2) || $array2[$key] != $value) {
                $difference[$key] = $value;
            }
        }

        return $difference;
    }

    protected function buildUrl(string $resourceSegment, $id = null): string
    {
        if ($id !== null) {
            return sprintf('/rest-v2/%s/%s', $resourceSegment, $id);
        }
        return sprintf('/rest-v2/%s', $resourceSegment);
    }

    protected function getResource(string $resourceType): string
    {
        $pluralResource = $this->pluralizeFilter->filter($resourceType);
        return mb_strtolower($this->camelCaseToDash->filter($pluralResource));
    }

    protected function getResourceRoot(string $resourceType): string
    {
        return mb_lcfirst($resourceType);
    }
}
