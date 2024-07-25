<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EnabledFeature extends ModelBase
{
    public const FEATURE_IDENTIFIER = 'featureIdentifier';

    public const CRM_CONTRACT_SERVICE_SUBSCRIPTION_ID = 'crmContractServiceSubscriptionId';

    public const BILLING_SERVICE_CONTRACT_SUBSCRIPTION_ID = 'billingServiceContractSubscriptionId';

    public const SUBSCRIPTION_SOURCE = 'subscriptionSource';

    public const SUBSCRIPTION_IDENTIFIER = 'subscriptionIdentifier';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::ENABLED_FEATURE;

    /**
     * @param Query $query
     * @return EnabledFeature[] | Collection
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

        $query->setResourceType(ResourceType::ENABLED_FEATURE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EnabledFeature
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ENABLED_FEATURE, $id);
    }

    /**
     * @return string
     */
    public function getFeatureIdentifier()
    {
        return $this->getProperty('featureIdentifier');
    }

    /**
     * @param string $featureIdentifier
     */
    public function setFeatureIdentifier(string $featureIdentifier = null)
    {
        $this->setProperty('featureIdentifier', $featureIdentifier);
    }

    /**
     * @return int
     */
    public function getCrmContractServiceSubscriptionId()
    {
        return $this->getProperty('crmContractServiceSubscriptionId');
    }

    /**
     * @param int $crmContractServiceSubscriptionId
     */
    public function setCrmContractServiceSubscriptionId(int $crmContractServiceSubscriptionId = null)
    {
        $this->setProperty('crmContractServiceSubscriptionId', $crmContractServiceSubscriptionId);
    }

    /**
     * @return int
     */
    public function getBillingServiceContractSubscriptionId()
    {
        return $this->getProperty('billingServiceContractSubscriptionId');
    }

    /**
     * @param int $billingServiceContractSubscriptionId
     */
    public function setBillingServiceContractSubscriptionId(int $billingServiceContractSubscriptionId = null)
    {
        $this->setProperty('billingServiceContractSubscriptionId', $billingServiceContractSubscriptionId);
    }

    /**
     * @return string
     */
    public function getSubscriptionSource()
    {
        return $this->getProperty('subscriptionSource');
    }

    /**
     * @param string $subscriptionSource
     */
    public function setSubscriptionSource(string $subscriptionSource = null)
    {
        $this->setProperty('subscriptionSource', $subscriptionSource);
    }

    /**
     * @return string
     */
    public function getSubscriptionIdentifier()
    {
        return $this->getProperty('subscriptionIdentifier');
    }

    /**
     * @param string $subscriptionIdentifier
     */
    public function setSubscriptionIdentifier(string $subscriptionIdentifier = null)
    {
        $this->setProperty('subscriptionIdentifier', $subscriptionIdentifier);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }
}
