<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Order extends ModelBase
{
    public const ORDER_TYPE = 'orderType';

    public const PAYMENT_STATUS = 'paymentStatus';

    public const FULFILLMENT_STATUS = 'fulfillmentStatus';

    public const USER = 'user';

    public const CLIENT = 'client';

    protected $_resourceType = ResourceType::ORDER;

    /**
     * @param Query $query
     * @return Order[] | Collection
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

        $query->setResourceType(ResourceType::ORDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Order
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ORDER, $id);
    }

    /**
     * @return string
     */
    public function getOrderType()
    {
        return $this->getProperty('orderType');
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(string $orderType = null)
    {
        $this->setProperty('orderType', $orderType);
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->getProperty('paymentStatus');
    }

    /**
     * @param string $paymentStatus
     */
    public function setPaymentStatus(string $paymentStatus = null)
    {
        $this->setProperty('paymentStatus', $paymentStatus);
    }

    /**
     * @return string
     */
    public function getFulfillmentStatus()
    {
        return $this->getProperty('fulfillmentStatus');
    }

    /**
     * @param string $fulfillmentStatus
     */
    public function setFulfillmentStatus(string $fulfillmentStatus = null)
    {
        $this->setProperty('fulfillmentStatus', $fulfillmentStatus);
    }

    /**
     * @return \Arbor\Model\User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param \Arbor\Model\User $user
     */
    public function setUser(\Arbor\Model\User $user = null)
    {
        $this->setProperty('user', $user);
    }

    /**
     * @return string
     */
    public function getClient()
    {
        return $this->getProperty('client');
    }

    /**
     * @param string $client
     */
    public function setClient(string $client = null)
    {
        $this->setProperty('client', $client);
    }
}
