<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BillPayer;

class IncomingBankTransaction extends ModelBase
{
    const BILL_PAYER = 'billPayer';

    const RECEIVED_DATE = 'receivedDate';

    const CANCELLED_DATE = 'cancelledDate';

    const PAYMENT = 'payment';

    protected $_resourceType = ResourceType::INCOMING_BANK_TRANSACTION;

    /**
     * @param \Arbor\Query\Query $query
     * @return IncomingBankTransaction[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("IncomingBankTransaction");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return IncomingBankTransaction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::INCOMING_BANK_TRANSACTION, $id);
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
    public function getCancelledDate()
    {
        return $this->getProperty("cancelledDate");
    }

    /**
     * @param \DateTime $cancelledDate
     */
    public function setCancelledDate(\DateTime $cancelledDate = null)
    {
        $this->setProperty("cancelledDate", $cancelledDate);
    }

    /**
     * @return string
     */
    public function getPayment()
    {
        return $this->getProperty("payment");
    }

    /**
     * @param string $payment
     */
    public function setPayment($payment = null)
    {
        $this->setProperty("payment", $payment);
    }
}
