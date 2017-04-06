<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BillPayer;
use \Arbor\Model\BankDeposit;

class CashReceipt extends ModelBase
{

    const BILL_PAYER = 'billPayer';

    const BANK_DEPOSIT = 'bankDeposit';

    const RECEIVED_DATE = 'receivedDate';

    const CANCELLED_DATETIME = 'cancelledDatetime';

    const RECEIVED_PAYMENT = 'receivedPayment';

    protected $_resourceType = ResourceType::CASH_RECEIPT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CashReceipt[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CashReceipt");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CashReceipt
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CASH_RECEIPT, $id);
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
     * @return BankDeposit
     */
    public function getBankDeposit()
    {
        return $this->getProperty("bankDeposit");
    }

    /**
     * @param BankDeposit $bankDeposit
     */
    public function setBankDeposit(BankDeposit $bankDeposit = null)
    {
        $this->setProperty("bankDeposit", $bankDeposit);
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->getProperty("receivedDate");
    }

    /**
     * @param \DateTime $receivedDate
     */
    public function setReceivedDate(\DateTime $receivedDate = null)
    {
        $this->setProperty("receivedDate", $receivedDate);
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDatetime()
    {
        return $this->getProperty("cancelledDatetime");
    }

    /**
     * @param \DateTime $cancelledDatetime
     */
    public function setCancelledDatetime(\DateTime $cancelledDatetime = null)
    {
        $this->setProperty("cancelledDatetime", $cancelledDatetime);
    }

    /**
     * @return string
     */
    public function getReceivedPayment()
    {
        return $this->getProperty("receivedPayment");
    }

    /**
     * @param string $receivedPayment
     */
    public function setReceivedPayment($receivedPayment = null)
    {
        $this->setProperty("receivedPayment", $receivedPayment);
    }


}
