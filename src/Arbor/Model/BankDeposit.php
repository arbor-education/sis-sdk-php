<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BankDeposit extends ModelBase
{

    const BANK_ACCOUNT = 'bankAccount';

    const PAID_BY_STAFF = 'paidByStaff';

    const DEPOSIT_DATETIME = 'depositDatetime';

    const TOTAL_CHEQUE_AMOUNT = 'totalChequeAmount';

    const TOTAL_CASH_AMOUNT = 'totalCashAmount';

    const DEPOSIT_REFERENCE = 'depositReference';

    const REFUND_ADJUSTMENT_AMOUNT = 'refundAdjustmentAmount';

    protected $_resourceType = ResourceType::BANK_DEPOSIT;

    /**
     * @param Query $query
     * @return BankDeposit[] | Collection
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

        $query->setResourceType(ResourceType::BANK_DEPOSIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BankDeposit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BANK_DEPOSIT, $id);
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount()
    {
        return $this->getProperty('bankAccount');
    }

    /**
     * @param BankAccount $bankAccount
     */
    public function setBankAccount(BankAccount $bankAccount = null)
    {
        $this->setProperty('bankAccount', $bankAccount);
    }

    /**
     * @return Staff
     */
    public function getPaidByStaff()
    {
        return $this->getProperty('paidByStaff');
    }

    /**
     * @param Staff $paidByStaff
     */
    public function setPaidByStaff(Staff $paidByStaff = null)
    {
        $this->setProperty('paidByStaff', $paidByStaff);
    }

    /**
     * @return \DateTime
     */
    public function getDepositDatetime()
    {
        return $this->getProperty('depositDatetime');
    }

    /**
     * @param \DateTime $depositDatetime
     */
    public function setDepositDatetime(\DateTime $depositDatetime = null)
    {
        $this->setProperty('depositDatetime', $depositDatetime);
    }

    /**
     * @return string
     */
    public function getTotalChequeAmount()
    {
        return $this->getProperty('totalChequeAmount');
    }

    /**
     * @param string $totalChequeAmount
     */
    public function setTotalChequeAmount($totalChequeAmount = null)
    {
        $this->setProperty('totalChequeAmount', $totalChequeAmount);
    }

    /**
     * @return string
     */
    public function getTotalCashAmount()
    {
        return $this->getProperty('totalCashAmount');
    }

    /**
     * @param string $totalCashAmount
     */
    public function setTotalCashAmount($totalCashAmount = null)
    {
        $this->setProperty('totalCashAmount', $totalCashAmount);
    }

    /**
     * @return string
     */
    public function getDepositReference()
    {
        return $this->getProperty('depositReference');
    }

    /**
     * @param string $depositReference
     */
    public function setDepositReference($depositReference = null)
    {
        $this->setProperty('depositReference', $depositReference);
    }

    /**
     * @return string
     */
    public function getRefundAdjustmentAmount()
    {
        return $this->getProperty('refundAdjustmentAmount');
    }

    /**
     * @param string $refundAdjustmentAmount
     */
    public function setRefundAdjustmentAmount($refundAdjustmentAmount = null)
    {
        $this->setProperty('refundAdjustmentAmount', $refundAdjustmentAmount);
    }


}
