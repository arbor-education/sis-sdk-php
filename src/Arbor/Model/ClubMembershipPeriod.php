<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Club;

class ClubMembershipPeriod extends ModelBase
{
    const CLUB = 'club';

    const NAME = 'name';

    const PURCHASE_START_DATE = 'purchaseStartDate';

    const PURCHASE_END_DATE = 'purchaseEndDate';

    const MEMBERSHIP_PERIOD_TYPE = 'membershipPeriodType';

    const ALLOW_GUARDIAN_PORTAL_SIGNUP = 'allowGuardianPortalSignup';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP_PERIOD;

    /**
     * @param \Arbor\Query\Query $query
     * @return ClubMembershipPeriod[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ClubMembershipPeriod");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ClubMembershipPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CLUB_MEMBERSHIP_PERIOD, $id);
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->getProperty("club");
    }

    /**
     * @param Club $club
     */
    public function setClub(Club $club = null)
    {
        $this->setProperty("club", $club);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseStartDate()
    {
        return $this->getProperty("purchaseStartDate");
    }

    /**
     * @param \DateTime $purchaseStartDate
     */
    public function setPurchaseStartDate(\DateTime $purchaseStartDate = null)
    {
        $this->setProperty("purchaseStartDate", $purchaseStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseEndDate()
    {
        return $this->getProperty("purchaseEndDate");
    }

    /**
     * @param \DateTime $purchaseEndDate
     */
    public function setPurchaseEndDate(\DateTime $purchaseEndDate = null)
    {
        $this->setProperty("purchaseEndDate", $purchaseEndDate);
    }

    /**
     * @return string
     */
    public function getMembershipPeriodType()
    {
        return $this->getProperty("membershipPeriodType");
    }

    /**
     * @param string $membershipPeriodType
     */
    public function setMembershipPeriodType($membershipPeriodType = null)
    {
        $this->setProperty("membershipPeriodType", $membershipPeriodType);
    }

    /**
     * @return bool
     */
    public function getAllowGuardianPortalSignup()
    {
        return $this->getProperty("allowGuardianPortalSignup");
    }

    /**
     * @param bool $allowGuardianPortalSignup
     */
    public function setAllowGuardianPortalSignup($allowGuardianPortalSignup = null)
    {
        $this->setProperty("allowGuardianPortalSignup", $allowGuardianPortalSignup);
    }
}
