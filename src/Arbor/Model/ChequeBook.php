<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ChequeBook extends ModelBase
{
    public const BANK_ACCOUNT = 'bankAccount';

    public const CHEQUE_NUMBER_LENGTH = 'chequeNumberLength';

    public const CHEQUE_NUMBER_START = 'chequeNumberStart';

    public const CHEQUE_NUMBER_END = 'chequeNumberEnd';

    public const NEXT_CHEQUE_NUMBER = 'nextChequeNumber';

    protected $_resourceType = ResourceType::CHEQUE_BOOK;

    /**
     * @param Query $query
     * @return ChequeBook[] | Collection
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

        $query->setResourceType(ResourceType::CHEQUE_BOOK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ChequeBook
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CHEQUE_BOOK, $id);
    }

    /**
     * @return \Arbor\Model\BankAccount
     */
    public function getBankAccount()
    {
        return $this->getProperty('bankAccount');
    }

    /**
     * @param \Arbor\Model\BankAccount $bankAccount
     */
    public function setBankAccount(\Arbor\Model\BankAccount $bankAccount = null)
    {
        $this->setProperty('bankAccount', $bankAccount);
    }

    /**
     * @return int
     */
    public function getChequeNumberLength()
    {
        return $this->getProperty('chequeNumberLength');
    }

    /**
     * @param int $chequeNumberLength
     */
    public function setChequeNumberLength(int $chequeNumberLength = null)
    {
        $this->setProperty('chequeNumberLength', $chequeNumberLength);
    }

    /**
     * @return int
     */
    public function getChequeNumberStart()
    {
        return $this->getProperty('chequeNumberStart');
    }

    /**
     * @param int $chequeNumberStart
     */
    public function setChequeNumberStart(int $chequeNumberStart = null)
    {
        $this->setProperty('chequeNumberStart', $chequeNumberStart);
    }

    /**
     * @return int
     */
    public function getChequeNumberEnd()
    {
        return $this->getProperty('chequeNumberEnd');
    }

    /**
     * @param int $chequeNumberEnd
     */
    public function setChequeNumberEnd(int $chequeNumberEnd = null)
    {
        $this->setProperty('chequeNumberEnd', $chequeNumberEnd);
    }

    /**
     * @return int
     */
    public function getNextChequeNumber()
    {
        return $this->getProperty('nextChequeNumber');
    }

    /**
     * @param int $nextChequeNumber
     */
    public function setNextChequeNumber(int $nextChequeNumber = null)
    {
        $this->setProperty('nextChequeNumber', $nextChequeNumber);
    }
}
