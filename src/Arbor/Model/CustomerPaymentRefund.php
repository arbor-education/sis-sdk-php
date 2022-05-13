<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomerPaymentRefund extends ModelBase
{
    const CUSTOMER_PAYMENT = 'customerPayment';

    const REFUND_DATETIME = 'refundDatetime';

    const REFUND_AMOUNT = 'refundAmount';

    const REFUND_TRANSACTION = 'refundTransaction';

    const REFUND_SUCCEEDED_DATETIME = 'refundSucceededDatetime';

    const REFUND_FAILED_DATETIME = 'refundFailedDatetime';

    const CUSTOMER_PAYMENT_REFUND_METHOD = 'customerPaymentRefundMethod';

    protected $_resourceType = ResourceType::CUSTOMER_PAYMENT_REFUND;

    /**
     * @param Query $query
     * @return CustomerPaymentRefund[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_PAYMENT_REFUND);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerPaymentRefund
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_PAYMENT_REFUND, $id);
    }

    /**
     * @return CustomerPayment
     */
    public function getCustomerPayment()
    {
        return $this->getProperty('customerPayment');
    }

    /**
     * @param CustomerPayment $customerPayment
     */
    public function setCustomerPayment(CustomerPayment $customerPayment = null)
    {
        $this->setProperty('customerPayment', $customerPayment);
    }

    /**
     * @return \DateTime
     */
    public function getRefundDatetime()
    {
        return $this->getProperty('refundDatetime');
    }

    /**
     * @param \DateTime $refundDatetime
     */
    public function setRefundDatetime(\DateTime $refundDatetime = null)
    {
        $this->setProperty('refundDatetime', $refundDatetime);
    }

    /**
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->getProperty('refundAmount');
    }

    /**
     * @param string $refundAmount
     */
    public function setRefundAmount($refundAmount = null)
    {
        $this->setProperty('refundAmount', $refundAmount);
    }

    /**
     * @return ModelBase
     */
    public function getRefundTransaction()
    {
        return $this->getProperty('refundTransaction');
    }

    /**
     * @param ModelBase $refundTransaction
     */
    public function setRefundTransaction(ModelBase $refundTransaction = null)
    {
        $this->setProperty('refundTransaction', $refundTransaction);
    }

    /**
     * @return \DateTime
     */
    public function getRefundSucceededDatetime()
    {
        return $this->getProperty('refundSucceededDatetime');
    }

    /**
     * @param \DateTime $refundSucceededDatetime
     */
    public function setRefundSucceededDatetime(\DateTime $refundSucceededDatetime = null)
    {
        $this->setProperty('refundSucceededDatetime', $refundSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRefundFailedDatetime()
    {
        return $this->getProperty('refundFailedDatetime');
    }

    /**
     * @param \DateTime $refundFailedDatetime
     */
    public function setRefundFailedDatetime(\DateTime $refundFailedDatetime = null)
    {
        $this->setProperty('refundFailedDatetime', $refundFailedDatetime);
    }

    /**
     * @return string
     */
    public function getCustomerPaymentRefundMethod()
    {
        return $this->getProperty('customerPaymentRefundMethod');
    }

    /**
     * @param string $customerPaymentRefundMethod
     */
    public function setCustomerPaymentRefundMethod($customerPaymentRefundMethod = null)
    {
        $this->setProperty('customerPaymentRefundMethod', $customerPaymentRefundMethod);
    }

}
