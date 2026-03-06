<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IncomingCashlessCateringSystemTransaction extends ModelBase
{
    public const BILL_PAYER = 'billPayer';

    public const SOURCE = 'source';

    public const TRANSACTION_IDENTIFIER = 'transactionIdentifier';

    public const NARRATIVE = 'narrative';

    public const CUSTOMER_ACCOUNT = 'customerAccount';

    public const TRANSACTION_AMOUNT = 'transactionAmount';

    public const TRANSACTION_FEE_AMOUNT = 'transactionFeeAmount';

    public const VAT_AMOUNT = 'vatAmount';

    public const TRANSACTION_DATE = 'transactionDate';

    public const RELATED_ENTITY = 'relatedEntity';

    protected $_resourceType = ResourceType::INCOMING_CASHLESS_CATERING_SYSTEM_TRANSACTION;

    /**
     * @param Query $query
     * @return IncomingCashlessCateringSystemTransaction[] | Collection
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

        $query->setResourceType(ResourceType::INCOMING_CASHLESS_CATERING_SYSTEM_TRANSACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IncomingCashlessCateringSystemTransaction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INCOMING_CASHLESS_CATERING_SYSTEM_TRANSACTION, $id);
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
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param string $source
     */
    public function setSource(string $source = null)
    {
        $this->setProperty('source', $source);
    }

    /**
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->getProperty('transactionIdentifier');
    }

    /**
     * @param string $transactionIdentifier
     */
    public function setTransactionIdentifier(string $transactionIdentifier = null)
    {
        $this->setProperty('transactionIdentifier', $transactionIdentifier);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
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
     * @return string
     */
    public function getTransactionAmount()
    {
        return $this->getProperty('transactionAmount');
    }

    /**
     * @param string $transactionAmount
     */
    public function setTransactionAmount(string $transactionAmount = null)
    {
        $this->setProperty('transactionAmount', $transactionAmount);
    }

    /**
     * @return string
     */
    public function getTransactionFeeAmount()
    {
        return $this->getProperty('transactionFeeAmount');
    }

    /**
     * @param string $transactionFeeAmount
     */
    public function setTransactionFeeAmount(string $transactionFeeAmount = null)
    {
        $this->setProperty('transactionFeeAmount', $transactionFeeAmount);
    }

    /**
     * @return string
     */
    public function getVatAmount()
    {
        return $this->getProperty('vatAmount');
    }

    /**
     * @param string $vatAmount
     */
    public function setVatAmount(string $vatAmount = null)
    {
        $this->setProperty('vatAmount', $vatAmount);
    }

    /**
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->getProperty('transactionDate');
    }

    /**
     * @param \DateTime $transactionDate
     */
    public function setTransactionDate(\DateTime $transactionDate = null)
    {
        $this->setProperty('transactionDate', $transactionDate);
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
}
