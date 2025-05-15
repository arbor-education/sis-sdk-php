<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceRollCallRecord extends ModelBase
{
    public const ATTENDANCE_ROLL_CALL = 'attendanceRollCall';

    public const RECORD_DATE = 'recordDate';

    public const STUDENT = 'student';

    public const ATTENDANCE_MARK = 'attendanceMark';

    public const MINUTES_LATE = 'minutesLate';

    public const SOURCE_ATTENDANCE_RECORD = 'sourceAttendanceRecord';

    public const VALIDATION_ERROR = 'validationError';

    public const SOURCE = 'source';

    protected $_resourceType = ResourceType::ATTENDANCE_ROLL_CALL_RECORD;

    /**
     * @param Query $query
     * @return AttendanceRollCallRecord[] | Collection
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
     * @return \Arbor\Model\AttendanceRollCall
     */
    public function getAttendanceRollCall()
    {
        return $this->getProperty('attendanceRollCall');
    }

    /**
     * @param \Arbor\Model\AttendanceRollCall $attendanceRollCall
     */
    public function setAttendanceRollCall(\Arbor\Model\AttendanceRollCall $attendanceRollCall = null)
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
    public function getValidationError()
    {
        return $this->getProperty('validationError');
    }

    /**
     * @param string $validationError
     */
    public function setValidationError(string $validationError = null)
    {
        $this->setProperty('validationError', $validationError);
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
