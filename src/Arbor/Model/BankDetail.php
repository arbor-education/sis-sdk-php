<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BankDetail extends ModelBase
{
    public const ACCOUNT_HOLDER = 'accountHolder';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const BANK = 'bank';

    public const ACCOUNT_NAME = 'accountName';

    public const ACCOUNT_NUMBER = 'accountNumber';

    public const SORT_CODE = 'sortCode';

    protected $_resourceType = ResourceType::BANK_DETAIL;

    /**
     * @param Query $query
     * @return BankDetail[] | Collection
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

        $query->setResourceType(ResourceType::BANK_DETAIL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BankDetail
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BANK_DETAIL, $id);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getAccountHolder()
    {
        return $this->getProperty('accountHolder');
    }

    /**
     * @param \Arbor\Model\Staff $accountHolder
     */
    public function setAccountHolder(\Arbor\Model\Staff $accountHolder = null)
    {
        $this->setProperty('accountHolder', $accountHolder);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return \Arbor\Model\Bank
     */
    public function getBank()
    {
        return $this->getProperty('bank');
    }

    /**
     * @param \Arbor\Model\Bank $bank
     */
    public function setBank(\Arbor\Model\Bank $bank = null)
    {
        $this->setProperty('bank', $bank);
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->getProperty('accountName');
    }

    /**
     * @param string $accountName
     */
    public function setAccountName(string $accountName = null)
    {
        $this->setProperty('accountName', $accountName);
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->getProperty('accountNumber');
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber(string $accountNumber = null)
    {
        $this->setProperty('accountNumber', $accountNumber);
    }

    /**
     * @return string
     */
    public function getSortCode()
    {
        return $this->getProperty('sortCode');
    }

    /**
     * @param string $sortCode
     */
    public function setSortCode(string $sortCode = null)
    {
        $this->setProperty('sortCode', $sortCode);
    }
}
