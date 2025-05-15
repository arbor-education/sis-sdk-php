<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerPayment extends ModelBase
{
    public const CUSTOMER_INVOICE = 'customerInvoice';

    public const BILL_PAYER = 'billPayer';

    public const INCOMING_DIRECT_DEBIT_TRANSACTION = 'incomingDirectDebitTransaction';

    public const INCOMING_CARD_TRANSACTION = 'incomingCardTransaction';

    public const INCOMING_CASHLESS_CATERING_SYSTEM_TRANSACTION = 'incomingCashlessCateringSystemTransaction';

    public const INCOMING_BANK_TRANSACTION = 'incomingBankTransaction';

    public const RECEIVED_CHEQUE = 'receivedCheque';

    public const CASH_RECEIPT = 'cashReceipt';

    public const STRIPE_INCOMING_CARD_TRANSACTION = 'stripeIncomingCardTransaction';

    public const VOUCHER = 'voucher';

    public const PAYMENT_AMOUNT = 'paymentAmount';

    public const PAYMENT_DATETIME = 'paymentDatetime';

    public const PAYMENT_SUCCEEDED_DATETIME = 'paymentSucceededDatetime';

    public const PAYMENT_FAILED_DATETIME = 'paymentFailedDatetime';

    public const NARRATIVE = 'narrative';

    public const PAYMENT_CANCELLED_DATETIME = 'paymentCancelledDatetime';

    protected $_resourceType = ResourceType::CUSTOMER_PAYMENT;

    /**
     * @param Query $query
     * @return CustomerPayment[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_PAYMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerPayment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_PAYMENT, $id);
    }

    /**
     * @return \Arbor\Model\CustomerInvoice
     */
    public function getCustomerInvoice()
    {
        return $this->getProperty('customerInvoice');
    }

    /**
     * @param \Arbor\Model\CustomerInvoice $customerInvoice
     */
    public function setCustomerInvoice(\Arbor\Model\CustomerInvoice $customerInvoice = null)
    {
        $this->setProperty('customerInvoice', $customerInvoice);
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
     * @return \Arbor\Model\IncomingDirectDebitTransaction
     */
    public function getIncomingDirectDebitTransaction()
    {
        return $this->getProperty('incomingDirectDebitTransaction');
    }

    /**
     * @param \Arbor\Model\IncomingDirectDebitTransaction
     * $incomingDirectDebitTransaction
     */
    public function setIncomingDirectDebitTransaction(\Arbor\Model\IncomingDirectDebitTransaction $incomingDirectDebitTransaction = null)
    {
        $this->setProperty('incomingDirectDebitTransaction', $incomingDirectDebitTransaction);
    }

    /**
     * @return \Arbor\Model\IncomingCardTransaction
     */
    public function getIncomingCardTransaction()
    {
        return $this->getProperty('incomingCardTransaction');
    }

    /**
     * @param \Arbor\Model\IncomingCardTransaction $incomingCardTransaction
     */
    public function setIncomingCardTransaction(\Arbor\Model\IncomingCardTransaction $incomingCardTransaction = null)
    {
        $this->setProperty('incomingCardTransaction', $incomingCardTransaction);
    }

    /**
     * @return \Arbor\Model\IncomingCashlessCateringSystemTransaction
     */
    public function getIncomingCashlessCateringSystemTransaction()
    {
        return $this->getProperty('incomingCashlessCateringSystemTransaction');
    }

    /**
     * @param \Arbor\Model\IncomingCashlessCateringSystemTransaction
     * $incomingCashlessCateringSystemTransaction
     */
    public function setIncomingCashlessCateringSystemTransaction(\Arbor\Model\IncomingCashlessCateringSystemTransaction $incomingCashlessCateringSystemTransaction = null)
    {
        $this->setProperty('incomingCashlessCateringSystemTransaction', $incomingCashlessCateringSystemTransaction);
    }

    /**
     * @return \Arbor\Model\IncomingBankTransaction
     */
    public function getIncomingBankTransaction()
    {
        return $this->getProperty('incomingBankTransaction');
    }

    /**
     * @param \Arbor\Model\IncomingBankTransaction $incomingBankTransaction
     */
    public function setIncomingBankTransaction(\Arbor\Model\IncomingBankTransaction $incomingBankTransaction = null)
    {
        $this->setProperty('incomingBankTransaction', $incomingBankTransaction);
    }

    /**
     * @return \Arbor\Model\ReceivedCheque
     */
    public function getReceivedCheque()
    {
        return $this->getProperty('receivedCheque');
    }

    /**
     * @param \Arbor\Model\ReceivedCheque $receivedCheque
     */
    public function setReceivedCheque(\Arbor\Model\ReceivedCheque $receivedCheque = null)
    {
        $this->setProperty('receivedCheque', $receivedCheque);
    }

    /**
     * @return \Arbor\Model\CashReceipt
     */
    public function getCashReceipt()
    {
        return $this->getProperty('cashReceipt');
    }

    /**
     * @param \Arbor\Model\CashReceipt $cashReceipt
     */
    public function setCashReceipt(\Arbor\Model\CashReceipt $cashReceipt = null)
    {
        $this->setProperty('cashReceipt', $cashReceipt);
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
     * @return \Arbor\Model\Voucher
     */
    public function getVoucher()
    {
        return $this->getProperty('voucher');
    }

    /**
     * @param \Arbor\Model\Voucher $voucher
     */
    public function setVoucher(\Arbor\Model\Voucher $voucher = null)
    {
        $this->setProperty('voucher', $voucher);
    }

    /**
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->getProperty('paymentAmount');
    }

    /**
     * @param string $paymentAmount
     */
    public function setPaymentAmount(string $paymentAmount = null)
    {
        $this->setProperty('paymentAmount', $paymentAmount);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDatetime()
    {
        return $this->getProperty('paymentDatetime');
    }

    /**
     * @param \DateTime $paymentDatetime
     */
    public function setPaymentDatetime(\DateTime $paymentDatetime = null)
    {
        $this->setProperty('paymentDatetime', $paymentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentSucceededDatetime()
    {
        return $this->getProperty('paymentSucceededDatetime');
    }

    /**
     * @param \DateTime $paymentSucceededDatetime
     */
    public function setPaymentSucceededDatetime(\DateTime $paymentSucceededDatetime = null)
    {
        $this->setProperty('paymentSucceededDatetime', $paymentSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentFailedDatetime()
    {
        return $this->getProperty('paymentFailedDatetime');
    }

    /**
     * @param \DateTime $paymentFailedDatetime
     */
    public function setPaymentFailedDatetime(\DateTime $paymentFailedDatetime = null)
    {
        $this->setProperty('paymentFailedDatetime', $paymentFailedDatetime);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentCancelledDatetime()
    {
        return $this->getProperty('paymentCancelledDatetime');
    }

    /**
     * @param \DateTime $paymentCancelledDatetime
     */
    public function setPaymentCancelledDatetime(\DateTime $paymentCancelledDatetime = null)
    {
        $this->setProperty('paymentCancelledDatetime', $paymentCancelledDatetime);
    }
}
