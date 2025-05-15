<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BasketItemPaymentData extends ModelBase
{
    public const BASKET_ITEM = 'basketItem';

    public const NAME = 'name';

    public const VALUE = 'value';

    protected $_resourceType = ResourceType::BASKET_ITEM_PAYMENT_DATA;

    /**
     * @param Query $query
     * @return BasketItemPaymentData[] | Collection
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

        $query->setResourceType(ResourceType::BASKET_ITEM_PAYMENT_DATA);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BasketItemPaymentData
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BASKET_ITEM_PAYMENT_DATA, $id);
    }

    /**
     * @return \Arbor\Model\BasketItem
     */
    public function getBasketItem()
    {
        return $this->getProperty('basketItem');
    }

    /**
     * @param \Arbor\Model\BasketItem $basketItem
     */
    public function setBasketItem(\Arbor\Model\BasketItem $basketItem = null)
    {
        $this->setProperty('basketItem', $basketItem);
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
