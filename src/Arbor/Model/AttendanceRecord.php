<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AttendanceRecord extends ModelBase
{

    const ATTENDANCE_MARK = 'attendanceMark';

    const ATTENDANCE_REGISTER = 'attendanceRegister';

    const STUDENT = 'student';

    const MINUTES_LATE = 'minutesLate';

    const RECORD_NOTE = 'recordNote';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const ATTENDANCE_FOLLOW_UP = 'attendanceFollowUp';

    const STUDENT_ABSENCE_NOTE = 'studentAbsenceNote';

    const SOURCE_ATTENDANCE_RECORD = 'sourceAttendanceRecord';

    protected $_resourceType = ResourceType::ATTENDANCE_RECORD;

    /**
     * @param Query $query
     * @return AttendanceRecord[] | Collection
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
     * @return AttendanceMark
     */
    public function getAttendanceMark()
    {
        return $this->getProperty('attendanceMark');
    }

    /**
     * @param AttendanceMark $attendanceMark
     */
    public function setAttendanceMark(AttendanceMark $attendanceMark = null)
    {
        $this->setProperty('attendanceMark', $attendanceMark);
    }

    /**
     * @return AttendanceRegister
     */
    public function getAttendanceRegister()
    {
        return $this->getProperty('attendanceRegister');
    }

    /**
     * @param AttendanceRegister $attendanceRegister
     */
    public function setAttendanceRegister(AttendanceRegister $attendanceRegister = null)
    {
        $this->setProperty('attendanceRegister', $attendanceRegister);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
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
    public function setMinutesLate($minutesLate = null)
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
    public function setRecordNote($recordNote = null)
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
     * @return AttendanceFollowUp
     */
    public function getAttendanceFollowUp()
    {
        return $this->getProperty('attendanceFollowUp');
    }

    /**
     * @param AttendanceFollowUp $attendanceFollowUp
     */
    public function setAttendanceFollowUp(AttendanceFollowUp $attendanceFollowUp = null)
    {
        $this->setProperty('attendanceFollowUp', $attendanceFollowUp);
    }

    /**
     * @return StudentAbsenceNote
     */
    public function getStudentAbsenceNote()
    {
        return $this->getProperty('studentAbsenceNote');
    }

    /**
     * @param StudentAbsenceNote $studentAbsenceNote
     */
    public function setStudentAbsenceNote(StudentAbsenceNote $studentAbsenceNote = null)
    {
        $this->setProperty('studentAbsenceNote', $studentAbsenceNote);
    }

    /**
     * @return AttendanceRecord
     */
    public function getSourceAttendanceRecord()
    {
        return $this->getProperty('sourceAttendanceRecord');
    }

    /**
     * @param AttendanceRecord $sourceAttendanceRecord
     */
    public function setSourceAttendanceRecord(AttendanceRecord $sourceAttendanceRecord = null)
    {
        $this->setProperty('sourceAttendanceRecord', $sourceAttendanceRecord);
    }


}
