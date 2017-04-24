<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BankAccount;

class ChequeBook extends ModelBase
{
    const BANK_ACCOUNT = 'bankAccount';

    const CHEQUE_NUMBER_LENGTH = 'chequeNumberLength';

    const CHEQUE_NUMBER_START = 'chequeNumberStart';

    const CHEQUE_NUMBER_END = 'chequeNumberEnd';

    const NEXT_CHEQUE_NUMBER = 'nextChequeNumber';

    protected $_resourceType = ResourceType::CHEQUE_BOOK;

    /**
     * @param \Arbor\Query\Query $query
     * @return ChequeBook[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ChequeBook");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ChequeBook
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CHEQUE_BOOK, $id);
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount()
    {
        return $this->getProperty("bankAccount");
    }

    /**
     * @param BankAccount $bankAccount
     */
    public function setBankAccount(BankAccount $bankAccount = null)
    {
        $this->setProperty("bankAccount", $bankAccount);
    }

    /**
     * @return int
     */
    public function getChequeNumberLength()
    {
        return $this->getProperty("chequeNumberLength");
    }

    /**
     * @param int $chequeNumberLength
     */
    public function setChequeNumberLength($chequeNumberLength = null)
    {
        $this->setProperty("chequeNumberLength", $chequeNumberLength);
    }

    /**
     * @return int
     */
    public function getChequeNumberStart()
    {
        return $this->getProperty("chequeNumberStart");
    }

    /**
     * @param int $chequeNumberStart
     */
    public function setChequeNumberStart($chequeNumberStart = null)
    {
        $this->setProperty("chequeNumberStart", $chequeNumberStart);
    }

    /**
     * @return int
     */
    public function getChequeNumberEnd()
    {
        return $this->getProperty("chequeNumberEnd");
    }

    /**
     * @param int $chequeNumberEnd
     */
    public function setChequeNumberEnd($chequeNumberEnd = null)
    {
        $this->setProperty("chequeNumberEnd", $chequeNumberEnd);
    }

    /**
     * @return int
     */
    public function getNextChequeNumber()
    {
        return $this->getProperty("nextChequeNumber");
    }

    /**
     * @param int $nextChequeNumber
     */
    public function setNextChequeNumber($nextChequeNumber = null)
    {
        $this->setProperty("nextChequeNumber", $nextChequeNumber);
    }
}
