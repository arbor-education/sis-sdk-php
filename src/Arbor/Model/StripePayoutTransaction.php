<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StripePayoutTransaction extends ModelBase
{

    const STRIPE_PAYOUT_DESTINATION = 'stripePayoutDestination';

    const STRIPE_PAYOUT_IDENTIFIER = 'stripePayoutIdentifier';

    const PAYOUT_AMOUNT = 'payoutAmount';

    const PAYOUT_INITIATED_DATETIME = 'payoutInitiatedDatetime';

    const PAYOUT_SUCCEEDED_DATETIME = 'payoutSucceededDatetime';

    const PAYOUT_FAILED_DATETIME = 'payoutFailedDatetime';

    const PAYOUT_SCHEDULED_DATETIME = 'payoutScheduledDatetime';

    const VAT_INVOICE_GENERATION_INITIATED_DATETIME = 'vatInvoiceGenerationInitiatedDatetime';

    const VAT_INVOICE_GENERATION_STATUS = 'vatInvoiceGenerationStatus';

    const PAYOUT_STATUS = 'payoutStatus';

    protected $_resourceType = ResourceType::STRIPE_PAYOUT_TRANSACTION;

    /**
     * @param Query $query
     * @return StripePayoutTransaction[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_PAYOUT_TRANSACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripePayoutTransaction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_PAYOUT_TRANSACTION, $id);
    }

    /**
     * @return StripePayoutDestination
     */
    public function getStripePayoutDestination()
    {
        return $this->getProperty('stripePayoutDestination');
    }

    /**
     * @param StripePayoutDestination $stripePayoutDestination
     */
    public function setStripePayoutDestination(StripePayoutDestination $stripePayoutDestination = null)
    {
        $this->setProperty('stripePayoutDestination', $stripePayoutDestination);
    }

    /**
     * @return string
     */
    public function getStripePayoutIdentifier()
    {
        return $this->getProperty('stripePayoutIdentifier');
    }

    /**
     * @param string $stripePayoutIdentifier
     */
    public function setStripePayoutIdentifier($stripePayoutIdentifier = null)
    {
        $this->setProperty('stripePayoutIdentifier', $stripePayoutIdentifier);
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
     * @return \DateTime
     */
    public function getPayoutInitiatedDatetime()
    {
        return $this->getProperty('payoutInitiatedDatetime');
    }

    /**
     * @param \DateTime $payoutInitiatedDatetime
     */
    public function setPayoutInitiatedDatetime(\DateTime $payoutInitiatedDatetime = null)
    {
        $this->setProperty('payoutInitiatedDatetime', $payoutInitiatedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutSucceededDatetime()
    {
        return $this->getProperty('payoutSucceededDatetime');
    }

    /**
     * @param \DateTime $payoutSucceededDatetime
     */
    public function setPayoutSucceededDatetime(\DateTime $payoutSucceededDatetime = null)
    {
        $this->setProperty('payoutSucceededDatetime', $payoutSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutFailedDatetime()
    {
        return $this->getProperty('payoutFailedDatetime');
    }

    /**
     * @param \DateTime $payoutFailedDatetime
     */
    public function setPayoutFailedDatetime(\DateTime $payoutFailedDatetime = null)
    {
        $this->setProperty('payoutFailedDatetime', $payoutFailedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutScheduledDatetime()
    {
        return $this->getProperty('payoutScheduledDatetime');
    }

    /**
     * @param \DateTime $payoutScheduledDatetime
     */
    public function setPayoutScheduledDatetime(\DateTime $payoutScheduledDatetime = null)
    {
        $this->setProperty('payoutScheduledDatetime', $payoutScheduledDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getVatInvoiceGenerationInitiatedDatetime()
    {
        return $this->getProperty('vatInvoiceGenerationInitiatedDatetime');
    }

    /**
     * @param \DateTime $vatInvoiceGenerationInitiatedDatetime
     */
    public function setVatInvoiceGenerationInitiatedDatetime(\DateTime $vatInvoiceGenerationInitiatedDatetime = null)
    {
        $this->setProperty('vatInvoiceGenerationInitiatedDatetime', $vatInvoiceGenerationInitiatedDatetime);
    }

    /**
     * @return string
     */
    public function getVatInvoiceGenerationStatus()
    {
        return $this->getProperty('vatInvoiceGenerationStatus');
    }

    /**
     * @param string $vatInvoiceGenerationStatus
     */
    public function setVatInvoiceGenerationStatus($vatInvoiceGenerationStatus = null)
    {
        $this->setProperty('vatInvoiceGenerationStatus', $vatInvoiceGenerationStatus);
    }

    /**
     * @return string
     */
    public function getPayoutStatus()
    {
        return $this->getProperty('payoutStatus');
    }

    /**
     * @param string $payoutStatus
     */
    public function setPayoutStatus($payoutStatus = null)
    {
        $this->setProperty('payoutStatus', $payoutStatus);
    }


}
