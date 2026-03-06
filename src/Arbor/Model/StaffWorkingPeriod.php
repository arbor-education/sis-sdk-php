<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffWorkingPeriod extends ModelBase
{
    public const STAFF = 'staff';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const APPLIES_ON_MONDAY = 'appliesOnMonday';

    public const APPLIES_ON_TUESDAY = 'appliesOnTuesday';

    public const APPLIES_ON_WEDNESDAY = 'appliesOnWednesday';

    public const APPLIES_ON_THURSDAY = 'appliesOnThursday';

    public const APPLIES_ON_FRIDAY = 'appliesOnFriday';

    public const APPLIES_ON_SATURDAY = 'appliesOnSaturday';

    public const APPLIES_ON_SUNDAY = 'appliesOnSunday';

    public const START_TIME = 'startTime';

    public const END_TIME = 'endTime';

    protected $_resourceType = ResourceType::STAFF_WORKING_PERIOD;

    /**
     * @param Query $query
     * @return StaffWorkingPeriod[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_WORKING_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffWorkingPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_WORKING_PERIOD, $id);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return bool
     */
    public function getAppliesOnMonday()
    {
        return $this->getProperty('appliesOnMonday');
    }

    /**
     * @param bool $appliesOnMonday
     */
    public function setAppliesOnMonday(bool $appliesOnMonday = null)
    {
        $this->setProperty('appliesOnMonday', $appliesOnMonday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnTuesday()
    {
        return $this->getProperty('appliesOnTuesday');
    }

    /**
     * @param bool $appliesOnTuesday
     */
    public function setAppliesOnTuesday(bool $appliesOnTuesday = null)
    {
        $this->setProperty('appliesOnTuesday', $appliesOnTuesday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnWednesday()
    {
        return $this->getProperty('appliesOnWednesday');
    }

    /**
     * @param bool $appliesOnWednesday
     */
    public function setAppliesOnWednesday(bool $appliesOnWednesday = null)
    {
        $this->setProperty('appliesOnWednesday', $appliesOnWednesday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnThursday()
    {
        return $this->getProperty('appliesOnThursday');
    }

    /**
     * @param bool $appliesOnThursday
     */
    public function setAppliesOnThursday(bool $appliesOnThursday = null)
    {
        $this->setProperty('appliesOnThursday', $appliesOnThursday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnFriday()
    {
        return $this->getProperty('appliesOnFriday');
    }

    /**
     * @param bool $appliesOnFriday
     */
    public function setAppliesOnFriday(bool $appliesOnFriday = null)
    {
        $this->setProperty('appliesOnFriday', $appliesOnFriday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnSaturday()
    {
        return $this->getProperty('appliesOnSaturday');
    }

    /**
     * @param bool $appliesOnSaturday
     */
    public function setAppliesOnSaturday(bool $appliesOnSaturday = null)
    {
        $this->setProperty('appliesOnSaturday', $appliesOnSaturday);
    }

    /**
     * @return bool
     */
    public function getAppliesOnSunday()
    {
        return $this->getProperty('appliesOnSunday');
    }

    /**
     * @param bool $appliesOnSunday
     */
    public function setAppliesOnSunday(bool $appliesOnSunday = null)
    {
        $this->setProperty('appliesOnSunday', $appliesOnSunday);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty('startTime');
    }

    /**
     * @param string $startTime
     */
    public function setStartTime(string $startTime = null)
    {
        $this->setProperty('startTime', $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty('endTime');
    }

    /**
     * @param string $endTime
     */
    public function setEndTime(string $endTime = null)
    {
        $this->setProperty('endTime', $endTime);
    }
}
