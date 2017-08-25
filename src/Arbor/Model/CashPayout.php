<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CashPayout extends ModelBase
{
    const CUSTOMER_ACCOUNT = 'customerAccount';

    const PAYOUT_DATETIME = 'payoutDatetime';

    const PAYOUT = 'payout';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::CASH_PAYOUT;

    /**
     * @param Query $query
     * @return CashPayout[] | Collection
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

        $query->setResourceType(ResourceType::CASH_PAYOUT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CashPayout
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CASH_PAYOUT, $id);
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
     * @return \DateTime
     */
    public function getPayoutDatetime()
    {
        return $this->getProperty('payoutDatetime');
    }

    /**
     * @param \DateTime $payoutDatetime
     */
    public function setPayoutDatetime(\DateTime $payoutDatetime = null)
    {
        $this->setProperty('payoutDatetime', $payoutDatetime);
    }

    /**
     * @return string
     */
    public function getPayout()
    {
        return $this->getProperty('payout');
    }

    /**
     * @param string $payout
     */
    public function setPayout($payout = null)
    {
        $this->setProperty('payout', $payout);
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
}
