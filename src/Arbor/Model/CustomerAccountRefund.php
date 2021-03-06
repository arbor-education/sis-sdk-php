<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomerAccountRefund extends ModelBase
{
    const CUSTOMER_ACCOUNT = 'customerAccount';

    const REFUND_DATETIME = 'refundDatetime';

    const REFUND = 'refund';

    const TRANSACTION = 'transaction';

    const STRIPE_REFUND_TRANSACTION = 'stripeRefundTransaction';

    const REFUND_SUCCEEDED_DATETIME = 'refundSucceededDatetime';

    const REFUND_FAILED_DATETIME = 'refundFailedDatetime';

    protected $_resourceType = ResourceType::CUSTOMER_ACCOUNT_REFUND;

    /**
     * @param Query $query
     * @return CustomerAccountRefund[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_ACCOUNT_REFUND);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerAccountRefund
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_ACCOUNT_REFUND, $id);
    }

    /**
     * @return CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param CustomerAccount $customerAccount
     */
    public function setCustomerAccount(CustomerAccount $customerAccount = null)
    {
        $this->setProperty('customerAccount', $customerAccount);
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
    public function getRefund()
    {
        return $this->getProperty('refund');
    }

    /**
     * @param string $refund
     */
    public function setRefund($refund = null)
    {
        $this->setProperty('refund', $refund);
    }

    /**
     * @return ModelBase
     */
    public function getTransaction()
    {
        return $this->getProperty('transaction');
    }

    /**
     * @param ModelBase $transaction
     */
    public function setTransaction(ModelBase $transaction = null)
    {
        $this->setProperty('transaction', $transaction);
    }

    /**
     * @return StripeRefundTransaction
     */
    public function getStripeRefundTransaction()
    {
        return $this->getProperty('stripeRefundTransaction');
    }

    /**
     * @param StripeRefundTransaction $stripeRefundTransaction
     */
    public function setStripeRefundTransaction(StripeRefundTransaction $stripeRefundTransaction = null)
    {
        $this->setProperty('stripeRefundTransaction', $stripeRefundTransaction);
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
}
