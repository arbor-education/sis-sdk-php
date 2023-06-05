<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AiRequest extends ModelBase
{
    const PROVIDER = 'provider';

    const MODEL = 'model';

    const FEATURE = 'feature';

    const USER_INPUT = 'userInput';

    const LINKED_ENTITY = 'linkedEntity';

    const REQUEST_PAYLOAD = 'requestPayload';

    const RESPONSE_PAYLOAD = 'responsePayload';

    const CLEANED_RESPONSE = 'cleanedResponse';

    const RESPONSE_IDENTIFIER = 'responseIdentifier';

    const PARENT_RESPONSE_IDENTIFIER = 'parentResponseIdentifier';

    const COST_UNIT = 'costUnit';

    const COST = 'cost';

    const CUSTOMER_RATING = 'customerRating';

    const CUSTOMER_RESPONSE = 'customerResponse';

    protected $_resourceType = ResourceType::AI_REQUEST;

    /**
     * @param Query $query
     * @return AiRequest[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
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
    public function setProvider($provider = null)
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
    public function setModel($model = null)
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
    public function setFeature($feature = null)
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
    public function setUserInput($userInput = null)
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
    public function setLinkedEntity(ModelBase $linkedEntity = null)
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
    public function setRequestPayload($requestPayload = null)
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
    public function setResponsePayload($responsePayload = null)
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
    public function setCleanedResponse($cleanedResponse = null)
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
    public function setResponseIdentifier($responseIdentifier = null)
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
    public function setParentResponseIdentifier($parentResponseIdentifier = null)
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
    public function setCostUnit($costUnit = null)
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
    public function setCost($cost = null)
    {
        $this->setProperty('cost', $cost);
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
    public function setCustomerRating($customerRating = null)
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
    public function setCustomerResponse($customerResponse = null)
    {
        $this->setProperty('customerResponse', $customerResponse);
    }
}
