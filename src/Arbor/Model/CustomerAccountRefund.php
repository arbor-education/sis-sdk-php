<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerAccountRefund extends ModelBase
{
    public const CUSTOMER_ACCOUNT = 'customerAccount';

    public const REFUND_DATETIME = 'refundDatetime';

    public const REFUND = 'refund';

    public const TRANSACTION = 'transaction';

    public const STRIPE_REFUND_TRANSACTION = 'stripeRefundTransaction';

    public const REFUND_SUCCEEDED_DATETIME = 'refundSucceededDatetime';

    public const REFUND_FAILED_DATETIME = 'refundFailedDatetime';

    protected $_resourceType = ResourceType::CUSTOMER_ACCOUNT_REFUND;

    /**
     * @param Query $query
     * @return CustomerAccountRefund[] | Collection
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
     * @return \Arbor\Model\CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param \Arbor\Model\CustomerAccount $customerAccount
     */
    public function setCustomerAccount(\Arbor\Model\CustomerAccount $customerAccount = null)
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
    public function setRefund(string $refund = null)
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
    public function setTransaction(\ModelBase $transaction = null)
    {
        $this->setProperty('transaction', $transaction);
    }

    /**
     * @return \Arbor\Model\StripeRefundTransaction
     */
    public function getStripeRefundTransaction()
    {
        return $this->getProperty('stripeRefundTransaction');
    }

    /**
     * @param \Arbor\Model\StripeRefundTransaction $stripeRefundTransaction
     */
    public function setStripeRefundTransaction(\Arbor\Model\StripeRefundTransaction $stripeRefundTransaction = null)
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
