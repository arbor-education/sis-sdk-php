<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StripePayoutRule extends ModelBase
{

    const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    const STRIPE_PAYOUT_DESTINATION = 'stripePayoutDestination';

    const PAYOUT_RULE_VERIFIED_BY = 'payoutRuleVerifiedBy';

    const PAYOUT_RULE_VERIFICATION_DATETIME = 'payoutRuleVerificationDatetime';

    protected $_resourceType = ResourceType::STRIPE_PAYOUT_RULE;

    /**
     * @param Query $query
     * @return StripePayoutRule[] | Collection
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

        $query->setResourceType(ResourceType::STRIPE_PAYOUT_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StripePayoutRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STRIPE_PAYOUT_RULE, $id);
    }

    /**
     * @return CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty('customerAccountType');
    }

    /**
     * @param CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(CustomerAccountType $customerAccountType = null)
    {
        $this->setProperty('customerAccountType', $customerAccountType);
    }

    /**
     * @return StripePayoutDestination
     */
    public function getStripePayoutDestination()
    {
        return $this->getProperty('stripePayoutDestination');
    }

    /**
     * @param StripePayoutDestination $stripePayoutDestination
     */
    public function setStripePayoutDestination(StripePayoutDestination $stripePayoutDestination = null)
    {
        $this->setProperty('stripePayoutDestination', $stripePayoutDestination);
    }

    /**
     * @return Staff
     */
    public function getPayoutRuleVerifiedBy()
    {
        return $this->getProperty('payoutRuleVerifiedBy');
    }

    /**
     * @param Staff $payoutRuleVerifiedBy
     */
    public function setPayoutRuleVerifiedBy(Staff $payoutRuleVerifiedBy = null)
    {
        $this->setProperty('payoutRuleVerifiedBy', $payoutRuleVerifiedBy);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutRuleVerificationDatetime()
    {
        return $this->getProperty('payoutRuleVerificationDatetime');
    }

    /**
     * @param \DateTime $payoutRuleVerificationDatetime
     */
    public function setPayoutRuleVerificationDatetime(\DateTime $payoutRuleVerificationDatetime = null)
    {
        $this->setProperty('payoutRuleVerificationDatetime', $payoutRuleVerificationDatetime);
    }


}
