<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IncomingBankTransaction extends ModelBase
{
    const BILL_PAYER = 'billPayer';

    const RECEIVED_DATE = 'receivedDate';

    const CANCELLED_DATETIME = 'cancelledDatetime';

    const PAYMENT = 'payment';

    protected $_resourceType = ResourceType::INCOMING_BANK_TRANSACTION;

    /**
     * @param Query $query
     * @return IncomingBankTransaction[] | Collection
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
    public function setPayment($payment = null)
    {
        $this->setProperty('payment', $payment);
    }
}
