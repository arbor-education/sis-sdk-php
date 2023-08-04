<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomerPrepayment extends \ModelBase
{
    public const CUSTOMER_ACCOUNT = 'customerAccount';

    public const BILL_PAYER = 'billPayer';

    public const INCOMING_DIRECT_DEBIT_TRANSACTION = 'incomingDirectDebitTransaction';

    public const INCOMING_CARD_TRANSACTION = 'incomingCardTransaction';

    public const INCOMING_BANK_TRANSACTION = 'incomingBankTransaction';

    public const INCOMING_CASHLESS_CATERING_SYSTEM_TRANSACTION = 'incomingCashlessCateringSystemTransaction';

    public const RECEIVED_CHEQUE = 'receivedCheque';

    public const CASH_RECEIPT = 'cashReceipt';

    public const STRIPE_INCOMING_CARD_TRANSACTION = 'stripeIncomingCardTransaction';

    public const VOUCHER = 'voucher';

    public const PREPAYMENT_AMOUNT = 'prepaymentAmount';

    public const PREPAYMENT_DATETIME = 'prepaymentDatetime';

    public const PREPAYMENT_SUCCEEDED_DATETIME = 'prepaymentSucceededDatetime';

    public const PREPAYMENT_FAILED_DATETIME = 'prepaymentFailedDatetime';

    public const NARRATIVE = 'narrative';

    public const PREPAYMENT_CANCELLED_DATETIME = 'prepaymentCancelledDatetime';

    protected $_resourceType = ResourceType::CUSTOMER_PREPAYMENT;

    /**
     * @param Query $query
     * @return CustomerPrepayment[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::CUSTOMER_PREPAYMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerPrepayment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_PREPAYMENT, $id);
    }

    /**
     * @return CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param CustomerAccount $customerAccount
     */
    public function setCustomerAccount(\CustomerAccount $customerAccount = null)
    {
        $this->setProperty('customerAccount', $customerAccount);
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
    public function setBillPayer(\BillPayer $billPayer = null)
    {
        $this->setProperty('billPayer', $billPayer);
    }

    /**
     * @return IncomingDirectDebitTransaction
     */
    public function getIncomingDirectDebitTransaction()
    {
        return $this->getProperty('incomingDirectDebitTransaction');
    }

    /**
     * @param IncomingDirectDebitTransaction $incomingDirectDebitTransaction
     */
    public function setIncomingDirectDebitTransaction(\IncomingDirectDebitTransaction $incomingDirectDebitTransaction = null)
    {
        $this->setProperty('incomingDirectDebitTransaction', $incomingDirectDebitTransaction);
    }

    /**
     * @return IncomingCardTransaction
     */
    public function getIncomingCardTransaction()
    {
        return $this->getProperty('incomingCardTransaction');
    }

    /**
     * @param IncomingCardTransaction $incomingCardTransaction
     */
    public function setIncomingCardTransaction(\IncomingCardTransaction $incomingCardTransaction = null)
    {
        $this->setProperty('incomingCardTransaction', $incomingCardTransaction);
    }

    /**
     * @return IncomingBankTransaction
     */
    public function getIncomingBankTransaction()
    {
        return $this->getProperty('incomingBankTransaction');
    }

    /**
     * @param IncomingBankTransaction $incomingBankTransaction
     */
    public function setIncomingBankTransaction(\IncomingBankTransaction $incomingBankTransaction = null)
    {
        $this->setProperty('incomingBankTransaction', $incomingBankTransaction);
    }

    /**
     * @return IncomingCashlessCateringSystemTransaction
     */
    public function getIncomingCashlessCateringSystemTransaction()
    {
        return $this->getProperty('incomingCashlessCateringSystemTransaction');
    }

    /**
     * @param IncomingCashlessCateringSystemTransaction
     * $incomingCashlessCateringSystemTransaction
     */
    public function setIncomingCashlessCateringSystemTransaction(\IncomingCashlessCateringSystemTransaction $incomingCashlessCateringSystemTransaction = null)
    {
        $this->setProperty('incomingCashlessCateringSystemTransaction', $incomingCashlessCateringSystemTransaction);
    }

    /**
     * @return ReceivedCheque
     */
    public function getReceivedCheque()
    {
        return $this->getProperty('receivedCheque');
    }

    /**
     * @param ReceivedCheque $receivedCheque
     */
    public function setReceivedCheque(\ReceivedCheque $receivedCheque = null)
    {
        $this->setProperty('receivedCheque', $receivedCheque);
    }

    /**
     * @return CashReceipt
     */
    public function getCashReceipt()
    {
        return $this->getProperty('cashReceipt');
    }

    /**
     * @param CashReceipt $cashReceipt
     */
    public function setCashReceipt(\CashReceipt $cashReceipt = null)
    {
        $this->setProperty('cashReceipt', $cashReceipt);
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
    public function setStripeIncomingCardTransaction(\StripeIncomingCardTransaction $stripeIncomingCardTransaction = null)
    {
        $this->setProperty('stripeIncomingCardTransaction', $stripeIncomingCardTransaction);
    }

    /**
     * @return Voucher
     */
    public function getVoucher()
    {
        return $this->getProperty('voucher');
    }

    /**
     * @param Voucher $voucher
     */
    public function setVoucher(\Voucher $voucher = null)
    {
        $this->setProperty('voucher', $voucher);
    }

    /**
     * @return string
     */
    public function getPrepaymentAmount()
    {
        return $this->getProperty('prepaymentAmount');
    }

    /**
     * @param string $prepaymentAmount
     */
    public function setPrepaymentAmount(string $prepaymentAmount = null)
    {
        $this->setProperty('prepaymentAmount', $prepaymentAmount);
    }

    /**
     * @return \DateTime
     */
    public function getPrepaymentDatetime()
    {
        return $this->getProperty('prepaymentDatetime');
    }

    /**
     * @param \DateTime $prepaymentDatetime
     */
    public function setPrepaymentDatetime(\DateTime $prepaymentDatetime = null)
    {
        $this->setProperty('prepaymentDatetime', $prepaymentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPrepaymentSucceededDatetime()
    {
        return $this->getProperty('prepaymentSucceededDatetime');
    }

    /**
     * @param \DateTime $prepaymentSucceededDatetime
     */
    public function setPrepaymentSucceededDatetime(\DateTime $prepaymentSucceededDatetime = null)
    {
        $this->setProperty('prepaymentSucceededDatetime', $prepaymentSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPrepaymentFailedDatetime()
    {
        return $this->getProperty('prepaymentFailedDatetime');
    }

    /**
     * @param \DateTime $prepaymentFailedDatetime
     */
    public function setPrepaymentFailedDatetime(\DateTime $prepaymentFailedDatetime = null)
    {
        $this->setProperty('prepaymentFailedDatetime', $prepaymentFailedDatetime);
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
    public function getPrepaymentCancelledDatetime()
    {
        return $this->getProperty('prepaymentCancelledDatetime');
    }

    /**
     * @param \DateTime $prepaymentCancelledDatetime
     */
    public function setPrepaymentCancelledDatetime(\DateTime $prepaymentCancelledDatetime = null)
    {
        $this->setProperty('prepaymentCancelledDatetime', $prepaymentCancelledDatetime);
    }
}
