<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerAccountNotificationThreshold extends ModelBase
{
    public const CUSTOMER_ACCOUNT = 'customerAccount';

    public const TYPE = 'type';

    public const THRESHOLD = 'threshold';

    protected $_resourceType = ResourceType::CUSTOMER_ACCOUNT_NOTIFICATION_THRESHOLD;

    /**
     * @param Query $query
     * @return CustomerAccountNotificationThreshold[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_ACCOUNT_NOTIFICATION_THRESHOLD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerAccountNotificationThreshold
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_ACCOUNT_NOTIFICATION_THRESHOLD, $id);
    }

    /**
     * @return \Arbor\Model\CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param \Arbor\Model\CustomerAccount $customerAccount
     */
    public function setCustomerAccount(\Arbor\Model\CustomerAccount $customerAccount = null)
    {
        $this->setProperty('customerAccount', $customerAccount);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return string
     */
    public function getThreshold()
    {
        return $this->getProperty('threshold');
    }

    /**
     * @param string $threshold
     */
    public function setThreshold(string $threshold = null)
    {
        $this->setProperty('threshold', $threshold);
    }
}
