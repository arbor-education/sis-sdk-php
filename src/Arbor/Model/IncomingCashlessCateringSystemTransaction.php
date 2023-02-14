<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IncomingCashlessCateringSystemTransaction extends ModelBase
{
    const BILL_PAYER = 'billPayer';

    const SOURCE = 'source';

    const TRANSACTION_IDENTIFIER = 'transactionIdentifier';

    const NARRATIVE = 'narrative';

    const CUSTOMER_ACCOUNT = 'customerAccount';

    const TRANSACTION_AMOUNT = 'transactionAmount';

    const TRANSACTION_FEE_AMOUNT = 'transactionFeeAmount';

    const VAT_AMOUNT = 'vatAmount';

    const TRANSACTION_DATE = 'transactionDate';

    const RELATED_ENTITY = 'relatedEntity';

    protected $_resourceType = ResourceType::INCOMING_CASHLESS_CATERING_SYSTEM_TRANSACTION;

    /**
     * @param Query $query
     * @return IncomingCashlessCateringSystemTransaction[] | Collection
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
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param string $source
     */
    public function setSource($source = null)
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
    public function setTransactionIdentifier($transactionIdentifier = null)
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
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

    /**
     * @return CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param CustomerAccount $customerAccount
     */
    public function setCustomerAccount(CustomerAccount $customerAccount = null)
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
    public function setTransactionAmount($transactionAmount = null)
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
    public function setTransactionFeeAmount($transactionFeeAmount = null)
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
    public function setVatAmount($vatAmount = null)
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
    public function setRelatedEntity(ModelBase $relatedEntity = null)
    {
        $this->setProperty('relatedEntity', $relatedEntity);
    }
}
