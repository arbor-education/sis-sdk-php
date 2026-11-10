<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OrderPaymentAttribute extends ModelBase
{
    public const ORDER_PAYMENT = 'orderPayment';

    public const ATTRIBUTE = 'attribute';

    public const VALUE = 'value';

    protected $_resourceType = ResourceType::ORDER_PAYMENT_ATTRIBUTE;

    /**
     * @param Query $query
     * @return OrderPaymentAttribute[] | Collection
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

        $query->setResourceType(ResourceType::ORDER_PAYMENT_ATTRIBUTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OrderPaymentAttribute
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ORDER_PAYMENT_ATTRIBUTE, $id);
    }

    /**
     * @return \Arbor\Model\OrderPayment
     */
    public function getOrderPayment()
    {
        return $this->getProperty('orderPayment');
    }

    /**
     * @param \Arbor\Model\OrderPayment $orderPayment
     */
    public function setOrderPayment(\Arbor\Model\OrderPayment $orderPayment = null)
    {
        $this->setProperty('orderPayment', $orderPayment);
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
        return $this->getProperty('attribute');
    }

    /**
     * @param string $attribute
     */
    public function setAttribute(string $attribute = null)
    {
        $this->setProperty('attribute', $attribute);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }

    /**
     * @param string $value
     */
    public function setValue(string $value = null)
    {
        $this->setProperty('value', $value);
    }
}
