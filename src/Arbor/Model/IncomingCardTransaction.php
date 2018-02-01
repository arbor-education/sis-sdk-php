<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IncomingCardTransaction extends ModelBase
{

    const BILL_PAYER = 'billPayer';

    const PAYMENT_PROVIDER = 'paymentProvider';

    const PAYMENT_PROVIDER_PAYOUT = 'paymentProviderPayout';

    const PAYMENT_PROVIDER_TRANSACTION_IDENTIFIER = 'paymentProviderTransactionIdentifier';

    const TRANSACTION_NET_AMOUNT = 'transactionNetAmount';

    const TRANSACTION_FEE_AMOUNT = 'transactionFeeAmount';

    const TRANSACTION_REFERENCE = 'transactionReference';

    const TRANSACTION_INITIATED_DATETIME = 'transactionInitiatedDatetime';

    const TRANSACTION_SUCCEEDED_DATETIME = 'transactionSucceededDatetime';

    const TRANSACTION_FAILED_DATETIME = 'transactionFailedDatetime';

    const TRANSACTION_REFUNDED_DATETIME = 'transactionRefundedDatetime';

    const CARD_TOKEN_ID = 'cardTokenId';

    const CANCELLED_DATETIME = 'cancelledDatetime';

    protected $_resourceType = ResourceType::INCOMING_CARD_TRANSACTION;

    /**
     * @param Query $query
     * @return IncomingCardTransaction[] | Collection
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
     * @return BillPayer
     */
    public function getBillPayer()
    {
        return $this->getProperty('billPayer');
    }

    /**
     * @param BillPayer $billPayer
     */
    public function setBillPayer(BillPayer $billPayer = null)
    {
        $this->setProperty('billPayer', $billPayer);
    }

    /**
     * @return PaymentProvider
     */
    public function getPaymentProvider()
    {
        return $this->getProperty('paymentProvider');
    }

    /**
     * @param PaymentProvider $paymentProvider
     */
    public function setPaymentProvider(PaymentProvider $paymentProvider = null)
    {
        $this->setProperty('paymentProvider', $paymentProvider);
    }

    /**
     * @return PaymentProviderPayout
     */
    public function getPaymentProviderPayout()
    {
        return $this->getProperty('paymentProviderPayout');
    }

    /**
     * @param PaymentProviderPayout $paymentProviderPayout
     */
    public function setPaymentProviderPayout(PaymentProviderPayout $paymentProviderPayout = null)
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
    public function setPaymentProviderTransactionIdentifier($paymentProviderTransactionIdentifier = null)
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
    public function setTransactionNetAmount($transactionNetAmount = null)
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
    public function setTransactionFeeAmount($transactionFeeAmount = null)
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
    public function setTransactionReference($transactionReference = null)
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
    public function setCardTokenId($cardTokenId = null)
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
