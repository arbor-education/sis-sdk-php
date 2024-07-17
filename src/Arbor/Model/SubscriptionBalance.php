<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SubscriptionBalance extends ModelBase
{
    public const SERVICE_SUBSCRIPTION_ID = 'serviceSubscriptionId';

    public const CANCELLED_DATE = 'cancelledDate';

    public const TOKEN_TYPE = 'tokenType';

    public const TOKEN_QUANTITY = 'tokenQuantity';

    public const NAME = 'name';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const ACTIVE = 'active';

    protected $_resourceType = ResourceType::SUBSCRIPTION_BALANCE;

    /**
     * @param Query $query
     * @return SubscriptionBalance[] | Collection
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

        $query->setResourceType(ResourceType::SUBSCRIPTION_BALANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SubscriptionBalance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SUBSCRIPTION_BALANCE, $id);
    }

    /**
     * @return int
     */
    public function getServiceSubscriptionId()
    {
        return $this->getProperty('serviceSubscriptionId');
    }

    /**
     * @param int $serviceSubscriptionId
     */
    public function setServiceSubscriptionId(int $serviceSubscriptionId = null)
    {
        $this->setProperty('serviceSubscriptionId', $serviceSubscriptionId);
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDate()
    {
        return $this->getProperty('cancelledDate');
    }

    /**
     * @param \DateTime $cancelledDate
     */
    public function setCancelledDate(\DateTime $cancelledDate = null)
    {
        $this->setProperty('cancelledDate', $cancelledDate);
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->getProperty('tokenType');
    }

    /**
     * @param string $tokenType
     */
    public function setTokenType(string $tokenType = null)
    {
        $this->setProperty('tokenType', $tokenType);
    }

    /**
     * @return int
     */
    public function getTokenQuantity()
    {
        return $this->getProperty('tokenQuantity');
    }

    /**
     * @param int $tokenQuantity
     */
    public function setTokenQuantity(int $tokenQuantity = null)
    {
        $this->setProperty('tokenQuantity', $tokenQuantity);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
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

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }
}
