<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IncomingCardTransaction extends ModelBase
{
    public const BILL_PAYER = 'billPayer';

    public const PAYMENT_PROVIDER = 'paymentProvider';

    public const PAYMENT_PROVIDER_PAYOUT = 'paymentProviderPayout';

    public const PAYMENT_PROVIDER_TRANSACTION_IDENTIFIER = 'paymentProviderTransactionIdentifier';

    public const TRANSACTION_NET_AMOUNT = 'transactionNetAmount';

    public const TRANSACTION_FEE_AMOUNT = 'transactionFeeAmount';

    public const TRANSACTION_REFERENCE = 'transactionReference';

    public const TRANSACTION_INITIATED_DATETIME = 'transactionInitiatedDatetime';

    public const TRANSACTION_SUCCEEDED_DATETIME = 'transactionSucceededDatetime';

    public const TRANSACTION_FAILED_DATETIME = 'transactionFailedDatetime';

    public const TRANSACTION_REFUNDED_DATETIME = 'transactionRefundedDatetime';

    public const CARD_TOKEN_ID = 'cardTokenId';

    public const CANCELLED_DATETIME = 'cancelledDatetime';

    protected $_resourceType = ResourceType::INCOMING_CARD_TRANSACTION;

    /**
     * @param Query $query
     * @return IncomingCardTransaction[] | Collection
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

        $query->setResourceType(ResourceType::INCOMING_CARD_TRANSACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IncomingCardTransaction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INCOMING_CARD_TRANSACTION, $id);
    }

    /**
     * @return \Arbor\Model\BillPayer
     */
    public function getBillPayer()
    {
        return $this->getProperty('billPayer');
    }

    /**
     * @param \Arbor\Model\BillPayer $billPayer
     */
    public function setBillPayer(\Arbor\Model\BillPayer $billPayer = null)
    {
        $this->setProperty('billPayer', $billPayer);
    }

    /**
     * @return \Arbor\Model\PaymentProvider
     */
    public function getPaymentProvider()
    {
        return $this->getProperty('paymentProvider');
    }

    /**
     * @param \Arbor\Model\PaymentProvider $paymentProvider
     */
    public function setPaymentProvider(\Arbor\Model\PaymentProvider $paymentProvider = null)
    {
        $this->setProperty('paymentProvider', $paymentProvider);
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
     * @return string
     */
    public function getCardTokenId()
    {
        return $this->getProperty('cardTokenId');
    }

    /**
     * @param string $cardTokenId
     */
    public function setCardTokenId(string $cardTokenId = null)
    {
        $this->setProperty('cardTokenId', $cardTokenId);
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
}
