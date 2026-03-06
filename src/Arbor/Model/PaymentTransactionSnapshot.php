<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PaymentTransactionSnapshot extends ModelBase
{
    public const METADATA_IDENTIFIER = 'metadataIdentifier';

    public const STRIPE_INCOMING_CARD_TRANSACTION = 'stripeIncomingCardTransaction';

    public const PAYMENT_AMOUNT = 'paymentAmount';

    public const PAYMENT_CURRENCY = 'paymentCurrency';

    public const ADDED_DATE = 'addedDate';

    public const COMPLETED_DATE = 'completedDate';

    public const PAYING_FOR = 'payingFor';

    public const BILL_PAYER = 'billPayer';

    public const QUANTITY = 'quantity';

    public const STUDENT = 'student';

    protected $_resourceType = ResourceType::PAYMENT_TRANSACTION_SNAPSHOT;

    /**
     * @param Query $query
     * @return PaymentTransactionSnapshot[] | Collection
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

        $query->setResourceType(ResourceType::PAYMENT_TRANSACTION_SNAPSHOT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PaymentTransactionSnapshot
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAYMENT_TRANSACTION_SNAPSHOT, $id);
    }

    /**
     * @return string
     */
    public function getMetadataIdentifier()
    {
        return $this->getProperty('metadataIdentifier');
    }

    /**
     * @param string $metadataIdentifier
     */
    public function setMetadataIdentifier(string $metadataIdentifier = null)
    {
        $this->setProperty('metadataIdentifier', $metadataIdentifier);
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

    /**
     * @return float
     */
    public function getPaymentAmount()
    {
        return $this->getProperty('paymentAmount');
    }

    /**
     * @param float $paymentAmount
     */
    public function setPaymentAmount(float $paymentAmount = null)
    {
        $this->setProperty('paymentAmount', $paymentAmount);
    }

    /**
     * @return string
     */
    public function getPaymentCurrency()
    {
        return $this->getProperty('paymentCurrency');
    }

    /**
     * @param string $paymentCurrency
     */
    public function setPaymentCurrency(string $paymentCurrency = null)
    {
        $this->setProperty('paymentCurrency', $paymentCurrency);
    }

    /**
     * @return \DateTime
     */
    public function getAddedDate()
    {
        return $this->getProperty('addedDate');
    }

    /**
     * @param \DateTime $addedDate
     */
    public function setAddedDate(\DateTime $addedDate = null)
    {
        $this->setProperty('addedDate', $addedDate);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->getProperty('completedDate');
    }

    /**
     * @param \DateTime $completedDate
     */
    public function setCompletedDate(\DateTime $completedDate = null)
    {
        $this->setProperty('completedDate', $completedDate);
    }

    /**
     * @return ModelBase
     */
    public function getPayingFor()
    {
        return $this->getProperty('payingFor');
    }

    /**
     * @param ModelBase $payingFor
     */
    public function setPayingFor(\ModelBase $payingFor = null)
    {
        $this->setProperty('payingFor', $payingFor);
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
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }
}
