<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffAttendanceRecord extends ModelBase
{
    public const STAFF = 'staff';

    public const ATTENDANCE_PERIOD_DATE = 'attendancePeriodDate';

    public const ATTENDANCE_PERIOD_START_TIME = 'attendancePeriodStartTime';

    public const ATTENDANCE_PERIOD_END_TIME = 'attendancePeriodEndTime';

    public const ACTUAL_START_TIME = 'actualStartTime';

    public const ACTUAL_END_TIME = 'actualEndTime';

    public const STAFF_ATTENDANCE_MARK = 'staffAttendanceMark';

    public const NARRATIVE = 'narrative';

    public const STAFF_ABSENCE = 'staffAbsence';

    protected $_resourceType = ResourceType::STAFF_ATTENDANCE_RECORD;

    /**
     * @param Query $query
     * @return StaffAttendanceRecord[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_ATTENDANCE_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffAttendanceRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_ATTENDANCE_RECORD, $id);
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
    public function getAttendancePeriodDate()
    {
        return $this->getProperty('attendancePeriodDate');
    }

    /**
     * @param \DateTime $attendancePeriodDate
     */
    public function setAttendancePeriodDate(\DateTime $attendancePeriodDate = null)
    {
        $this->setProperty('attendancePeriodDate', $attendancePeriodDate);
    }

    /**
     * @return string
     */
    public function getAttendancePeriodStartTime()
    {
        return $this->getProperty('attendancePeriodStartTime');
    }

    /**
     * @param string $attendancePeriodStartTime
     */
    public function setAttendancePeriodStartTime(string $attendancePeriodStartTime = null)
    {
        $this->setProperty('attendancePeriodStartTime', $attendancePeriodStartTime);
    }

    /**
     * @return string
     */
    public function getAttendancePeriodEndTime()
    {
        return $this->getProperty('attendancePeriodEndTime');
    }

    /**
     * @param string $attendancePeriodEndTime
     */
    public function setAttendancePeriodEndTime(string $attendancePeriodEndTime = null)
    {
        $this->setProperty('attendancePeriodEndTime', $attendancePeriodEndTime);
    }

    /**
     * @return string
     */
    public function getActualStartTime()
    {
        return $this->getProperty('actualStartTime');
    }

    /**
     * @param string $actualStartTime
     */
    public function setActualStartTime(string $actualStartTime = null)
    {
        $this->setProperty('actualStartTime', $actualStartTime);
    }

    /**
     * @return string
     */
    public function getActualEndTime()
    {
        return $this->getProperty('actualEndTime');
    }

    /**
     * @param string $actualEndTime
     */
    public function setActualEndTime(string $actualEndTime = null)
    {
        $this->setProperty('actualEndTime', $actualEndTime);
    }

    /**
     * @return \Arbor\Model\StaffAttendanceMark
     */
    public function getStaffAttendanceMark()
    {
        return $this->getProperty('staffAttendanceMark');
    }

    /**
     * @param \Arbor\Model\StaffAttendanceMark $staffAttendanceMark
     */
    public function setStaffAttendanceMark(\Arbor\Model\StaffAttendanceMark $staffAttendanceMark = null)
    {
        $this->setProperty('staffAttendanceMark', $staffAttendanceMark);
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
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

    /**
     * @return \Arbor\Model\StaffAbsence
     */
    public function getStaffAbsence()
    {
        return $this->getProperty('staffAbsence');
    }

    /**
     * @param \Arbor\Model\StaffAbsence $staffAbsence
     */
    public function setStaffAbsence(\Arbor\Model\StaffAbsence $staffAbsence = null)
    {
        $this->setProperty('staffAbsence', $staffAbsence);
    }
}
