<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClubMembershipPeriodRule extends ModelBase
{
    const RULE_IDENTIFIER = 'ruleIdentifier';

    const RULE_VALUE = 'ruleValue';

    const CLUB_MEMBERSHIP_PERIOD = 'clubMembershipPeriod';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP_PERIOD_RULE;

    /**
     * @param Query $query
     * @return ClubMembershipPeriodRule[] | Collection
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

        $query->setResourceType(ResourceType::CLUB_MEMBERSHIP_PERIOD_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClubMembershipPeriodRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB_MEMBERSHIP_PERIOD_RULE, $id);
    }

    /**
     * @return string
     */
    public function getRuleIdentifier()
    {
        return $this->getProperty('ruleIdentifier');
    }

    /**
     * @param string $ruleIdentifier
     */
    public function setRuleIdentifier($ruleIdentifier = null)
    {
        $this->setProperty('ruleIdentifier', $ruleIdentifier);
    }

    /**
     * @return string
     */
    public function getRuleValue()
    {
        return $this->getProperty('ruleValue');
    }

    /**
     * @param string $ruleValue
     */
    public function setRuleValue($ruleValue = null)
    {
        $this->setProperty('ruleValue', $ruleValue);
    }

    /**
     * @return ClubMembershipPeriod
     */
    public function getClubMembershipPeriod()
    {
        return $this->getProperty('clubMembershipPeriod');
    }

    /**
     * @param ClubMembershipPeriod $clubMembershipPeriod
     */
    public function setClubMembershipPeriod(ClubMembershipPeriod $clubMembershipPeriod = null)
    {
        $this->setProperty('clubMembershipPeriod', $clubMembershipPeriod);
    }
}
