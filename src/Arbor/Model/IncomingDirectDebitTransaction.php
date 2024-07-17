<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IncomingDirectDebitTransaction extends ModelBase
{
    public const INCOMING_DIRECT_DEBIT_AGREEMENT = 'incomingDirectDebitAgreement';

    public const PAYMENT_PROVIDER_PAYOUT = 'paymentProviderPayout';

    public const PAYMENT_PROVIDER_TRANSACTION_IDENTIFIER = 'paymentProviderTransactionIdentifier';

    public const TRANSACTION_NET_AMOUNT = 'transactionNetAmount';

    public const TRANSACTION_FEE = 'transactionFee';

    public const TRANSACTION_REFERENCE = 'transactionReference';

    public const TRANSACTION_INITIATED_DATETIME = 'transactionInitiatedDatetime';

    public const TRANSACTION_SUCCEEDED_DATETIME = 'transactionSucceededDatetime';

    public const TRANSACTION_FAILED_DATETIME = 'transactionFailedDatetime';

    public const TRANSACTION_REFUNDED_DATETIME = 'transactionRefundedDatetime';

    public const CANCELLED_DATETIME = 'cancelledDatetime';

    public const CUSTOMER_NOTIFICATION_DATETIME = 'customerNotificationDatetime';

    protected $_resourceType = ResourceType::INCOMING_DIRECT_DEBIT_TRANSACTION;

    /**
     * @param Query $query
     * @return IncomingDirectDebitTransaction[] | Collection
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

        $query->setResourceType(ResourceType::INCOMING_DIRECT_DEBIT_TRANSACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IncomingDirectDebitTransaction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INCOMING_DIRECT_DEBIT_TRANSACTION, $id);
    }

    /**
     * @return \Arbor\Model\IncomingDirectDebitAgreement
     */
    public function getIncomingDirectDebitAgreement()
    {
        return $this->getProperty('incomingDirectDebitAgreement');
    }

    /**
     * @param \Arbor\Model\IncomingDirectDebitAgreement $incomingDirectDebitAgreement
     */
    public function setIncomingDirectDebitAgreement(\Arbor\Model\IncomingDirectDebitAgreement $incomingDirectDebitAgreement = null)
    {
        $this->setProperty('incomingDirectDebitAgreement', $incomingDirectDebitAgreement);
    }

    /**
     * @return \Arbor\Model\PaymentProviderPayout
     */
    public function getPaymentProviderPayout()
    {
        return $this->getProperty('paymentProviderPayout');
    }

    /**
     * @param \Arbor\Model\PaymentProviderPayout $paymentProviderPayout
     */
    public function setPaymentProviderPayout(\Arbor\Model\PaymentProviderPayout $paymentProviderPayout = null)
    {
        $this->setProperty('paymentProviderPayout', $paymentProviderPayout);
    }

    /**
     * @return string
     */
    public function getPaymentProviderTransactionIdentifier()
    {
        return $this->getProperty('paymentProviderTransactionIdentifier');
    }

    /**
     * @param string $paymentProviderTransactionIdentifier
     */
    public function setPaymentProviderTransactionIdentifier(string $paymentProviderTransactionIdentifier = null)
    {
        $this->setProperty('paymentProviderTransactionIdentifier', $paymentProviderTransactionIdentifier);
    }

    /**
     * @return string
     */
    public function getTransactionNetAmount()
    {
        return $this->getProperty('transactionNetAmount');
    }

    /**
     * @param string $transactionNetAmount
     */
    public function setTransactionNetAmount(string $transactionNetAmount = null)
    {
        $this->setProperty('transactionNetAmount', $transactionNetAmount);
    }

    /**
     * @return string
     */
    public function getTransactionFee()
    {
        return $this->getProperty('transactionFee');
    }

    /**
     * @param string $transactionFee
     */
    public function setTransactionFee(string $transactionFee = null)
    {
        $this->setProperty('transactionFee', $transactionFee);
    }

    /**
     * @return string
     */
    public function getTransactionReference()
    {
        return $this->getProperty('transactionReference');
    }

    /**
     * @param string $transactionReference
     */
    public function setTransactionReference(string $transactionReference = null)
    {
        $this->setProperty('transactionReference', $transactionReference);
    }

    /**
     * @return \DateTime
     */
    public function getTransactionInitiatedDatetime()
    {
        return $this->getProperty('transactionInitiatedDatetime');
    }

    /**
     * @param \DateTime $transactionInitiatedDatetime
     */
    public function setTransactionInitiatedDatetime(\DateTime $transactionInitiatedDatetime = null)
    {
        $this->setProperty('transactionInitiatedDatetime', $transactionInitiatedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getTransactionSucceededDatetime()
    {
        return $this->getProperty('transactionSucceededDatetime');
    }

    /**
     * @param \DateTime $transactionSucceededDatetime
     */
    public function setTransactionSucceededDatetime(\DateTime $transactionSucceededDatetime = null)
    {
        $this->setProperty('transactionSucceededDatetime', $transactionSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getTransactionFailedDatetime()
    {
        return $this->getProperty('transactionFailedDatetime');
    }

    /**
     * @param \DateTime $transactionFailedDatetime
     */
    public function setTransactionFailedDatetime(\DateTime $transactionFailedDatetime = null)
    {
        $this->setProperty('transactionFailedDatetime', $transactionFailedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getTransactionRefundedDatetime()
    {
        return $this->getProperty('transactionRefundedDatetime');
    }

    /**
     * @param \DateTime $transactionRefundedDatetime
     */
    public function setTransactionRefundedDatetime(\DateTime $transactionRefundedDatetime = null)
    {
        $this->setProperty('transactionRefundedDatetime', $transactionRefundedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDatetime()
    {
        return $this->getProperty('cancelledDatetime');
    }

    /**
     * @param \DateTime $cancelledDatetime
     */
    public function setCancelledDatetime(\DateTime $cancelledDatetime = null)
    {
        $this->setProperty('cancelledDatetime', $cancelledDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCustomerNotificationDatetime()
    {
        return $this->getProperty('customerNotificationDatetime');
    }

    /**
     * @param \DateTime $customerNotificationDatetime
     */
    public function setCustomerNotificationDatetime(\DateTime $customerNotificationDatetime = null)
    {
        $this->setProperty('customerNotificationDatetime', $customerNotificationDatetime);
    }
}
