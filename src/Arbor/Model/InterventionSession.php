<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InterventionSession extends ModelBase
{
    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION_TEXT = 'locationText';

    public const LOCATION = 'location';

    public const INTERVENTION = 'intervention';

    public const STAFF_COUNT = 'staffCount';

    public const STUDENT_COUNT = 'studentCount';

    public const CALENDAR_WEEK = 'calendarWeek';

    public const TIMETABLE_SLOT = 'timetableSlot';

    public const INTERVENTION_GROUP = 'interventionGroup';

    public const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    public const ATTENDANCE_REGISTER_OPENED_DATETIME = 'attendanceRegisterOpenedDatetime';

    public const ATTENDANCE_REGISTER_CLOSED_DATETIME = 'attendanceRegisterClosedDatetime';

    protected $_resourceType = ResourceType::INTERVENTION_SESSION;

    /**
     * @param Query $query
     * @return InterventionSession[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_SESSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionSession
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_SESSION, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty('locationText');
    }

    /**
     * @param string $locationText
     */
    public function setLocationText(string $locationText = null)
    {
        $this->setProperty('locationText', $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(\ModelBase $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return \Arbor\Model\Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param \Arbor\Model\Intervention $intervention
     */
    public function setIntervention(\Arbor\Model\Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
    }

    /**
     * @return int
     */
    public function getStaffCount()
    {
        return $this->getProperty('staffCount');
    }

    /**
     * @param int $staffCount
     */
    public function setStaffCount(int $staffCount = null)
    {
        $this->setProperty('staffCount', $staffCount);
    }

    /**
     * @return int
     */
    public function getStudentCount()
    {
        return $this->getProperty('studentCount');
    }

    /**
     * @param int $studentCount
     */
    public function setStudentCount(int $studentCount = null)
    {
        $this->setProperty('studentCount', $studentCount);
    }

    /**
     * @return int
     */
    public function getCalendarWeek()
    {
        return $this->getProperty('calendarWeek');
    }

    /**
     * @param int $calendarWeek
     */
    public function setCalendarWeek(int $calendarWeek = null)
    {
        $this->setProperty('calendarWeek', $calendarWeek);
    }

    /**
     * @return \Arbor\Model\TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param \Arbor\Model\TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(\Arbor\Model\TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
    }

    /**
     * @return \Arbor\Model\InterventionGroup
     */
    public function getInterventionGroup()
    {
        return $this->getProperty('interventionGroup');
    }

    /**
     * @param \Arbor\Model\InterventionGroup $interventionGroup
     */
    public function setInterventionGroup(\Arbor\Model\InterventionGroup $interventionGroup = null)
    {
        $this->setProperty('interventionGroup', $interventionGroup);
    }

    /**
     * @return \Arbor\Model\AttendanceRegisterType
     */
    public function getAttendanceRegisterType()
    {
        return $this->getProperty('attendanceRegisterType');
    }

    /**
     * @param \Arbor\Model\AttendanceRegisterType $attendanceRegisterType
     */
    public function setAttendanceRegisterType(\Arbor\Model\AttendanceRegisterType $attendanceRegisterType = null)
    {
        $this->setProperty('attendanceRegisterType', $attendanceRegisterType);
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceRegisterOpenedDatetime()
    {
        return $this->getProperty('attendanceRegisterOpenedDatetime');
    }

    /**
     * @param \DateTime $attendanceRegisterOpenedDatetime
     */
    public function setAttendanceRegisterOpenedDatetime(\DateTime $attendanceRegisterOpenedDatetime = null)
    {
        $this->setProperty('attendanceRegisterOpenedDatetime', $attendanceRegisterOpenedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceRegisterClosedDatetime()
    {
        return $this->getProperty('attendanceRegisterClosedDatetime');
    }

    /**
     * @param \DateTime $attendanceRegisterClosedDatetime
     */
    public function setAttendanceRegisterClosedDatetime(\DateTime $attendanceRegisterClosedDatetime = null)
    {
        $this->setProperty('attendanceRegisterClosedDatetime', $attendanceRegisterClosedDatetime);
    }
}
