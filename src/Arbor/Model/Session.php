<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Session extends ModelBase
{
    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION_TEXT = 'locationText';

    public const LOCATION = 'location';

    public const SESSION_NAME = 'sessionName';

    public const ACADEMIC_UNIT = 'academicUnit';

    public const TIMETABLE_SLOT = 'timetableSlot';

    public const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    public const LESSON_PLAN = 'lessonPlan';

    public const IS_SUSPENDED = 'isSuspended';

    protected $_resourceType = ResourceType::SESSION;

    /**
     * @param Query $query
     * @return Session[] | Collection
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

        $query->setResourceType(ResourceType::SESSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Session
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SESSION, $id);
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
     * @return \Arbor\Model\AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\Arbor\Model\AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
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
     * @return \Arbor\Model\LessonPlan
     */
    public function getLessonPlan()
    {
        return $this->getProperty('lessonPlan');
    }

    /**
     * @param \Arbor\Model\LessonPlan $lessonPlan
     */
    public function setLessonPlan(\Arbor\Model\LessonPlan $lessonPlan = null)
    {
        $this->setProperty('lessonPlan', $lessonPlan);
    }

    /**
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->getProperty('isSuspended');
    }

    /**
     * @param bool $isSuspended
     */
    public function setIsSuspended(bool $isSuspended = null)
    {
        $this->setProperty('isSuspended', $isSuspended);
    }
}
