<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AttendanceRollCallRecord extends ModelBase
{

    const ATTENDANCE_ROLL_CALL = 'attendanceRollCall';

    const RECORD_DATE = 'recordDate';

    const STUDENT = 'student';

    const ATTENDANCE_MARK = 'attendanceMark';

    const MINUTES_LATE = 'minutesLate';

    const SOURCE_ATTENDANCE_RECORD = 'sourceAttendanceRecord';

    const VALIDATION_ERROR = 'validationError';

    protected $_resourceType = ResourceType::ATTENDANCE_ROLL_CALL_RECORD;

    /**
     * @param Query $query
     * @return AttendanceRollCallRecord[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_ROLL_CALL_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceRollCallRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_ROLL_CALL_RECORD, $id);
    }

    /**
     * @return AttendanceRollCall
     */
    public function getAttendanceRollCall()
    {
        return $this->getProperty('attendanceRollCall');
    }

    /**
     * @param AttendanceRollCall $attendanceRollCall
     */
    public function setAttendanceRollCall(AttendanceRollCall $attendanceRollCall = null)
    {
        $this->setProperty('attendanceRollCall', $attendanceRollCall);
    }

    /**
     * @return \DateTime
     */
    public function getRecordDate()
    {
        return $this->getProperty('recordDate');
    }

    /**
     * @param \DateTime $recordDate
     */
    public function setRecordDate(\DateTime $recordDate = null)
    {
        $this->setProperty('recordDate', $recordDate);
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

    /**
     * @return string
     */
    public function getValidationError()
    {
        return $this->getProperty('validationError');
    }

    /**
     * @param string $validationError
     */
    public function setValidationError($validationError = null)
    {
        $this->setProperty('validationError', $validationError);
    }


}
