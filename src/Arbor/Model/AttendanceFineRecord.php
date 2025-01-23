<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceFineRecord extends ModelBase
{
    public const STUDENT = 'student';

    public const ATTENDANCE_ROLL_CALL_RECORD = 'attendanceRollCallRecord';

    public const ATTENDANCE_FINE = 'attendanceFine';

    public const MARK_DATE = 'markDate';

    protected $_resourceType = ResourceType::ATTENDANCE_FINE_RECORD;

    /**
     * @param Query $query
     * @return AttendanceFineRecord[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_FINE_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceFineRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_FINE_RECORD, $id);
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
     * @return \Arbor\Model\AttendanceRollCallRecord
     */
    public function getAttendanceRollCallRecord()
    {
        return $this->getProperty('attendanceRollCallRecord');
    }

    /**
     * @param \Arbor\Model\AttendanceRollCallRecord $attendanceRollCallRecord
     */
    public function setAttendanceRollCallRecord(\Arbor\Model\AttendanceRollCallRecord $attendanceRollCallRecord = null)
    {
        $this->setProperty('attendanceRollCallRecord', $attendanceRollCallRecord);
    }

    /**
     * @return \Arbor\Model\AttendanceFine
     */
    public function getAttendanceFine()
    {
        return $this->getProperty('attendanceFine');
    }

    /**
     * @param \Arbor\Model\AttendanceFine $attendanceFine
     */
    public function setAttendanceFine(\Arbor\Model\AttendanceFine $attendanceFine = null)
    {
        $this->setProperty('attendanceFine', $attendanceFine);
    }

    /**
     * @return \DateTime
     */
    public function getMarkDate()
    {
        return $this->getProperty('markDate');
    }

    /**
     * @param \DateTime $markDate
     */
    public function setMarkDate(\DateTime $markDate = null)
    {
        $this->setProperty('markDate', $markDate);
    }
}
