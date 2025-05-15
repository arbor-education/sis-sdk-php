<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IncomingBankTransaction extends ModelBase
{
    public const BILL_PAYER = 'billPayer';

    public const RECEIVED_DATE = 'receivedDate';

    public const CANCELLED_DATETIME = 'cancelledDatetime';

    public const PAYMENT = 'payment';

    protected $_resourceType = ResourceType::INCOMING_BANK_TRANSACTION;

    /**
     * @param Query $query
     * @return IncomingBankTransaction[] | Collection
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

        $query->setResourceType(ResourceType::INCOMING_BANK_TRANSACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IncomingBankTransaction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INCOMING_BANK_TRANSACTION, $id);
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
    public function getPayment()
    {
        return $this->getProperty('payment');
    }

    /**
     * @param string $payment
     */
    public function setPayment(string $payment = null)
    {
        $this->setProperty('payment', $payment);
    }
}
