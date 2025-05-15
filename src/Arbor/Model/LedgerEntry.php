<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class LedgerEntry extends ModelBase
{
    public const AMOUNT = 'amount';

    public const CUSTOMER_ACCOUNT = 'customerAccount';

    public const TRANSACTION = 'transaction';

    protected $_resourceType = ResourceType::LEDGER_ENTRY;

    /**
     * @param Query $query
     * @return LedgerEntry[] | Collection
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

        $query->setResourceType(ResourceType::LEDGER_ENTRY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LedgerEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LEDGER_ENTRY, $id);
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->getProperty('amount');
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount = null)
    {
        $this->setProperty('amount', $amount);
    }

    /**
     * @return \Arbor\Model\CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param \Arbor\Model\CustomerAccount $customerAccount
     */
    public function setCustomerAccount(\Arbor\Model\CustomerAccount $customerAccount = null)
    {
        $this->setProperty('customerAccount', $customerAccount);
    }

    /**
     * @return ModelBase
     */
    public function getTransaction()
    {
        return $this->getProperty('transaction');
    }

    /**
     * @param ModelBase $transaction
     */
    public function setTransaction(\ModelBase $transaction = null)
    {
        $this->setProperty('transaction', $transaction);
    }
}
