<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AiRequest extends ModelBase
{
    public const PROVIDER = 'provider';

    public const MODEL = 'model';

    public const FEATURE = 'feature';

    public const USER_INPUT = 'userInput';

    public const LINKED_ENTITY = 'linkedEntity';

    public const REQUEST_PAYLOAD = 'requestPayload';

    public const RESPONSE_PAYLOAD = 'responsePayload';

    public const CLEANED_RESPONSE = 'cleanedResponse';

    public const RESPONSE_IDENTIFIER = 'responseIdentifier';

    public const PARENT_RESPONSE_IDENTIFIER = 'parentResponseIdentifier';

    public const COST_UNIT = 'costUnit';

    public const COST = 'cost';

    public const PROMPT_TOKENS = 'promptTokens';

    public const COMPLETION_TOKENS = 'completionTokens';

    public const CUSTOMER_RATING = 'customerRating';

    public const CUSTOMER_RESPONSE = 'customerResponse';

    public const LOG = 'log';

    protected $_resourceType = ResourceType::AI_REQUEST;

    /**
     * @param Query $query
     * @return AiRequest[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::AI_REQUEST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AiRequest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AI_REQUEST, $id);
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }

    /**
     * @param string $provider
     */
    public function setProvider(string $provider = null)
    {
        $this->setProperty('provider', $provider);
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->getProperty('model');
    }

    /**
     * @param string $model
     */
    public function setModel(string $model = null)
    {
        $this->setProperty('model', $model);
    }

    /**
     * @return string
     */
    public function getFeature()
    {
        return $this->getProperty('feature');
    }

    /**
     * @param string $feature
     */
    public function setFeature(string $feature = null)
    {
        $this->setProperty('feature', $feature);
    }

    /**
     * @return string
     */
    public function getUserInput()
    {
        return $this->getProperty('userInput');
    }

    /**
     * @param string $userInput
     */
    public function setUserInput(string $userInput = null)
    {
        $this->setProperty('userInput', $userInput);
    }

    /**
     * @return ModelBase
     */
    public function getLinkedEntity()
    {
        return $this->getProperty('linkedEntity');
    }

    /**
     * @param ModelBase $linkedEntity
     */
    public function setLinkedEntity(\ModelBase $linkedEntity = null)
    {
        $this->setProperty('linkedEntity', $linkedEntity);
    }

    /**
     * @return string
     */
    public function getRequestPayload()
    {
        return $this->getProperty('requestPayload');
    }

    /**
     * @param string $requestPayload
     */
    public function setRequestPayload(string $requestPayload = null)
    {
        $this->setProperty('requestPayload', $requestPayload);
    }

    /**
     * @return string
     */
    public function getResponsePayload()
    {
        return $this->getProperty('responsePayload');
    }

    /**
     * @param string $responsePayload
     */
    public function setResponsePayload(string $responsePayload = null)
    {
        $this->setProperty('responsePayload', $responsePayload);
    }

    /**
     * @return string
     */
    public function getCleanedResponse()
    {
        return $this->getProperty('cleanedResponse');
    }

    /**
     * @param string $cleanedResponse
     */
    public function setCleanedResponse(string $cleanedResponse = null)
    {
        $this->setProperty('cleanedResponse', $cleanedResponse);
    }

    /**
     * @return string
     */
    public function getResponseIdentifier()
    {
        return $this->getProperty('responseIdentifier');
    }

    /**
     * @param string $responseIdentifier
     */
    public function setResponseIdentifier(string $responseIdentifier = null)
    {
        $this->setProperty('responseIdentifier', $responseIdentifier);
    }

    /**
     * @return string
     */
    public function getParentResponseIdentifier()
    {
        return $this->getProperty('parentResponseIdentifier');
    }

    /**
     * @param string $parentResponseIdentifier
     */
    public function setParentResponseIdentifier(string $parentResponseIdentifier = null)
    {
        $this->setProperty('parentResponseIdentifier', $parentResponseIdentifier);
    }

    /**
     * @return string
     */
    public function getCostUnit()
    {
        return $this->getProperty('costUnit');
    }

    /**
     * @param string $costUnit
     */
    public function setCostUnit(string $costUnit = null)
    {
        $this->setProperty('costUnit', $costUnit);
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->getProperty('cost');
    }

    /**
     * @param float $cost
     */
    public function setCost(float $cost = null)
    {
        $this->setProperty('cost', $cost);
    }

    /**
     * @return int
     */
    public function getPromptTokens()
    {
        return $this->getProperty('promptTokens');
    }

    /**
     * @param int $promptTokens
     */
    public function setPromptTokens(int $promptTokens = null)
    {
        $this->setProperty('promptTokens', $promptTokens);
    }

    /**
     * @return int
     */
    public function getCompletionTokens()
    {
        return $this->getProperty('completionTokens');
    }

    /**
     * @param int $completionTokens
     */
    public function setCompletionTokens(int $completionTokens = null)
    {
        $this->setProperty('completionTokens', $completionTokens);
    }

    /**
     * @return string
     */
    public function getCustomerRating()
    {
        return $this->getProperty('customerRating');
    }

    /**
     * @param string $customerRating
     */
    public function setCustomerRating(string $customerRating = null)
    {
        $this->setProperty('customerRating', $customerRating);
    }

    /**
     * @return string
     */
    public function getCustomerResponse()
    {
        return $this->getProperty('customerResponse');
    }

    /**
     * @param string $customerResponse
     */
    public function setCustomerResponse(string $customerResponse = null)
    {
        $this->setProperty('customerResponse', $customerResponse);
    }

    /**
     * @return string
     */
    public function getLog()
    {
        return $this->getProperty('log');
    }

    /**
     * @param string $log
     */
    public function setLog(string $log = null)
    {
        $this->setProperty('log', $log);
    }
}
