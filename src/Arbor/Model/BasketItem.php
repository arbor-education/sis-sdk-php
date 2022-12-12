<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BasketItem extends ModelBase
{
    const BASKET = 'basket';

    const PAYMENT_AMOUNT = 'paymentAmount';

    const ADDED_DATETIME = 'addedDatetime';

    const PAYING_FOR = 'payingFor';

    const QUANTITY = 'quantity';

    const STUDENT = 'student';

    protected $_resourceType = ResourceType::BASKET_ITEM;

    /**
     * @param Query $query
     * @return BasketItem[] | Collection
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

        $query->setResourceType(ResourceType::BASKET_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BasketItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BASKET_ITEM, $id);
    }

    /**
     * @return Basket
     */
    public function getBasket()
    {
        return $this->getProperty('basket');
    }

    /**
     * @param Basket $basket
     */
    public function setBasket(Basket $basket = null)
    {
        $this->setProperty('basket', $basket);
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
    public function setPaymentAmount($paymentAmount = null)
    {
        $this->setProperty('paymentAmount', $paymentAmount);
    }

    /**
     * @return \DateTime
     */
    public function getAddedDatetime()
    {
        return $this->getProperty('addedDatetime');
    }

    /**
     * @param \DateTime $addedDatetime
     */
    public function setAddedDatetime(\DateTime $addedDatetime = null)
    {
        $this->setProperty('addedDatetime', $addedDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getPayingFor()
    {
        return $this->getProperty('payingFor');
    }

    /**
     * @param ModelBase $payingFor
     */
    public function setPayingFor(ModelBase $payingFor = null)
    {
        $this->setProperty('payingFor', $payingFor);
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->getProperty('quantity');
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity = null)
    {
        $this->setProperty('quantity', $quantity);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }
}
