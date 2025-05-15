<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CashReceipt extends ModelBase
{
    public const BILL_PAYER = 'billPayer';

    public const BANK_DEPOSIT = 'bankDeposit';

    public const RECEIVED_DATE = 'receivedDate';

    public const CANCELLED_DATETIME = 'cancelledDatetime';

    public const RECEIVED_PAYMENT = 'receivedPayment';

    protected $_resourceType = ResourceType::CASH_RECEIPT;

    /**
     * @param Query $query
     * @return CashReceipt[] | Collection
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
     * @return \Arbor\Model\BankDeposit
     */
    public function getBankDeposit()
    {
        return $this->getProperty('bankDeposit');
    }

    /**
     * @param \Arbor\Model\BankDeposit $bankDeposit
     */
    public function setBankDeposit(\Arbor\Model\BankDeposit $bankDeposit = null)
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
    public function setReceivedPayment(string $receivedPayment = null)
    {
        $this->setProperty('receivedPayment', $receivedPayment);
    }
}
