<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ClubMembershipPeriod extends ModelBase
{
    public const CLUB = 'club';

    public const NAME = 'name';

    public const PURCHASE_START_DATE = 'purchaseStartDate';

    public const PURCHASE_END_DATE = 'purchaseEndDate';

    public const MEMBERSHIP_PERIOD_TYPE = 'membershipPeriodType';

    public const GUARDIAN_SIGNUP_START_DATETIME = 'guardianSignupStartDatetime';

    public const GUARDIAN_SIGNUP_END_DATETIME = 'guardianSignupEndDatetime';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP_PERIOD;

    /**
     * @param Query $query
     * @return ClubMembershipPeriod[] | Collection
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

        $query->setResourceType(ResourceType::CLUB_MEMBERSHIP_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClubMembershipPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB_MEMBERSHIP_PERIOD, $id);
    }

    /**
     * @return \Arbor\Model\Club
     */
    public function getClub()
    {
        return $this->getProperty('club');
    }

    /**
     * @param \Arbor\Model\Club $club
     */
    public function setClub(\Arbor\Model\Club $club = null)
    {
        $this->setProperty('club', $club);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseStartDate()
    {
        return $this->getProperty('purchaseStartDate');
    }

    /**
     * @param \DateTime $purchaseStartDate
     */
    public function setPurchaseStartDate(\DateTime $purchaseStartDate = null)
    {
        $this->setProperty('purchaseStartDate', $purchaseStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseEndDate()
    {
        return $this->getProperty('purchaseEndDate');
    }

    /**
     * @param \DateTime $purchaseEndDate
     */
    public function setPurchaseEndDate(\DateTime $purchaseEndDate = null)
    {
        $this->setProperty('purchaseEndDate', $purchaseEndDate);
    }

    /**
     * @return string
     */
    public function getMembershipPeriodType()
    {
        return $this->getProperty('membershipPeriodType');
    }

    /**
     * @param string $membershipPeriodType
     */
    public function setMembershipPeriodType(string $membershipPeriodType = null)
    {
        $this->setProperty('membershipPeriodType', $membershipPeriodType);
    }

    /**
     * @return \DateTime
     */
    public function getGuardianSignupStartDatetime()
    {
        return $this->getProperty('guardianSignupStartDatetime');
    }

    /**
     * @param \DateTime $guardianSignupStartDatetime
     */
    public function setGuardianSignupStartDatetime(\DateTime $guardianSignupStartDatetime = null)
    {
        $this->setProperty('guardianSignupStartDatetime', $guardianSignupStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getGuardianSignupEndDatetime()
    {
        return $this->getProperty('guardianSignupEndDatetime');
    }

    /**
     * @param \DateTime $guardianSignupEndDatetime
     */
    public function setGuardianSignupEndDatetime(\DateTime $guardianSignupEndDatetime = null)
    {
        $this->setProperty('guardianSignupEndDatetime', $guardianSignupEndDatetime);
    }
}
