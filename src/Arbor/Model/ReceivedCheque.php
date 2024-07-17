<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ReceivedCheque extends ModelBase
{
    public const BILL_PAYER = 'billPayer';

    public const BANK_DEPOSIT = 'bankDeposit';

    public const RECEIVED_DATE = 'receivedDate';

    public const CANCELLED_DATETIME = 'cancelledDatetime';

    public const CHEQUE_AMOUNT = 'chequeAmount';

    protected $_resourceType = ResourceType::RECEIVED_CHEQUE;

    /**
     * @param Query $query
     * @return ReceivedCheque[] | Collection
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
    public function getChequeAmount()
    {
        return $this->getProperty('chequeAmount');
    }

    /**
     * @param string $chequeAmount
     */
    public function setChequeAmount(string $chequeAmount = null)
    {
        $this->setProperty('chequeAmount', $chequeAmount);
    }
}
