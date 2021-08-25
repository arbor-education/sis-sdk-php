<?php
namespace Arbor\Api\Gateway;

use Arbor\Api\ResourceNotFoundException;
use Arbor\Api\ServerErrorException;
use Arbor\ChangeLog\Change;
use Arbor\Filter\CamelCaseToDash;
use Arbor\Model\Collection;
use Arbor\Model\Hydrator;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Arbor\Filter\PluralizeFilter;
use Arbor\Query\Exception;

class RestGateway implements GatewayInterface
{
    const HTTP_METHOD_GET = "get";
    const HTTP_METHOD_POST = "post";
    const HTTP_METHOD_PUT = "put";
    const HTTP_METHOD_DELETE = "delete";

    const MAX_RETRIES = 5;

    /** @var string $_baseUrl */
    protected $_baseUrl;
    /** @var string $_authUser */
    protected $_authUser;
    /** @var string $_authPassword */
    protected $_authPassword;
    /** @var \GuzzleHttp\Client $_httpClient */
    protected $_httpClient;
    /** @var string $_applicationId */
    protected $_applicationId;
    /** @var HandlerStack **/
    protected $handlerStack;
    /** @var string */
    protected $userAgent;

    /**
     * @var PluralizeFilter
     */
    protected static $filterPluralize;

    /**
     * @var CamelCaseToDash
     */
    protected static $filterCamelToDash;

