<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OrderLineItem extends ModelBase
{
    public const ORDER = 'order';

    public const ITEM = 'item';

    public const QUANTITY = 'quantity';

    public const ITEM_AMOUNT = 'itemAmount';

    public const TRANSACTION_FEE_AMOUNT = 'transactionFeeAmount';

    public const TRANSACTION_FEE_VAT_AMOUNT = 'transactionFeeVatAmount';

    public const DESCRIPTION = 'description';

    public const FULFILLMENT_STATUS = 'fulfillmentStatus';

    public const STRIPE_INCOMING_CARD_TRANSACTION = 'stripeIncomingCardTransaction';

    protected $_resourceType = ResourceType::ORDER_LINE_ITEM;

    /**
     * @param Query $query
     * @return OrderLineItem[] | Collection
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

        $query->setResourceType(ResourceType::ORDER_LINE_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OrderLineItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ORDER_LINE_ITEM, $id);
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
     * @return ModelBase
     */
    public function getItem()
    {
        return $this->getProperty('item');
    }

    /**
     * @param ModelBase $item
     */
    public function setItem(\ModelBase $item = null)
    {
        $this->setProperty('item', $item);
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
    public function setQuantity(int $quantity = null)
    {
        $this->setProperty('quantity', $quantity);
    }

    /**
     * @return string
     */
    public function getItemAmount()
    {
        return $this->getProperty('itemAmount');
    }

    /**
     * @param string $itemAmount
     */
    public function setItemAmount(string $itemAmount = null)
    {
        $this->setProperty('itemAmount', $itemAmount);
    }

    /**
     * @return string
     */
    public function getTransactionFeeAmount()
    {
        return $this->getProperty('transactionFeeAmount');
    }

    /**
     * @param string $transactionFeeAmount
     */
    public function setTransactionFeeAmount(string $transactionFeeAmount = null)
    {
        $this->setProperty('transactionFeeAmount', $transactionFeeAmount);
    }

    /**
     * @return string
     */
    public function getTransactionFeeVatAmount()
    {
        return $this->getProperty('transactionFeeVatAmount');
    }

    /**
     * @param string $transactionFeeVatAmount
     */
    public function setTransactionFeeVatAmount(string $transactionFeeVatAmount = null)
    {
        $this->setProperty('transactionFeeVatAmount', $transactionFeeVatAmount);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
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
     * @return \Arbor\Model\StripeIncomingCardTransaction
     */
    public function getStripeIncomingCardTransaction()
    {
        return $this->getProperty('stripeIncomingCardTransaction');
    }

    /**
     * @param \Arbor\Model\StripeIncomingCardTransaction $stripeIncomingCardTransaction
     */
    public function setStripeIncomingCardTransaction(\Arbor\Model\StripeIncomingCardTransaction $stripeIncomingCardTransaction = null)
    {
        $this->setProperty('stripeIncomingCardTransaction', $stripeIncomingCardTransaction);
    }
}
