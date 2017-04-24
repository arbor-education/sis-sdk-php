<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomerAccount;

class CustomerAccountRefund extends ModelBase
{
    const CUSTOMER_ACCOUNT = 'customerAccount';

    const REFUND_DATETIME = 'refundDatetime';

    const REFUND = 'refund';

    const TRANSACTION = 'transaction';

    protected $_resourceType = ResourceType::CUSTOMER_ACCOUNT_REFUND;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomerAccountRefund[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CustomerAccountRefund");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomerAccountRefund
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CUSTOMER_ACCOUNT_REFUND, $id);
    }

    /**
     * @return CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty("customerAccount");
    }

    /**
     * @param CustomerAccount $customerAccount
     */
    public function setCustomerAccount(CustomerAccount $customerAccount = null)
    {
        $this->setProperty("customerAccount", $customerAccount);
    }

    /**
     * @return \DateTime
     */
    public function getRefundDatetime()
    {
        return $this->getProperty("refundDatetime");
    }

    /**
     * @param \DateTime $refundDatetime
     */
    public function setRefundDatetime(\DateTime $refundDatetime = null)
    {
        $this->setProperty("refundDatetime", $refundDatetime);
    }

    /**
     * @return string
     */
    public function getRefund()
    {
        return $this->getProperty("refund");
    }

    /**
     * @param string $refund
     */
    public function setRefund($refund = null)
    {
        $this->setProperty("refund", $refund);
    }

    /**
     * @return ModelBase
     */
    public function getTransaction()
    {
        return $this->getProperty("transaction");
    }

    /**
     * @param ModelBase $transaction
     */
    public function setTransaction(ModelBase $transaction = null)
    {
        $this->setProperty("transaction", $transaction);
    }
}
