<?php
namespace Arbor\Api\Gateway;

use Arbor\Api\ServerErrorException;
use Arbor\ChangeLog\Change;
use Arbor\Filter\CamelCaseToDash;
use Arbor\Model\Collection;
use Arbor\Model\Hydrator;
use \Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Guzzle\Common\Exception\RuntimeException;
use \Guzzle\Http\Client;
use \Arbor\Filter\Pluralize;
use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Plugin\Backoff\BackoffPlugin;

class RestGateway implements GatewayInterface
{
    const HTTP_METHOD_GET = "get";
    const HTTP_METHOD_POST = "post";
    const HTTP_METHOD_PUT = "put";
    const HTTP_METHOD_DELETE = "delete";

    /**@var string $_baseUrl*/
    protected $_baseUrl;
    /**@var string $_authUser*/
    protected $_authUser;
    /**@var string $_authPassword*/
    protected $_authPassword;
    /**@var \Guzzle\Http\Client $_httpClient*/
    protected $_httpClient;
    /**@var string $_applicationId*/
    protected $_applicationId;

    /**
     * @param string $baseUrl
     * @param string $authUser
     * @param string $authPassword
     * @param string $userAgent
     */
    public function __construct($baseUrl="", $authUser="", $authPassword="", $userAgent="Arbor PHP SDK", $autoRetry = true)
    {
        $this->_httpClient = new Client();
        $this->_httpClient->setUserAgent($userAgent);

        if ($autoRetry) {
            $backoffPlugin = BackoffPlugin::getExponentialBackoff(2);
            $this->_httpClient->addSubscriber($backoffPlugin);
        }

        $this->setBaseUrl($baseUrl);
        $this->setAuthUser($authUser);
        $this->setAuthPassword($authPassword);
    }

    /**
     * @param \Arbor\Model\ModelBase $model
     * @return \Arbor\Model\ModelBase
     */
    public function create($model)
    {
        $filterPluralize = new \Arbor\Filter\PluralizeFilter();
        $filterCamelToDash = new CamelCaseToDash();

        $pluralResource = $filterPluralize->filter($model->getResourceType());
        $resource = strtolower($filterCamelToDash->filter($pluralResource));
        $url = "/rest-v2/$resource";

        $hydrator = new Hydrator($this);
        $arrayRepresentation = $hydrator->extractArray($model);

        $resourceRoot = lcfirst($model->getResourceType());
        $responseRepresentation = $this->sendRequest(
            self::HTTP_METHOD_POST,
            $url,
            json_encode(
                ["request"=>
                        [
                            $resourceRoot => $arrayRepresentation,
                        ]
                ]
            )
        );

        try {
            if (array_key_exists($resourceRoot, $responseRepresentation)) {
                $resultingModelRepresentation = $responseRepresentation[$resourceRoot];
            } else {
                throw new Exception("API Error: ".print_r($responseRepresentation, true));
            }
        } catch (\Guzzle\Common\Exception\RuntimeException $e) {
            throw new Exception("Invalid response body: ". $response->getBody(true));
        }

        $hydrator->hydrateModel($model, $resultingModelRepresentation);
        return $model;
    }

    /**
     * @param ModelBase $model
     * @return ModelBase
     * @throws Exception
     */
    public function refresh($model)
    {
        $url = $model->getResourceUrl();
        $request = $this->getHttpClient()->get($url);
        $request->setAuth($this->getAuthUser(), $this->getAuthPassword());
        $response = $request->send();
        $arrayRepresentation = $response->json();
        $resourceRoot = lcfirst($model->getResourceType());
        if (array_key_exists($resourceRoot, $arrayRepresentation)) {
            $hydrator = new Hydrator($this);
            $hydrator->hydrateModel($model, $arrayRepresentation[$resourceRoot]);
            return $model;
        } else {
            throw new Exception("Resource {$model->getResourceType()} with ID {$model->getResourceId()} could not be retrieved from URL: $url");
        }
    }

    /**
     * @param string $resource
     * @param string $id
     * @return \Arbor\Model\ModelBase
     * @throws Exception
     */
    public function retrieve($resource, $id)
    {
        $filterPluralize = new \Arbor\Filter\PluralizeFilter();
        $filterCamelToDash = new CamelCaseToDash();

        $resourceSegment = strtolower($filterCamelToDash->filter($filterPluralize->filter($resource)));

        $url = "/rest-v2/$resourceSegment/$id";

        $arrayRepresentation = $this->sendRequest(self::HTTP_METHOD_GET, $url);

        $resourceRoot = lcfirst($resource);
        if (array_key_exists($resourceRoot, $arrayRepresentation)) {
            $model = $this->instantiateModel($resource);
            $hydrator = new Hydrator($this);
            $hydrator->hydrateModel($model, $arrayRepresentation[$resourceRoot]);
            $model->initialArrayRepresentation = $arrayRepresentation;

            return $model;
        } else {
            throw new Exception("Resource $resource with ID $id could not be retrieved from URL: $url");
        }
    }

