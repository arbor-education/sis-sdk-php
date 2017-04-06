<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomerInvoice;
use \Arbor\Model\BillPayer;
use \Arbor\Model\IncomingDirectDebitTransaction;
use \Arbor\Model\IncomingCardTransaction;
use \Arbor\Model\IncomingBankTransaction;
use \Arbor\Model\ReceivedCheque;
use \Arbor\Model\CashReceipt;

class CustomerPayment extends ModelBase
{

    const CUSTOMER_INVOICE = 'customerInvoice';

    const BILL_PAYER = 'billPayer';

    const INCOMING_DIRECT_DEBIT_TRANSACTION = 'incomingDirectDebitTransaction';

    const INCOMING_CARD_TRANSACTION = 'incomingCardTransaction';

    const INCOMING_BANK_TRANSACTION = 'incomingBankTransaction';

    const RECEIVED_CHEQUE = 'receivedCheque';

    const CASH_RECEIPT = 'cashReceipt';

    const PAYMENT_AMOUNT = 'paymentAmount';

    const PAYMENT_DATETIME = 'paymentDatetime';

    const PAYMENT_SUCCEEDED_DATETIME = 'paymentSucceededDatetime';

    const PAYMENT_FAILED_DATETIME = 'paymentFailedDatetime';

    const NARRATIVE = 'narrative';

    const PAYMENT_CANCELLED_DATETIME = 'paymentCancelledDatetime';

    protected $_resourceType = ResourceType::CUSTOMER_PAYMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomerPayment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CustomerPayment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomerPayment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CUSTOMER_PAYMENT, $id);
    }

    /**
     * @return CustomerInvoice
     */
    public function getCustomerInvoice()
    {
        return $this->getProperty("customerInvoice");
    }

    /**
     * @param CustomerInvoice $customerInvoice
     */
    public function setCustomerInvoice(CustomerInvoice $customerInvoice = null)
    {
        $this->setProperty("customerInvoice", $customerInvoice);
    }

    /**
     * @return BillPayer
     */
    public function getBillPayer()
    {
        return $this->getProperty("billPayer");
    }

    /**
     * @param BillPayer $billPayer
     */
    public function setBillPayer(BillPayer $billPayer = null)
    {
        $this->setProperty("billPayer", $billPayer);
    }

    /**
     * @return IncomingDirectDebitTransaction
     */
    public function getIncomingDirectDebitTransaction()
    {
        return $this->getProperty("incomingDirectDebitTransaction");
    }

    /**
     * @param IncomingDirectDebitTransaction $incomingDirectDebitTransaction
     */
    public function setIncomingDirectDebitTransaction(IncomingDirectDebitTransaction $incomingDirectDebitTransaction = null)
    {
        $this->setProperty("incomingDirectDebitTransaction", $incomingDirectDebitTransaction);
    }

    /**
     * @return IncomingCardTransaction
     */
    public function getIncomingCardTransaction()
    {
        return $this->getProperty("incomingCardTransaction");
    }

    /**
     * @param IncomingCardTransaction $incomingCardTransaction
     */
    public function setIncomingCardTransaction(IncomingCardTransaction $incomingCardTransaction = null)
    {
        $this->setProperty("incomingCardTransaction", $incomingCardTransaction);
    }

    /**
     * @return IncomingBankTransaction
     */
    public function getIncomingBankTransaction()
    {
        return $this->getProperty("incomingBankTransaction");
    }

    /**
     * @param IncomingBankTransaction $incomingBankTransaction
     */
    public function setIncomingBankTransaction(IncomingBankTransaction $incomingBankTransaction = null)
    {
        $this->setProperty("incomingBankTransaction", $incomingBankTransaction);
    }

    /**
     * @return ReceivedCheque
     */
    public function getReceivedCheque()
    {
        return $this->getProperty("receivedCheque");
    }

    /**
     * @param ReceivedCheque $receivedCheque
     */
    public function setReceivedCheque(ReceivedCheque $receivedCheque = null)
    {
        $this->setProperty("receivedCheque", $receivedCheque);
    }

    /**
     * @return CashReceipt
     */
    public function getCashReceipt()
    {
        return $this->getProperty("cashReceipt");
    }

    /**
     * @param CashReceipt $cashReceipt
     */
    public function setCashReceipt(CashReceipt $cashReceipt = null)
    {
        $this->setProperty("cashReceipt", $cashReceipt);
    }

    /**
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->getProperty("paymentAmount");
    }

    /**
     * @param string $paymentAmount
     */
    public function setPaymentAmount($paymentAmount = null)
    {
        $this->setProperty("paymentAmount", $paymentAmount);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDatetime()
    {
        return $this->getProperty("paymentDatetime");
    }

    /**
     * @param \DateTime $paymentDatetime
     */
    public function setPaymentDatetime(\DateTime $paymentDatetime = null)
    {
        $this->setProperty("paymentDatetime", $paymentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentSucceededDatetime()
    {
        return $this->getProperty("paymentSucceededDatetime");
    }

    /**
     * @param \DateTime $paymentSucceededDatetime
     */
    public function setPaymentSucceededDatetime(\DateTime $paymentSucceededDatetime = null)
    {
        $this->setProperty("paymentSucceededDatetime", $paymentSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentFailedDatetime()
    {
        return $this->getProperty("paymentFailedDatetime");
    }

    /**
     * @param \DateTime $paymentFailedDatetime
     */
    public function setPaymentFailedDatetime(\DateTime $paymentFailedDatetime = null)
    {
        $this->setProperty("paymentFailedDatetime", $paymentFailedDatetime);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentCancelledDatetime()
    {
        return $this->getProperty("paymentCancelledDatetime");
    }

    /**
     * @param \DateTime $paymentCancelledDatetime
     */
    public function setPaymentCancelledDatetime(\DateTime $paymentCancelledDatetime = null)
    {
        $this->setProperty("paymentCancelledDatetime", $paymentCancelledDatetime);
    }


}
