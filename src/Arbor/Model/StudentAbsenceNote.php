<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\Staff;
use \Arbor\Model\AttendanceMark;
use \Arbor\Model\TemporaryExclusion;

class StudentAbsenceNote extends ModelBase
{

    const STUDENT = 'student';

    const ABSENCE_START_DATETIME = 'absenceStartDatetime';

    const ABSENCE_END_DATETIME = 'absenceEndDatetime';

    const NOTES = 'notes';

    const APPROVED_DATE = 'approvedDate';

    const APPROVED_BY_STAFF = 'approvedByStaff';

    const ATTENDANCE_MARK = 'attendanceMark';

    const TEMPORARY_EXCLUSION = 'temporaryExclusion';

    protected $_resourceType = ResourceType::STUDENT_ABSENCE_NOTE;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentAbsenceNote[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentAbsenceNote");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentAbsenceNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_ABSENCE_NOTE, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return \DateTime
     */
    public function getAbsenceStartDatetime()
    {
        return $this->getProperty("absenceStartDatetime");
    }

    /**
     * @param \DateTime $absenceStartDatetime
     */
    public function setAbsenceStartDatetime(\DateTime $absenceStartDatetime = null)
    {
        $this->setProperty("absenceStartDatetime", $absenceStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getAbsenceEndDatetime()
    {
        return $this->getProperty("absenceEndDatetime");
    }

    /**
     * @param \DateTime $absenceEndDatetime
     */
    public function setAbsenceEndDatetime(\DateTime $absenceEndDatetime = null)
    {
        $this->setProperty("absenceEndDatetime", $absenceEndDatetime);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty("notes");
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes = null)
    {
        $this->setProperty("notes", $notes);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDate()
    {
        return $this->getProperty("approvedDate");
    }

    /**
     * @param \DateTime $approvedDate
     */
    public function setApprovedDate(\DateTime $approvedDate = null)
    {
        $this->setProperty("approvedDate", $approvedDate);
    }

    /**
     * @return Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty("approvedByStaff");
    }

    /**
     * @param Staff $approvedByStaff
     */
    public function setApprovedByStaff(Staff $approvedByStaff = null)
    {
        $this->setProperty("approvedByStaff", $approvedByStaff);
    }

    /**
     * @return AttendanceMark
     */
    public function getAttendanceMark()
    {
        return $this->getProperty("attendanceMark");
    }

    /**
     * @param AttendanceMark $attendanceMark
     */
    public function setAttendanceMark(AttendanceMark $attendanceMark = null)
    {
        $this->setProperty("attendanceMark", $attendanceMark);
    }

    /**
     * @return TemporaryExclusion
     */
    public function getTemporaryExclusion()
    {
        return $this->getProperty("temporaryExclusion");
    }

    /**
     * @param TemporaryExclusion $temporaryExclusion
     */
    public function setTemporaryExclusion(TemporaryExclusion $temporaryExclusion = null)
    {
        $this->setProperty("temporaryExclusion", $temporaryExclusion);
    }


}
