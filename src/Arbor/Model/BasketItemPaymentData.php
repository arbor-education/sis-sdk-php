<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BasketItemPaymentData extends ModelBase
{
    const BASKET_ITEM = 'basketItem';

    const NAME = 'name';

    const VALUE = 'value';

    protected $_resourceType = ResourceType::BASKET_ITEM_PAYMENT_DATA;

    /**
     * @param Query $query
     * @return BasketItemPaymentData[] | Collection
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
     * @return BasketItem
     */
    public function getBasketItem()
    {
        return $this->getProperty('basketItem');
    }

    /**
     * @param BasketItem $basketItem
     */
    public function setBasketItem(BasketItem $basketItem = null)
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
    public function setName($name = null)
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
    public function setValue($value = null)
    {
        $this->setProperty('value', $value);
    }

}
