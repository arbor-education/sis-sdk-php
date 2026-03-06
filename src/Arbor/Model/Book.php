<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Book extends ModelBase
{
    public const BOOK_TYPE = 'bookType';

    public const PREFIX = 'prefix';

    public const FIRST_NUMBER = 'firstNumber';

    public const LAST_NUMBER = 'lastNumber';

    public const NEXT_NUMBER = 'nextNumber';

    public const OPEN = 'open';

    public const BANK_ACCOUNT = 'bankAccount';

    protected $_resourceType = ResourceType::BOOK;

    /**
     * @param Query $query
     * @return Book[] | Collection
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

        $query->setResourceType(ResourceType::BOOK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Book
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BOOK, $id);
    }

    /**
     * @return string
     */
    public function getBookType()
    {
        return $this->getProperty('bookType');
    }

    /**
     * @param string $bookType
     */
    public function setBookType(string $bookType = null)
    {
        $this->setProperty('bookType', $bookType);
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->getProperty('prefix');
    }

    /**
     * @param string $prefix
     */
    public function setPrefix(string $prefix = null)
    {
        $this->setProperty('prefix', $prefix);
    }

    /**
     * @return int
     */
    public function getFirstNumber()
    {
        return $this->getProperty('firstNumber');
    }

    /**
     * @param int $firstNumber
     */
    public function setFirstNumber(int $firstNumber = null)
    {
        $this->setProperty('firstNumber', $firstNumber);
    }

    /**
     * @return int
     */
    public function getLastNumber()
    {
        return $this->getProperty('lastNumber');
    }

    /**
     * @param int $lastNumber
     */
    public function setLastNumber(int $lastNumber = null)
    {
        $this->setProperty('lastNumber', $lastNumber);
    }

    /**
     * @return int
     */
    public function getNextNumber()
    {
        return $this->getProperty('nextNumber');
    }

    /**
     * @param int $nextNumber
     */
    public function setNextNumber(int $nextNumber = null)
    {
        $this->setProperty('nextNumber', $nextNumber);
    }

    /**
     * @return bool
     */
    public function getOpen()
    {
        return $this->getProperty('open');
    }

    /**
     * @param bool $open
     */
    public function setOpen(bool $open = null)
    {
        $this->setProperty('open', $open);
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
}
