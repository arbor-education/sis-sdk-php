<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InternalExclusionSession extends ModelBase
{
    public const INTERNAL_EXCLUSION_TYPE = 'internalExclusionType';

    public const SESSION_NAME = 'sessionName';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION = 'location';

    public const LOCATION_TEXT = 'locationText';

    public const TIMETABLE_SLOT = 'timetableSlot';

    public const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    public const ATTENDANCE_REGISTER_OPENED_DATETIME = 'attendanceRegisterOpenedDatetime';

    public const ATTENDANCE_REGISTER_CLOSED_DATETIME = 'attendanceRegisterClosedDatetime';

    protected $_resourceType = ResourceType::INTERNAL_EXCLUSION_SESSION;

    /**
     * @param Query $query
     * @return InternalExclusionSession[] | Collection
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
     * @return \Arbor\Model\InternalExclusionType
     */
    public function getInternalExclusionType()
    {
        return $this->getProperty('internalExclusionType');
    }

    /**
     * @param \Arbor\Model\InternalExclusionType $internalExclusionType
     */
    public function setInternalExclusionType(\Arbor\Model\InternalExclusionType $internalExclusionType = null)
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
    public function setSessionName(string $sessionName = null)
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
     * @return \Arbor\Model\Room
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param \Arbor\Model\Room $location
     */
    public function setLocation(\Arbor\Model\Room $location = null)
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
    public function setLocationText(string $locationText = null)
    {
        $this->setProperty('locationText', $locationText);
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