    /**
     * @param string $baseUrl
     * @param string $authUser
     * @param string $authPassword
     * @param string $userAgent
     * @param boolean $autoRetry
     */
    public function __construct($baseUrl = '', $authUser = '', $authPassword = '', $userAgent = 'Arbor PHP SDK', $autoRetry = true)
    {
        $this->handlerStack = HandlerStack::create(new CurlHandler());

        if ($autoRetry) {
            $this->handlerStack->push(Middleware::retry($this->createRetryHandler()));
        }

        $this->setBaseUrl($baseUrl);
        $this->setAuthUser($authUser);
        $this->setAuthPassword($authPassword);
        $this->setUserAgent($userAgent);
        $this->initClient();
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     *
     * @return static
     */
    public function setUserAgent(string $userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * @method initClient
     * @return static
     */
    public function initClient()
    {
        $this->_httpClient = new Client([
            'handler'  => $this->handlerStack,
            'base_uri' => $this->getBaseUrl(),
            'auth'     => [$this->getAuthUser(), $this->getAuthPassword()],
            'headers' => [
                'User-Agent' => $this->getUserAgent(),
            ],
        ]);
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->_authPassword;
    }

    /**
     * @param string $authPassword
     */
    public function setAuthPassword($authPassword)
    {
        $this->_authPassword = $authPassword;
    }

    /**
     * @return string
     */
    public function getAuthUser()
    {
        return $this->_authUser;
    }

    /**
     * @param string $authUser
     */
    public function setAuthUser($authUser)
    {
        $this->_authUser = $authUser;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->_baseUrl;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl($baseUrl)
    {
        $this->_baseUrl = $baseUrl;
    }

    /**
     * @return Client
     */
    public function getHttpClient()
    {
        return $this->_httpClient;
    }

    /**
     * @param Client $httpClient
     */
    public function setHttpClient($httpClient)
    {
        $this->_httpClient = $httpClient;
    }

    /**
     * @return string
     */
    public function getApplicationId()
    {
        return $this->_applicationId;
    }

    /**
     * @param string $applicationId
     */
    public function setApplicationId($applicationId)
    {
        $this->_applicationId = $applicationId;
    }

    /**
     * @param ModelBase $model
     * @return ModelBase
     * @throws Exception|ResourceNotFoundException|ServerErrorException|\RuntimeException
     */
    public function create(ModelBase $model)
    {
        $pluralResource = self::getPluralizeFilter()->filter($model->getResourceType());
        $resource = strtolower(self::getCamelToDashFilter()->filter($pluralResource));

        $hydrator = new Hydrator();
        $arrayRepresentation = $hydrator->extractArray($model);
        $resourceRoot = lcfirst($model->getResourceType());
        $options = ['body' => ['request' => [$resourceRoot => $arrayRepresentation]]];

        $responseRepresentation = $this->sendRequest(self::HTTP_METHOD_POST, "/rest-v2/$resource", $options);

        if (!array_key_exists($resourceRoot, $responseRepresentation)) {
            throw new Exception('API Error: ' . print_r($responseRepresentation, true));
        }

        $resultingModelRepresentation = $responseRepresentation[$resourceRoot];
        $hydrator->hydrateModel($model, $resultingModelRepresentation);

        return $model;
    }

    /**
     * @param ModelBase $model
     * @return ModelBase
     * @throws Exception|\RuntimeException
     */
    public function refresh($model)
    {
        $url = $model->getResourceUrl();
        $response = $this->getHttpClient()->get($url);

        $arrayRepresentation = json_decode($response->getBody()->getContents(), true);
        $resourceRoot = lcfirst($model->getResourceType());

        if (array_key_exists($resourceRoot, $arrayRepresentation)) {
            $hydrator = new Hydrator();
            $hydrator->hydrateModel($model, $arrayRepresentation[$resourceRoot]);

            return $model;
        }

        throw new Exception("Resource {$model->getResourceType()} with ID {$model->getResourceId()} could not be retrieved from URL: $url");
    }

    /**
     * @param string $resource
     * @param string $id
     * @return \Arbor\Model\ModelBase
     * @throws Exception|ResourceNotFoundException|ServerErrorException|\RuntimeException
     */
    public function retrieve($resource, $id)
    {
        $resourceSegment = strtolower(self::getCamelToDashFilter()->filter(self::getPluralizeFilter()->filter($resource)));

        $url = "/rest-v2/$resourceSegment/$id";
        $arrayRepresentation = $this->sendRequest(self::HTTP_METHOD_GET, $url);
        $resourceRoot = lcfirst($resource);

        if (!array_key_exists($resourceRoot, $arrayRepresentation)) {
            throw new Exception("Resource $resource with ID $id could not be retrieved from URL: $url");
        }

        $model = $this->instantiateModel($resource);
        $hydrator = new Hydrator();
        $hydrator->hydrateModel($model, $arrayRepresentation[$resourceRoot]);
        $model->initialArrayRepresentation = $arrayRepresentation;

        return $model;
    }

    public function findOne(string $resourceType, array $propertyFilters, array $userTags)
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

    public function findAll(string $resourceType, array $propertyFilters, array $userTags): array
    {
        $query = new Query();

        $query->setResourceType($resourceType);
        foreach ($propertyFilters as $propertyName => $value) {
            if (is_array($value)) {
                $operator = $value[0];
                $value = $value[1];
            } else {
                $operator = Query::OPERATOR_EQUALS;
            }
            $query->addPropertyFilter($propertyName, $operator, $value);
        }
//        foreach ($userTags as $key => $value) {
//            $query->addUserTagFilter($key, $value);
//        }
        return $this->query($query)->getArrayCopy();
    }

    public function findByProperty()
    {
        // implement find by a single property
        // ?filter.propertyName.equals=propertyValue
    }

    /**
     * @param string $resourceType
     * @return ModelBase
     */
    public function instantiateModel($resourceType)
    {
        if (false !== strpos($resourceType, '_')) {
            //This is a module resource
            list($modulePrefix, $moduleResource) = explode('_', $resourceType, 2);
            $modelClass = "Arbor\\Model\\$modulePrefix\\$moduleResource";
            $modelClassFile = __DIR__ . "/../../Model/$modulePrefix/$moduleResource.php";
        } else {
            $modelClass = "Arbor\\Model\\$resourceType";
            $modelClassFile = __DIR__ . "/../../Model/$resourceType.php";
        }
        //Check wether a specific class for this resource has been autogenerated if not then use the base class.
        //TODO: This is a development measure and can be removed once all models have been autogenerated
        if (file_exists($modelClassFile)) {
            $model = new $modelClass($resourceType, [], $this);
        } else {
            $model = new ModelBase($resourceType, [], $this);
        }

        return $model;
    }

    /**
     * @param ModelBase $model
     * @return ModelBase
     * @throws Exception|ResourceNotFoundException|ServerErrorException|\RuntimeException
     */
    public function update(ModelBase $model)
    {
        $url = $model->getResourceUrl();
        $resourceType = $model->getResourceType();

        $hydrator = new Hydrator();
        $arrayRepresentation = $hydrator->extractArray($model);
        $resourceRoot = lcfirst($resourceType);

        $previousModel = $this->retrieve($resourceType, $model->getResourceId());
        $prevModelArrRepresentation = $hydrator->extractArray($previousModel);
        $modelDiff = $this->diffArrayRepresentationRecursive($arrayRepresentation, $prevModelArrRepresentation);

        if (empty($modelDiff)) {
            return $model;
        }

        $options = ['body' => ['request' => [ $resourceRoot => $modelDiff]]];
        $responseRepresentation = $this->sendRequest(self::HTTP_METHOD_PUT, $url, $options);

        //Revision ID is a read-only property so lets remove it before sending the update request to the API
        if (array_key_exists('revisionId', $responseRepresentation)) {
            unset($responseRepresentation['revisionId']);
        }

        if (!array_key_exists($resourceRoot, $responseRepresentation)) {
            throw new Exception('API Error: ' . print_r($responseRepresentation, true));
        }

        $resultingModelRepresentation = $responseRepresentation[$resourceRoot];
        $hydrator->hydrateModel($model, $resultingModelRepresentation);

        return $model;
    }

    /**
     * @param ModelBase $model
     * @return array
     * @throws \RuntimeException
     */
    public function delete(ModelBase $model)
    {
        $response = $this->getHttpClient()->delete($model->getResourceUrl());

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param $resource
     * @return void
     */
    public function describe($resource)
    {
        // TODO: Implement describe() method.
    }

    /**
     * @param string $resourceType
     * @param int $fromRevision
     * @param int $toRevision
     * @throws ResourceNotFoundException|ServerErrorException|\RuntimeException
     * @return \Arbor\ChangeLog\Change[]
     */
    public function getChanges($resourceType, $fromRevision = 0, $toRevision = -1)
    {
        $pluralResource = self::getPluralizeFilter()->filter($resourceType);
        $resourceSegment = strtolower(self::getCamelToDashFilter()->filter($pluralResource));

        $uri = "/rest-v2/$resourceSegment/changelog?";
        if ($fromRevision > 0) {
            $uri .= "from-revision=$fromRevision&";
        }

        if ($toRevision > -1) {
            $uri .= "to-revision=$toRevision&";
        }

        $arrayRepresentation = $this->sendRequest(self::HTTP_METHOD_GET, $uri);

        $changes = [];
        if (!array_key_exists('changes', $arrayRepresentation)) {
            return $changes;
        }

        $hydrator = new Hydrator();
        /** @var array $resourceChanges */
        $resourceChanges = $arrayRepresentation['changes'];
        foreach ($resourceChanges as $result) {
            $model = $this->instantiateModel($resourceType);
            $hydrator->hydrateModel($model, $result['changedObject']);
            $changes[] = new Change($model, $result['changeType'], $result['fromRevision'], $result['toRevision']);
        }

        return $changes;
    }

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\Collection
     * @throws ServerErrorException|ResourceNotFoundException|\RuntimeException|Exception
     */
    public function query($query)
    {
        $pluralResource = self::getPluralizeFilter()->filter($query->getResourceType());
        $resourceRoot = lcfirst($pluralResource);
        $url = "/rest-v2/$pluralResource";
        $options = ['query' => $query->getQueryOptions()];

        $arrayRepresentation = $this->sendRequest(self::HTTP_METHOD_GET, $url, $options);

        $listing = new Collection();
        if (array_key_exists($resourceRoot, $arrayRepresentation)) {
            $hydrator = new Hydrator();
            /** @var array $results */
            $results = $arrayRepresentation[$resourceRoot];
            foreach ($results as $result) {
                $model = $this->instantiateModel($query->getResourceType());
                $hydrator->hydrateModel($model, $result);
                $listing->add($model);
            }
        }

        return $listing;
    }

    /**
     * @param $method
     * @param $url
     * @param array $options
     * @throws ServerErrorException|ResourceNotFoundException|\RuntimeException
     * @return array
     */
    public function sendRequest($method, $url, array $options = [])
    {
        //Set a generic error message
        $message = 'API Error';
        //Uncomment this line to allow you to trigger a debug session in the Mis project
        //$url = $url . "?XDEBUG_SESSION_START=yes";
        $code = 0;

        if (!isset($options['headers']['User-Agent'])) {
            $options['headers']['User-Agent'] = 'Arbor PHP SDK';
        }

        if (isset($options['body'])) {
            if (is_array($options['body'])) {
                $options['body'] = json_encode($options['body']);
            }
        }

        $method = strtoupper($method);

        try {
            if ($this->getBaseUrl() === 'https://api.uk.arbor.sc/rest-v2' && $this->getApplicationId()) {
                $options['headers']['x-mis-application-id'] = $this->getApplicationId();
            }

            try {
                $response = $this->getHttpClient()->request($method, $url, $options);
            } catch (\GuzzleHttp\Exception\ClientException $e) {
                $response_code = $e->getResponse()->getStatusCode();
                if ($response_code == 401) {
                    $usingPassword = !$this->getAuthPassword()?'No':'Yes';
                    throw new \Arbor\Exception(
                        sprintf(
                            "Anauthorized, possibly wrong credentials. Endpoint: %s, Username: %s, Using password: %s",
                            $this->getBaseUrl(),
                            $this->getAuthUser(),
                            $usingPassword
                        )
                    );
                }
                throw $e;
            }

            //Allow the user to direct requests at a common API endpoint if they specify the applicationId as a request header
            $code = $response->getStatusCode();
            $response->getBody()->rewind();
            $responsePayload = json_decode($response->getBody()->getContents(), true);
        } catch (BadResponseException $e) {
            //Default to using the code and message from the Guzzle exception.
            //This is useful in case the response does not contain valid json
            $e->getResponse()->getBody()->rewind();
            $responsePayload = json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (\RuntimeException $e) {
            throw new ServerErrorException('An unexpected error has occurred: ' . $e->getMessage(), 0, $e);
        }

        if (! is_array($responsePayload)) {
            throw new ServerErrorException('Server responded with an invalid response');
        }

        //If the response has a code property
        if (isset($responsePayload['response']['code'])) {
            $code = $responsePayload['response']['code'];
        }

        //If available use the reason phrase
        if (isset($responsePayload['response']['reason'])) {
            $message = $responsePayload['response']['reason'];
        }

        //If available use a specific error message
        $serverMessage = $serverTrace = $serverException = null;

        if (isset($responsePayload['response']['errors']) &&
            is_array($responsePayload['response']['errors']) &&
            count($responsePayload['response']['errors'])
        ) {
            $serverException = $responsePayload['response']['errors'][0]['exception'];
            $serverMessage = $responsePayload['response']['errors'][0]['message'];
            $serverTrace = $responsePayload['response']['errors'][0]['trace'];
            $message = "Server threw: $serverException with message: $serverMessage URL=$url";
        }

        switch ($code) {
            case 422:
            case 200:
            case 201:
                // The request succeeded or failed due to validation errors.
                // This is not an exception so return the response
                return $responsePayload;
            case 404:
                $exception = new ResourceNotFoundException($message);
                break;
            default:
                $exception = new ServerErrorException($message);
                if (null !== $serverException) {
                    $exception->setServerExceptionClass($serverException);
                    $exception->setServerExceptionMessage($serverMessage);
                    $exception->setServerExceptionTrace($serverTrace);
                }
                break;
        }

        throw $exception;
    }

    /**
     * Finds difference between two array representations recursivly.
     * Array keys like 'entityType' and 'href' will be ignored on diffrence check
     * and added to the returning difference array.
     *
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public function diffArrayRepresentationRecursive($array1, $array2)
    {
        $difference = [];

        foreach ($array1 as $key => $value) {
            if (is_array($value)) {
                if (!isset($array2[$key])) {
                    $difference[$key] = $value;
                } elseif (!is_array($array2[$key])) {
                    $difference[$key] = $value;
                } else { // This is some of MIS model types
                    if (! ($new_diff = $this->diffArrayRepresentationRecursive($value, $array2[$key]))) {
                        continue;
                    }

                    $difference[$key] = $new_diff;
                    if (array_key_exists('entityType', $array2[$key])) { // Preserve 'entityType' and 'href' since those values are mandatory, but not changed
                        $difference[$key]['entityType'] = $array1[$key]['entityType'];
                        $difference[$key]['href'] = $array1[$key]['href'];
                    }
                }
            } elseif (!array_key_exists($key, $array2) || $array2[$key] != $value) {
                $difference[$key] = $value;
            }
        }

        return $difference;
    }

    /**
     * @return callable
     */
    private function createRetryHandler()
    {
        /** @noinspection PhpUnusedParameterInspection */
        return function ($retries, Request $request, Response $response = null, TransferException $exception = null) {
            if ($retries >= self::MAX_RETRIES) {
                return false;
            }

            if (!($this->isServerError($response) || $this->isConnectError($exception))) {
                return false;
            }

            return true;
        };
    }

    /**
     * @param Response|null $response
     * @return bool
     */
    private function isServerError(Response $response = null)
    {
        return $response && $response->getStatusCode() >= 500;
    }

    /**
     * @param TransferException|null $exception
     * @return bool
     */
    private function isConnectError(TransferException $exception = null)
    {
        return $exception instanceof ConnectException;
    }

    /**
     * @return PluralizeFilter
     */
    final protected static function getPluralizeFilter()
    {
        if (null === self::$filterPluralize) {
            self::$filterPluralize = new PluralizeFilter();
        }

        return self::$filterPluralize;
    }

    /**
     * @return CamelCaseToDash
     */
    final protected static function getCamelToDashFilter()
    {
        if (null === self::$filterCamelToDash) {
            self::$filterCamelToDash = new CamelCaseToDash();
        }

        return self::$filterCamelToDash;
    }
}
