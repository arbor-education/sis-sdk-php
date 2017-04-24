<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomerAccount;
use \Arbor\Model\BillPayer;
use \Arbor\Model\IncomingDirectDebitTransaction;
use \Arbor\Model\IncomingCardTransaction;
use \Arbor\Model\IncomingBankTransaction;
use \Arbor\Model\ReceivedCheque;
use \Arbor\Model\CashReceipt;

class CustomerPrepayment extends ModelBase
{
    const CUSTOMER_ACCOUNT = 'customerAccount';

    const BILL_PAYER = 'billPayer';

    const INCOMING_DIRECT_DEBIT_TRANSACTION = 'incomingDirectDebitTransaction';

    const INCOMING_CARD_TRANSACTION = 'incomingCardTransaction';

    const INCOMING_BANK_TRANSACTION = 'incomingBankTransaction';

    const RECEIVED_CHEQUE = 'receivedCheque';

    const CASH_RECEIPT = 'cashReceipt';

    const PREPAYMENT_AMOUNT = 'prepaymentAmount';

    const PREPAYMENT_DATETIME = 'prepaymentDatetime';

    const PREPAYMENT_SUCCEEDED_DATETIME = 'prepaymentSucceededDatetime';

    const PREPAYMENT_FAILED_DATETIME = 'prepaymentFailedDatetime';

    const NARRATIVE = 'narrative';

    const PREPAYMENT_CANCELLED_DATETIME = 'prepaymentCancelledDatetime';

    protected $_resourceType = ResourceType::CUSTOMER_PREPAYMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomerPrepayment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CustomerPrepayment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomerPrepayment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CUSTOMER_PREPAYMENT, $id);
    }

    /**
     * @return CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty("customerAccount");
    }

    /**
     * @param CustomerAccount $customerAccount
     */
    public function setCustomerAccount(CustomerAccount $customerAccount = null)
    {
        $this->setProperty("customerAccount", $customerAccount);
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
    public function getPrepaymentAmount()
    {
        return $this->getProperty("prepaymentAmount");
    }

    /**
     * @param string $prepaymentAmount
     */
    public function setPrepaymentAmount($prepaymentAmount = null)
    {
        $this->setProperty("prepaymentAmount", $prepaymentAmount);
    }

    /**
     * @return \DateTime
     */
    public function getPrepaymentDatetime()
    {
        return $this->getProperty("prepaymentDatetime");
    }

    /**
     * @param \DateTime $prepaymentDatetime
     */
    public function setPrepaymentDatetime(\DateTime $prepaymentDatetime = null)
    {
        $this->setProperty("prepaymentDatetime", $prepaymentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPrepaymentSucceededDatetime()
    {
        return $this->getProperty("prepaymentSucceededDatetime");
    }

    /**
     * @param \DateTime $prepaymentSucceededDatetime
     */
    public function setPrepaymentSucceededDatetime(\DateTime $prepaymentSucceededDatetime = null)
    {
        $this->setProperty("prepaymentSucceededDatetime", $prepaymentSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPrepaymentFailedDatetime()
    {
        return $this->getProperty("prepaymentFailedDatetime");
    }

    /**
     * @param \DateTime $prepaymentFailedDatetime
     */
    public function setPrepaymentFailedDatetime(\DateTime $prepaymentFailedDatetime = null)
    {
        $this->setProperty("prepaymentFailedDatetime", $prepaymentFailedDatetime);
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
    public function getPrepaymentCancelledDatetime()
    {
        return $this->getProperty("prepaymentCancelledDatetime");
    }

    /**
     * @param \DateTime $prepaymentCancelledDatetime
     */
    public function setPrepaymentCancelledDatetime(\DateTime $prepaymentCancelledDatetime = null)
    {
        $this->setProperty("prepaymentCancelledDatetime", $prepaymentCancelledDatetime);
    }
}
