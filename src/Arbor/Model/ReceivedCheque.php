<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ReceivedCheque extends ModelBase
{
    const BILL_PAYER = 'billPayer';

    const BANK_DEPOSIT = 'bankDeposit';

    const RECEIVED_DATE = 'receivedDate';

    const CANCELLED_DATETIME = 'cancelledDatetime';

    const CHEQUE_AMOUNT = 'chequeAmount';

    protected $_resourceType = ResourceType::RECEIVED_CHEQUE;

    /**
     * @param Query $query
     * @return ReceivedCheque[] | Collection
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

        $query->setResourceType(ResourceType::RECEIVED_CHEQUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ReceivedCheque
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::RECEIVED_CHEQUE, $id);
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
    public function getChequeAmount()
    {
        return $this->getProperty('chequeAmount');
    }

    /**
     * @param string $chequeAmount
     */
    public function setChequeAmount($chequeAmount = null)
    {
        $this->setProperty('chequeAmount', $chequeAmount);
    }

}
