<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerAccount extends ModelBase
{
    public const RELATED_ENTITY = 'relatedEntity';

    public const DELETED_RELATED_ENTITY_NAME = 'deletedRelatedEntityName';

    public const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    public const BILL_PAYER1 = 'billPayer1';

    public const BILL_PAYER2 = 'billPayer2';

    public const BILL_PAYER3 = 'billPayer3';

    public const BILL_PAYER1_PROPORTION = 'billPayer1Proportion';

    public const BILL_PAYER2_PROPORTION = 'billPayer2Proportion';

    public const BILL_PAYER3_PROPORTION = 'billPayer3Proportion';

    public const ACCOUNT_BALANCE = 'accountBalance';

    public const CREDIT_LIMIT = 'creditLimit';

    public const OPENING_BALANCE_TRANSACTION_DATETIME = 'openingBalanceTransactionDatetime';

    public const OPENING_BALANCE_TRANSACTION = 'openingBalanceTransaction';

    protected $_resourceType = ResourceType::CUSTOMER_ACCOUNT;

    /**
     * @param Query $query
     * @return CustomerAccount[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_ACCOUNT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerAccount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_ACCOUNT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getRelatedEntity()
    {
        return $this->getProperty('relatedEntity');
    }

    /**
     * @param ModelBase $relatedEntity
     */
    public function setRelatedEntity(\ModelBase $relatedEntity = null)
    {
        $this->setProperty('relatedEntity', $relatedEntity);
    }

    /**
     * @return string
     */
    public function getDeletedRelatedEntityName()
    {
        return $this->getProperty('deletedRelatedEntityName');
    }

    /**
     * @param string $deletedRelatedEntityName
     */
    public function setDeletedRelatedEntityName(string $deletedRelatedEntityName = null)
    {
        $this->setProperty('deletedRelatedEntityName', $deletedRelatedEntityName);
    }

    /**
     * @return \Arbor\Model\CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty('customerAccountType');
    }

    /**
     * @param \Arbor\Model\CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(\Arbor\Model\CustomerAccountType $customerAccountType = null)
    {
        $this->setProperty('customerAccountType', $customerAccountType);
    }

    /**
     * @return \Arbor\Model\BillPayer
     */
    public function getBillPayer1()
    {
        return $this->getProperty('billPayer1');
    }

    /**
     * @param \Arbor\Model\BillPayer $billPayer1
     */
    public function setBillPayer1(\Arbor\Model\BillPayer $billPayer1 = null)
    {
        $this->setProperty('billPayer1', $billPayer1);
    }

    /**
     * @return \Arbor\Model\BillPayer
     */
    public function getBillPayer2()
    {
        return $this->getProperty('billPayer2');
    }

    /**
     * @param \Arbor\Model\BillPayer $billPayer2
     */
    public function setBillPayer2(\Arbor\Model\BillPayer $billPayer2 = null)
    {
        $this->setProperty('billPayer2', $billPayer2);
    }

    /**
     * @return \Arbor\Model\BillPayer
     */
    public function getBillPayer3()
    {
        return $this->getProperty('billPayer3');
    }

    /**
     * @param \Arbor\Model\BillPayer $billPayer3
     */
    public function setBillPayer3(\Arbor\Model\BillPayer $billPayer3 = null)
    {
        $this->setProperty('billPayer3', $billPayer3);
    }

    /**
     * @return float
     */
    public function getBillPayer1Proportion()
    {
        return $this->getProperty('billPayer1Proportion');
    }

    /**
     * @param float $billPayer1Proportion
     */
    public function setBillPayer1Proportion(float $billPayer1Proportion = null)
    {
        $this->setProperty('billPayer1Proportion', $billPayer1Proportion);
    }

    /**
     * @return float
     */
    public function getBillPayer2Proportion()
    {
        return $this->getProperty('billPayer2Proportion');
    }

    /**
     * @param float $billPayer2Proportion
     */
    public function setBillPayer2Proportion(float $billPayer2Proportion = null)
    {
        $this->setProperty('billPayer2Proportion', $billPayer2Proportion);
    }

    /**
     * @return float
     */
    public function getBillPayer3Proportion()
    {
        return $this->getProperty('billPayer3Proportion');
    }

    /**
     * @param float $billPayer3Proportion
     */
    public function setBillPayer3Proportion(float $billPayer3Proportion = null)
    {
        $this->setProperty('billPayer3Proportion', $billPayer3Proportion);
    }

    /**
     * @return string
     */
    public function getAccountBalance()
    {
        return $this->getProperty('accountBalance');
    }

    /**
     * @param string $accountBalance
     */
    public function setAccountBalance(string $accountBalance = null)
    {
        $this->setProperty('accountBalance', $accountBalance);
    }

    /**
     * @return string
     */
    public function getCreditLimit()
    {
        return $this->getProperty('creditLimit');
    }

    /**
     * @param string $creditLimit
     */
    public function setCreditLimit(string $creditLimit = null)
    {
        $this->setProperty('creditLimit', $creditLimit);
    }

    /**
     * @return \DateTime
     */
    public function getOpeningBalanceTransactionDatetime()
    {
        return $this->getProperty('openingBalanceTransactionDatetime');
    }

    /**
     * @param \DateTime $openingBalanceTransactionDatetime
     */
    public function setOpeningBalanceTransactionDatetime(\DateTime $openingBalanceTransactionDatetime = null)
    {
        $this->setProperty('openingBalanceTransactionDatetime', $openingBalanceTransactionDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getOpeningBalanceTransaction()
    {
        return $this->getProperty('openingBalanceTransaction');
    }

    /**
     * @param ModelBase $openingBalanceTransaction
     */
    public function setOpeningBalanceTransaction(\ModelBase $openingBalanceTransaction = null)
    {
        $this->setProperty('openingBalanceTransaction', $openingBalanceTransaction);
    }
}
