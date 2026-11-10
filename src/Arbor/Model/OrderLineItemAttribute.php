<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OrderLineItemAttribute extends ModelBase
{
    public const ORDER_LINE_ITEM = 'orderLineItem';

    public const ATTRIBUTE = 'attribute';

    public const VALUE = 'value';

    protected $_resourceType = ResourceType::ORDER_LINE_ITEM_ATTRIBUTE;

    /**
     * @param Query $query
     * @return OrderLineItemAttribute[] | Collection
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

        $query->setResourceType(ResourceType::ORDER_LINE_ITEM_ATTRIBUTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OrderLineItemAttribute
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ORDER_LINE_ITEM_ATTRIBUTE, $id);
    }

    /**
     * @return \Arbor\Model\OrderLineItem
     */
    public function getOrderLineItem()
    {
        return $this->getProperty('orderLineItem');
    }

    /**
     * @param \Arbor\Model\OrderLineItem $orderLineItem
     */
    public function setOrderLineItem(\Arbor\Model\OrderLineItem $orderLineItem = null)
    {
        $this->setProperty('orderLineItem', $orderLineItem);
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
