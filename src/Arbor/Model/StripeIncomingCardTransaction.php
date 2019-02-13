<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StripeIncomingCardTransaction extends ModelBase
{

    const BILL_PAYER = 'billPayer';

    const STRIPE_PAYOUT_TRANSACTION = 'stripePayoutTransaction';

    const TRANSACTION_AMOUNT = 'transactionAmount';

    const TRANSACTION_FEE_AMOUNT = 'transactionFeeAmount';

    const TRANSACTION_FEE_VAT_AMOUNT = 'transactionFeeVatAmount';

    const PAYOUT_AMOUNT = 'payoutAmount';

    const REFUND_AMOUNT = 'refundAmount';

    const STRIPE_CHARGE_STATUS = 'stripeChargeStatus';

    const STRIPE_CHARGE_IDENTIFIER = 'stripeChargeIdentifier';

    const TRANSACTION_INITIATED_DATETIME = 'transactionInitiatedDatetime';

    protected $_resourceType = ResourceType::STRIPE_INCOMING_CARD_TRANSACTION;

    /**
     * @param Query $query
     * @return StripeIncomingCardTransaction[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_INCOMING_CARD_TRANSACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripeIncomingCardTransaction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_INCOMING_CARD_TRANSACTION, $id);
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
     * @return StripePayoutTransaction
     */
    public function getStripePayoutTransaction()
    {
        return $this->getProperty('stripePayoutTransaction');
    }

    /**
     * @param StripePayoutTransaction $stripePayoutTransaction
     */
    public function setStripePayoutTransaction(StripePayoutTransaction $stripePayoutTransaction = null)
    {
        $this->setProperty('stripePayoutTransaction', $stripePayoutTransaction);
    }

    /**
     * @return string
     */
    public function getTransactionAmount()
    {
        return $this->getProperty('transactionAmount');
    }

    /**
     * @param string $transactionAmount
     */
    public function setTransactionAmount($transactionAmount = null)
    {
        $this->setProperty('transactionAmount', $transactionAmount);
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
    public function getTransactionFeeVatAmount()
    {
        return $this->getProperty('transactionFeeVatAmount');
    }

    /**
     * @param string $transactionFeeVatAmount
     */
    public function setTransactionFeeVatAmount($transactionFeeVatAmount = null)
    {
        $this->setProperty('transactionFeeVatAmount', $transactionFeeVatAmount);
    }

    /**
     * @return string
     */
    public function getPayoutAmount()
    {
        return $this->getProperty('payoutAmount');
    }

    /**
     * @param string $payoutAmount
     */
    public function setPayoutAmount($payoutAmount = null)
    {
        $this->setProperty('payoutAmount', $payoutAmount);
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
     * @return string
     */
    public function getStripeChargeStatus()
    {
        return $this->getProperty('stripeChargeStatus');
    }

    /**
     * @param string $stripeChargeStatus
     */
    public function setStripeChargeStatus($stripeChargeStatus = null)
    {
        $this->setProperty('stripeChargeStatus', $stripeChargeStatus);
    }

    /**
     * @return string
     */
    public function getStripeChargeIdentifier()
    {
        return $this->getProperty('stripeChargeIdentifier');
    }

    /**
     * @param string $stripeChargeIdentifier
     */
    public function setStripeChargeIdentifier($stripeChargeIdentifier = null)
    {
        $this->setProperty('stripeChargeIdentifier', $stripeChargeIdentifier);
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


}