    /**
     * @param string $resourceType
     * @return ModelBase
     */
    public function instantiateModel($resourceType)
    {
        if (strstr($resourceType, "_")) {
            //This is a module resource
            list($modulePrefix, $moduleResource) = explode("_", $resourceType, 2);
            $modelClass = "Arbor\\Model\\$modulePrefix\\$moduleResource";
            $modelClassFile = __DIR__."/../../Model/$modulePrefix/$moduleResource.php";
        } else {
            $modelClass = "Arbor\\Model\\$resourceType";
            $modelClassFile = __DIR__."/../../Model/$resourceType.php";
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
     * @param \Arbor\Model\ModelBase $model
     */
    public function update($model)
    {
        $url = $model->getResourceUrl();
        $resourceType = $model->getResourceType();

        $hydrator = new Hydrator($this);
        $arrayRepresentation = $hydrator->extractArray($model);
        $resourceRoot = lcfirst($resourceType);

        $previousModel = $this->retrieve($resourceType, $model->getResourceId());
        $prevModelArrRepresentation = $hydrator->extractArray($previousModel);
        $modelDiff = $this->diffArrayRepresentationRecursive($arrayRepresentation, $prevModelArrRepresentation);

        $body = json_encode(
                    ["request"=>
                        [
                            $resourceRoot => $modelDiff,
                    ]
                ]
        );

        if (!empty($modelDiff)) {
            $responseRepresentation = $this->sendRequest(self::HTTP_METHOD_PUT, $url, $body);
        } else {
            return $model;
        }

        //Revision ID is a read-only property so lets remove it before sending the update request to the API
        if (array_key_exists("revisionId", $responseRepresentation)) {
            unset($responseRepresentation['revisionId']);
        }

        if (array_key_exists($resourceRoot, $responseRepresentation)) {
            $resultingModelRepresentation = $responseRepresentation[$resourceRoot];
        } else {
            throw new Exception("API Error: ".print_r($responseRepresentation, true));
        }

        $hydrator->hydrateModel($model, $resultingModelRepresentation);

        return $model;
    }

    /**
     * @param \Arbor\Model\ModelBase $model
     */
    public function delete($model)
    {
        $request = $this->getHttpClient()->delete($model->getResourceUrl());
        $request->setAuth($this->getAuthUser(), $this->getAuthPassword());
        $response = $request->send();
        $arrayRepresentation = $response->json();
    }

    /**
     * @param $resource
     * @return \Arbor\Resource\ResourceMetadata
     */
    public function describe($resource)
    {
        // TODO: Implement describe() method.
    }

    /**
     * @param string $resourceType
     * @param int $fromRevision
     * @param int $toRevision
     * @return \Arbor\Changelog\Change[]
     */
    public function getChanges($resourceType, $fromRevision=0, $toRevision=-1)
    {
        $filterPluralize = new \Arbor\Filter\PluralizeFilter();
        $filterCamelToDash = new CamelCaseToDash();

        $pluralResource = $filterPluralize->filter($resourceType);
        $resourceSegment = strtolower($filterCamelToDash->filter($pluralResource));

        $uri = "/rest-v2/$resourceSegment/changelog?";
        if ($fromRevision > 0) {
            $uri .= "from-revision=$fromRevision&";
        }

        if ($toRevision > -1) {
            $uri.="to-revision=$toRevision&";
        }

        $arrayRepresentation = $this->sendRequest(self::HTTP_METHOD_GET, $uri);

        $changes = [];
        if (array_key_exists("changes", $arrayRepresentation)) {
            $hydrator = new Hydrator($this);
            $results = $arrayRepresentation["changes"];
            foreach ($results as $result) {
                $model = $this->instantiateModel($resourceType);
                $hydrator->hydrateModel($model, $result["changedObject"]);
                $changes[] = new Change($model, $result['changeType'], $result['fromRevision'], $result['toRevision']);
            }
        }
        return $changes;
    }

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\Collection
     */
    public function query($query)
    {
        $filterPluralize = new \Arbor\Filter\PluralizeFilter();
        $filterCamelToDash = new CamelCaseToDash();

        $pluralResource = $filterPluralize->filter($query->getResourceType());
        $resource = strtolower($filterCamelToDash->filter($pluralResource));
        $resourceRoot = lcfirst($pluralResource);
        $url = "/rest-v2/$pluralResource";

        $queryString = $query->getQueryString();

        if (strlen($queryString) > 0) {
            $url .= "?".$queryString;
        }

        $arrayRepresentation = $this->sendRequest(self::HTTP_METHOD_GET, $url);

        $listing = new Collection();
        if (array_key_exists($resourceRoot, $arrayRepresentation)) {
            $hydrator = new Hydrator($this);
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
     * @param string $authPassword
     */
    public function setAuthPassword($authPassword)
    {
        $this->_authPassword = $authPassword;
    }

    /**
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->_authPassword;
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
    public function getAuthUser()
    {
        return $this->_authUser;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl($baseUrl)
    {
        $this->_baseUrl = $baseUrl;
        $this->getHttpClient()->setBaseUrl($baseUrl);
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->_baseUrl;
    }

    /**
     * @param \Guzzle\Http\Client $httpClient
     */
    public function setHttpClient($httpClient)
    {
        $this->_httpClient = $httpClient;
    }

    /**
     * @return \Guzzle\Http\Client
     */
    public function getHttpClient()
    {
        return $this->_httpClient;
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $body
     * @param array $headers
     * @return \Guzzle\Http\Message\Response
     */
    public function sendRequest($method, $url, $body=null, $headers=null)
    {
        //Set a generic error message
        $message = "API Error";
        //Uncomment this line to allow you to trigger a debug session in the Mis project
        //$url = $url . "?XDEBUG_SESSION_START=yes";
        $responsePayload = null;
        $code = 0;

        try {
            $request = $this->getHttpClient()->createRequest($method, $url, $headers, $body);
            $request->setAuth($this->getAuthUser(), $this->getAuthPassword());

            //Allow the user to direct requests at a common API endpoint if they specify the applicationId as a request header
            if ($this->getBaseUrl()=="https://api.uk.arbor.sc/rest-v2" && $this->getApplicationId()) {
                $request->addHeader("x-mis-application-id", $this->getApplicationId());
            }
            $response = $request->send();
            $code = $response->getStatusCode();
            $responsePayload = $response->json();
        } catch (BadResponseException $e) {
            //Default to using the code and message from the Guzzle exception.
            //This is useful in case the response does not contain valid json
            $responsePayload = $e->getResponse()->json();
        } catch (RuntimeException $e) {
            throw new ServerErrorException("An unexpected error has occurred: " . $e->getMessage(), 0, $e);
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
        if (isset($responsePayload['response']['errors'])) {
            if (is_array($responsePayload['response']['errors'])&&count($responsePayload['response']['errors'])) {
                $serverException = $responsePayload['response']['errors'][0]["exception"];
                $serverMessage = $responsePayload['response']['errors'][0]["message"];
                $serverTrace = $responsePayload['response']['errors'][0]["trace"];
                $message = "Server threw: $serverException with message: $serverMessage URL=$url";
            }
        }

        switch ($code) {
            case 422:
            case 200:
            case 201:
                // The request succeeded or failed due to validation errors.
                // This is not an exception so return the response
                return $responsePayload;
            break;
            case 404:
                $exception = new \Arbor\Api\ResourceNotFoundException($message);
            break;
            default:
                $exception = new \Arbor\Api\ServerErrorException($message);
                if (isset($serverException)) {
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
        foreach ($array1 as $key => $value) {
            if (is_array($value)) {
                if (!isset($array2[$key])) {
                    $difference[$key] = $value;
                } elseif (!is_array($array2[$key])) {
                    $difference[$key] = $value;
                } else { // This is some of MIS model types
                    $new_diff = $this->diffArrayRepresentationRecursive($value, $array2[$key]);
                    if ($new_diff != false) {
                        $difference[$key] = $new_diff;
                        if (array_key_exists('entityType', $array2[$key])) { // Preserve 'entityType' and 'href' since those values are mandatory, but not changed
                            $difference[$key]['entityType'] = $array1[$key]['entityType'];
                            $difference[$key]['href'] = $array1[$key]['href'];
                        }
                    }
                }
            } elseif (!array_key_exists($key, $array2) || $array2[$key] != $value) {
                $difference[$key] = $value;
            }
        }

        return !isset($difference) ? 0 : $difference;
    }

    /**
     * @param string $applicationId
     */
    public function setApplicationId($applicationId)
    {
        $this->_applicationId = $applicationId;
    }

    /**
     * @return string
     */
    public function getApplicationId()
    {
        return $this->_applicationId;
    }
}
