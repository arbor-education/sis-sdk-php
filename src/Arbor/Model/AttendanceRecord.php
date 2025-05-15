<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceRecord extends ModelBase
{
    public const ATTENDANCE_MARK = 'attendanceMark';

    public const ATTENDANCE_REGISTER = 'attendanceRegister';

    public const STUDENT = 'student';

    public const MINUTES_LATE = 'minutesLate';

    public const RECORD_NOTE = 'recordNote';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const EVENT = 'event';

    public const EVENT_GROUP = 'eventGroup';

    public const ATTENDANCE_FOLLOW_UP = 'attendanceFollowUp';

    public const STUDENT_ABSENCE_NOTE = 'studentAbsenceNote';

    public const SOURCE_ATTENDANCE_RECORD = 'sourceAttendanceRecord';

    public const SOURCE = 'source';

    protected $_resourceType = ResourceType::ATTENDANCE_RECORD;

    /**
     * @param Query $query
     * @return AttendanceRecord[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_RECORD, $id);
    }

    /**
     * @return \Arbor\Model\AttendanceMark
     */
    public function getAttendanceMark()
    {
        return $this->getProperty('attendanceMark');
    }

    /**
     * @param \Arbor\Model\AttendanceMark $attendanceMark
     */
    public function setAttendanceMark(\Arbor\Model\AttendanceMark $attendanceMark = null)
    {
        $this->setProperty('attendanceMark', $attendanceMark);
    }

    /**
     * @return \Arbor\Model\AttendanceRegister
     */
    public function getAttendanceRegister()
    {
        return $this->getProperty('attendanceRegister');
    }

    /**
     * @param \Arbor\Model\AttendanceRegister $attendanceRegister
     */
    public function setAttendanceRegister(\Arbor\Model\AttendanceRegister $attendanceRegister = null)
    {
        $this->setProperty('attendanceRegister', $attendanceRegister);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return int
     */
    public function getMinutesLate()
    {
        return $this->getProperty('minutesLate');
    }

    /**
     * @param int $minutesLate
     */
    public function setMinutesLate(int $minutesLate = null)
    {
        $this->setProperty('minutesLate', $minutesLate);
    }

    /**
     * @return string
     */
    public function getRecordNote()
    {
        return $this->getProperty('recordNote');
    }

    /**
     * @param string $recordNote
     */
    public function setRecordNote(string $recordNote = null)
    {
        $this->setProperty('recordNote', $recordNote);
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
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(\ModelBase $event = null)
    {
        $this->setProperty('event', $event);
    }

    /**
     * @return ModelBase
     */
    public function getEventGroup()
    {
        return $this->getProperty('eventGroup');
    }

    /**
     * @param ModelBase $eventGroup
     */
    public function setEventGroup(\ModelBase $eventGroup = null)
    {
        $this->setProperty('eventGroup', $eventGroup);
    }

    /**
     * @return \Arbor\Model\AttendanceFollowUp
     */
    public function getAttendanceFollowUp()
    {
        return $this->getProperty('attendanceFollowUp');
    }

    /**
     * @param \Arbor\Model\AttendanceFollowUp $attendanceFollowUp
     */
    public function setAttendanceFollowUp(\Arbor\Model\AttendanceFollowUp $attendanceFollowUp = null)
    {
        $this->setProperty('attendanceFollowUp', $attendanceFollowUp);
    }

    /**
     * @return \Arbor\Model\StudentAbsenceNote
     */
    public function getStudentAbsenceNote()
    {
        return $this->getProperty('studentAbsenceNote');
    }

    /**
     * @param \Arbor\Model\StudentAbsenceNote $studentAbsenceNote
     */
    public function setStudentAbsenceNote(\Arbor\Model\StudentAbsenceNote $studentAbsenceNote = null)
    {
        $this->setProperty('studentAbsenceNote', $studentAbsenceNote);
    }

    /**
     * @return \Arbor\Model\AttendanceRecord
     */
    public function getSourceAttendanceRecord()
    {
        return $this->getProperty('sourceAttendanceRecord');
    }

    /**
     * @param \Arbor\Model\AttendanceRecord $sourceAttendanceRecord
     */
    public function setSourceAttendanceRecord(\Arbor\Model\AttendanceRecord $sourceAttendanceRecord = null)
    {
        $this->setProperty('sourceAttendanceRecord', $sourceAttendanceRecord);
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param string $source
     */
    public function setSource(string $source = null)
    {
        $this->setProperty('source', $source);
    }
}
