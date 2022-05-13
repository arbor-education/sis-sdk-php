<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InterventionSession extends ModelBase
{
    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION_TEXT = 'locationText';

    const LOCATION = 'location';

    const INTERVENTION = 'intervention';

    const STAFF_COUNT = 'staffCount';

    const STUDENT_COUNT = 'studentCount';

    const CALENDAR_WEEK = 'calendarWeek';

    const TIMETABLE_SLOT = 'timetableSlot';

    const INTERVENTION_GROUP = 'interventionGroup';

    const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    const ATTENDANCE_REGISTER_OPENED_DATETIME = 'attendanceRegisterOpenedDatetime';

    const ATTENDANCE_REGISTER_CLOSED_DATETIME = 'attendanceRegisterClosedDatetime';

    protected $_resourceType = ResourceType::INTERVENTION_SESSION;

    /**
     * @param Query $query
     * @return InterventionSession[] | Collection
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
    public function setLocationText($locationText = null)
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
    public function setLocation(ModelBase $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(Intervention $intervention = null)
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
    public function setStaffCount($staffCount = null)
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
    public function setStudentCount($studentCount = null)
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
    public function setCalendarWeek($calendarWeek = null)
    {
        $this->setProperty('calendarWeek', $calendarWeek);
    }

    /**
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
    }

    /**
     * @return InterventionGroup
     */
    public function getInterventionGroup()
    {
        return $this->getProperty('interventionGroup');
    }

    /**
     * @param InterventionGroup $interventionGroup
     */
    public function setInterventionGroup(InterventionGroup $interventionGroup = null)
    {
        $this->setProperty('interventionGroup', $interventionGroup);
    }

    /**
     * @return AttendanceRegisterType
     */
    public function getAttendanceRegisterType()
    {
        return $this->getProperty('attendanceRegisterType');
    }

    /**
     * @param AttendanceRegisterType $attendanceRegisterType
     */
    public function setAttendanceRegisterType(AttendanceRegisterType $attendanceRegisterType = null)
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
