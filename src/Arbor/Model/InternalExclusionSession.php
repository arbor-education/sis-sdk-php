<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InternalExclusionSession extends ModelBase
{

    const INTERNAL_EXCLUSION_TYPE = 'internalExclusionType';

    const SESSION_NAME = 'sessionName';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION = 'location';

    const LOCATION_TEXT = 'locationText';

    const TIMETABLE_SLOT = 'timetableSlot';

    const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    const ATTENDANCE_REGISTER_OPENED_DATETIME = 'attendanceRegisterOpenedDatetime';

    const ATTENDANCE_REGISTER_CLOSED_DATETIME = 'attendanceRegisterClosedDatetime';

    protected $_resourceType = ResourceType::INTERNAL_EXCLUSION_SESSION;

    /**
     * @param Query $query
     * @return InternalExclusionSession[] | Collection
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

        $query->setResourceType(ResourceType::INTERNAL_EXCLUSION_SESSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InternalExclusionSession
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERNAL_EXCLUSION_SESSION, $id);
    }

    /**
     * @return InternalExclusionType
     */
    public function getInternalExclusionType()
    {
        return $this->getProperty('internalExclusionType');
    }

    /**
     * @param InternalExclusionType $internalExclusionType
     */
    public function setInternalExclusionType(InternalExclusionType $internalExclusionType = null)
    {
        $this->setProperty('internalExclusionType', $internalExclusionType);
    }

    /**
     * @return string
     */
    public function getSessionName()
    {
        return $this->getProperty('sessionName');
    }

    /**
     * @param string $sessionName
     */
    public function setSessionName($sessionName = null)
    {
        $this->setProperty('sessionName', $sessionName);
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
     * @return Room
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param Room $location
     */
    public function setLocation(Room $location = null)
    {
        $this->setProperty('location', $location);
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
