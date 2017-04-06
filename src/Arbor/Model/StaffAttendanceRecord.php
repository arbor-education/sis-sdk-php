<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Staff;
use \Arbor\Model\StaffAttendanceMark;
use \Arbor\Model\StaffAbsence;

class StaffAttendanceRecord extends ModelBase
{

    const STAFF = 'staff';

    const ATTENDANCE_PERIOD_DATE = 'attendancePeriodDate';

    const ATTENDANCE_PERIOD_START_TIME = 'attendancePeriodStartTime';

    const ATTENDANCE_PERIOD_END_TIME = 'attendancePeriodEndTime';

    const ACTUAL_START_TIME = 'actualStartTime';

    const ACTUAL_END_TIME = 'actualEndTime';

    const STAFF_ATTENDANCE_MARK = 'staffAttendanceMark';

    const NARRATIVE = 'narrative';

    const STAFF_ABSENCE = 'staffAbsence';

    protected $_resourceType = ResourceType::STAFF_ATTENDANCE_RECORD;

    /**
     * @param \Arbor\Query\Query $query
     * @return StaffAttendanceRecord[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StaffAttendanceRecord");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StaffAttendanceRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STAFF_ATTENDANCE_RECORD, $id);
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
    public function getAttendancePeriodDate()
    {
        return $this->getProperty("attendancePeriodDate");
    }

    /**
     * @param \DateTime $attendancePeriodDate
     */
    public function setAttendancePeriodDate(\DateTime $attendancePeriodDate = null)
    {
        $this->setProperty("attendancePeriodDate", $attendancePeriodDate);
    }

    /**
     * @return string
     */
    public function getAttendancePeriodStartTime()
    {
        return $this->getProperty("attendancePeriodStartTime");
    }

    /**
     * @param string $attendancePeriodStartTime
     */
    public function setAttendancePeriodStartTime($attendancePeriodStartTime = null)
    {
        $this->setProperty("attendancePeriodStartTime", $attendancePeriodStartTime);
    }

    /**
     * @return string
     */
    public function getAttendancePeriodEndTime()
    {
        return $this->getProperty("attendancePeriodEndTime");
    }

    /**
     * @param string $attendancePeriodEndTime
     */
    public function setAttendancePeriodEndTime($attendancePeriodEndTime = null)
    {
        $this->setProperty("attendancePeriodEndTime", $attendancePeriodEndTime);
    }

    /**
     * @return string
     */
    public function getActualStartTime()
    {
        return $this->getProperty("actualStartTime");
    }

    /**
     * @param string $actualStartTime
     */
    public function setActualStartTime($actualStartTime = null)
    {
        $this->setProperty("actualStartTime", $actualStartTime);
    }

    /**
     * @return string
     */
    public function getActualEndTime()
    {
        return $this->getProperty("actualEndTime");
    }

    /**
     * @param string $actualEndTime
     */
    public function setActualEndTime($actualEndTime = null)
    {
        $this->setProperty("actualEndTime", $actualEndTime);
    }

    /**
     * @return StaffAttendanceMark
     */
    public function getStaffAttendanceMark()
    {
        return $this->getProperty("staffAttendanceMark");
    }

    /**
     * @param StaffAttendanceMark $staffAttendanceMark
     */
    public function setStaffAttendanceMark(StaffAttendanceMark $staffAttendanceMark = null)
    {
        $this->setProperty("staffAttendanceMark", $staffAttendanceMark);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }

    /**
     * @return StaffAbsence
     */
    public function getStaffAbsence()
    {
        return $this->getProperty("staffAbsence");
    }

    /**
     * @param StaffAbsence $staffAbsence
     */
    public function setStaffAbsence(StaffAbsence $staffAbsence = null)
    {
        $this->setProperty("staffAbsence", $staffAbsence);
    }


}
