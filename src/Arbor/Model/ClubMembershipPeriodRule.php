<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ClubMembershipPeriodRule extends ModelBase
{
    public const RULE_IDENTIFIER = 'ruleIdentifier';

    public const RULE_VALUE = 'ruleValue';

    public const CLUB_MEMBERSHIP_PERIOD = 'clubMembershipPeriod';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP_PERIOD_RULE;

    /**
     * @param Query $query
     * @return ClubMembershipPeriodRule[] | Collection
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
    public function setRuleIdentifier(string $ruleIdentifier = null)
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
    public function setRuleValue(string $ruleValue = null)
    {
        $this->setProperty('ruleValue', $ruleValue);
    }

    /**
     * @return \Arbor\Model\ClubMembershipPeriod
     */
    public function getClubMembershipPeriod()
    {
        return $this->getProperty('clubMembershipPeriod');
    }

    /**
     * @param \Arbor\Model\ClubMembershipPeriod $clubMembershipPeriod
     */
    public function setClubMembershipPeriod(\Arbor\Model\ClubMembershipPeriod $clubMembershipPeriod = null)
    {
        $this->setProperty('clubMembershipPeriod', $clubMembershipPeriod);
    }
}
