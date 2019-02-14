<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StripeRefundTransaction extends ModelBase
{

    const STRIPE_INCOMING_CARD_TRANSACTION = 'stripeIncomingCardTransaction';

    const BILL_PAYER = 'billPayer';

    const STRIPE_PAYOUT_TRANSACTION = 'stripePayoutTransaction';

    const FAILED_REFUND_STRIPE_PAYOUT_TRANSACTION = 'failedRefundStripePayoutTransaction';

    const REFUND_AMOUNT = 'refundAmount';

    const REFUND_INITIATED_DATETIME = 'refundInitiatedDatetime';

    const REFUND_SUCCEEDED_DATETIME = 'refundSucceededDatetime';

    const REFUND_FAILED_DATETIME = 'refundFailedDatetime';

    const STRIPE_REFUND_IDENTIFIER = 'stripeRefundIdentifier';

    const STRIPE_REFUND_STATUS = 'stripeRefundStatus';

    const REFUND_REASON = 'refundReason';

    protected $_resourceType = ResourceType::STRIPE_REFUND_TRANSACTION;

    /**
     * @param Query $query
     * @return StripeRefundTransaction[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_REFUND_TRANSACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripeRefundTransaction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_REFUND_TRANSACTION, $id);
    }

    /**
     * @return StripeIncomingCardTransaction
     */
    public function getStripeIncomingCardTransaction()
    {
        return $this->getProperty('stripeIncomingCardTransaction');
    }

    /**
     * @param StripeIncomingCardTransaction $stripeIncomingCardTransaction
     */
    public function setStripeIncomingCardTransaction(StripeIncomingCardTransaction $stripeIncomingCardTransaction = null)
    {
        $this->setProperty('stripeIncomingCardTransaction', $stripeIncomingCardTransaction);
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
     * @return StripePayoutTransaction
     */
    public function getFailedRefundStripePayoutTransaction()
    {
        return $this->getProperty('failedRefundStripePayoutTransaction');
    }

    /**
     * @param StripePayoutTransaction $failedRefundStripePayoutTransaction
     */
    public function setFailedRefundStripePayoutTransaction(StripePayoutTransaction $failedRefundStripePayoutTransaction = null)
    {
        $this->setProperty('failedRefundStripePayoutTransaction', $failedRefundStripePayoutTransaction);
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
     * @return \DateTime
     */
    public function getRefundInitiatedDatetime()
    {
        return $this->getProperty('refundInitiatedDatetime');
    }

    /**
     * @param \DateTime $refundInitiatedDatetime
     */
    public function setRefundInitiatedDatetime(\DateTime $refundInitiatedDatetime = null)
    {
        $this->setProperty('refundInitiatedDatetime', $refundInitiatedDatetime);
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
    public function getStripeRefundIdentifier()
    {
        return $this->getProperty('stripeRefundIdentifier');
    }

    /**
     * @param string $stripeRefundIdentifier
     */
    public function setStripeRefundIdentifier($stripeRefundIdentifier = null)
    {
        $this->setProperty('stripeRefundIdentifier', $stripeRefundIdentifier);
    }

    /**
     * @return string
     */
    public function getStripeRefundStatus()
    {
        return $this->getProperty('stripeRefundStatus');
    }

    /**
     * @param string $stripeRefundStatus
     */
    public function setStripeRefundStatus($stripeRefundStatus = null)
    {
        $this->setProperty('stripeRefundStatus', $stripeRefundStatus);
    }

    /**
     * @return string
     */
    public function getRefundReason()
    {
        return $this->getProperty('refundReason');
    }

    /**
     * @param string $refundReason
     */
    public function setRefundReason($refundReason = null)
    {
        $this->setProperty('refundReason', $refundReason);
    }


}
