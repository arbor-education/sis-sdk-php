<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CashReceipt extends ModelBase
{
    const BILL_PAYER = 'billPayer';

    const BANK_DEPOSIT = 'bankDeposit';

    const RECEIVED_DATE = 'receivedDate';

    const CANCELLED_DATETIME = 'cancelledDatetime';

    const RECEIVED_PAYMENT = 'receivedPayment';

    protected $_resourceType = ResourceType::CASH_RECEIPT;

    /**
     * @param Query $query
     * @return CashReceipt[] | Collection
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

        $query->setResourceType(ResourceType::CASH_RECEIPT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CashReceipt
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CASH_RECEIPT, $id);
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
     * @return BankDeposit
     */
    public function getBankDeposit()
    {
        return $this->getProperty('bankDeposit');
    }

    /**
     * @param BankDeposit $bankDeposit
     */
    public function setBankDeposit(BankDeposit $bankDeposit = null)
    {
        $this->setProperty('bankDeposit', $bankDeposit);
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->getProperty('receivedDate');
    }

    /**
     * @param \DateTime $receivedDate
     */
    public function setReceivedDate(\DateTime $receivedDate = null)
    {
        $this->setProperty('receivedDate', $receivedDate);
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

    /**
     * @return string
     */
    public function getReceivedPayment()
    {
        return $this->getProperty('receivedPayment');
    }

    /**
     * @param string $receivedPayment
     */
    public function setReceivedPayment($receivedPayment = null)
    {
        $this->setProperty('receivedPayment', $receivedPayment);
    }
}
