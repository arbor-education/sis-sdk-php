<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class EnabledFeature extends ModelBase
{

    const FEATURE_IDENTIFIER = 'featureIdentifier';

    const CRM_CONTRACT_SERVICE_SUBSCRIPTION_ID = 'crmContractServiceSubscriptionId';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::ENABLED_FEATURE;

    /**
     * @param \Arbor\Query\Query $query
     * @return EnabledFeature[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("EnabledFeature");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EnabledFeature
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ENABLED_FEATURE, $id);
    }

    /**
     * @return string
     */
    public function getFeatureIdentifier()
    {
        return $this->getProperty("featureIdentifier");
    }

    /**
     * @param string $featureIdentifier
     */
    public function setFeatureIdentifier($featureIdentifier = null)
    {
        $this->setProperty("featureIdentifier", $featureIdentifier);
    }

    /**
     * @return int
     */
    public function getCrmContractServiceSubscriptionId()
    {
        return $this->getProperty("crmContractServiceSubscriptionId");
    }

    /**
     * @param int $crmContractServiceSubscriptionId
     */
    public function setCrmContractServiceSubscriptionId($crmContractServiceSubscriptionId = null)
    {
        $this->setProperty("crmContractServiceSubscriptionId", $crmContractServiceSubscriptionId);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }


}
