<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OrderPayment extends ModelBase
{
    public const ORDER = 'order';

    public const PAYMENT_AMOUNT = 'paymentAmount';

    protected $_resourceType = ResourceType::ORDER_PAYMENT;

    /**
     * @param Query $query
     * @return OrderPayment[] | Collection
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

        $query->setResourceType(ResourceType::ORDER_PAYMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OrderPayment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ORDER_PAYMENT, $id);
    }

    /**
     * @return \Arbor\Model\Order
     */
    public function getOrder()
    {
        return $this->getProperty('order');
    }

    /**
     * @param \Arbor\Model\Order $order
     */
    public function setOrder(\Arbor\Model\Order $order = null)
    {
        $this->setProperty('order', $order);
    }

    /**
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->getProperty('paymentAmount');
    }

    /**
     * @param string $paymentAmount
     */
    public function setPaymentAmount(string $paymentAmount = null)
    {
        $this->setProperty('paymentAmount', $paymentAmount);
    }
}
