<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Staff;

class StaffWorkingPeriod extends ModelBase
{

    const STAFF = 'staff';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const APPLIES_ON_MONDAY = 'appliesOnMonday';

    const APPLIES_ON_TUESDAY = 'appliesOnTuesday';

    const APPLIES_ON_WEDNESDAY = 'appliesOnWednesday';

    const APPLIES_ON_THURSDAY = 'appliesOnThursday';

    const APPLIES_ON_FRIDAY = 'appliesOnFriday';

    const APPLIES_ON_SATURDAY = 'appliesOnSaturday';

    const APPLIES_ON_SUNDAY = 'appliesOnSunday';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    protected $_resourceType = ResourceType::STAFF_WORKING_PERIOD;

    /**
     * @param \Arbor\Query\Query $query
     * @return StaffWorkingPeriod[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StaffWorkingPeriod");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StaffWorkingPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STAFF_WORKING_PERIOD, $id);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty("staff");
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty("staff", $staff);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return bool
     */
    public function getAppliesOnMonday()
    {
        return $this->getProperty("appliesOnMonday");
    }

    /**
     * @param bool $appliesOnMonday
     */
    public function setAppliesOnMonday($appliesOnMonday = null)
    {
        $this->setProperty("appliesOnMonday", $appliesOnMonday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnTuesday()
    {
        return $this->getProperty("appliesOnTuesday");
    }

    /**
     * @param bool $appliesOnTuesday
     */
    public function setAppliesOnTuesday($appliesOnTuesday = null)
    {
        $this->setProperty("appliesOnTuesday", $appliesOnTuesday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnWednesday()
    {
        return $this->getProperty("appliesOnWednesday");
    }

    /**
     * @param bool $appliesOnWednesday
     */
    public function setAppliesOnWednesday($appliesOnWednesday = null)
    {
        $this->setProperty("appliesOnWednesday", $appliesOnWednesday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnThursday()
    {
        return $this->getProperty("appliesOnThursday");
    }

    /**
     * @param bool $appliesOnThursday
     */
    public function setAppliesOnThursday($appliesOnThursday = null)
    {
        $this->setProperty("appliesOnThursday", $appliesOnThursday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnFriday()
    {
        return $this->getProperty("appliesOnFriday");
    }

    /**
     * @param bool $appliesOnFriday
     */
    public function setAppliesOnFriday($appliesOnFriday = null)
    {
        $this->setProperty("appliesOnFriday", $appliesOnFriday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnSaturday()
    {
        return $this->getProperty("appliesOnSaturday");
    }

    /**
     * @param bool $appliesOnSaturday
     */
    public function setAppliesOnSaturday($appliesOnSaturday = null)
    {
        $this->setProperty("appliesOnSaturday", $appliesOnSaturday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnSunday()
    {
        return $this->getProperty("appliesOnSunday");
    }

    /**
     * @param bool $appliesOnSunday
     */
    public function setAppliesOnSunday($appliesOnSunday = null)
    {
        $this->setProperty("appliesOnSunday", $appliesOnSunday);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty("startTime");
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty("startTime", $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty("endTime");
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty("endTime", $endTime);
    }


}
