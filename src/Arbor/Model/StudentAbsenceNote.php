<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentAbsenceNote extends \ModelBase
{
    public const STUDENT = 'student';

    public const ABSENCE_START_DATETIME = 'absenceStartDatetime';

    public const ABSENCE_END_DATETIME = 'absenceEndDatetime';

    public const NOTES = 'notes';

    public const APPROVED_DATE = 'approvedDate';

    public const APPROVED_BY_STAFF = 'approvedByStaff';

    public const ATTENDANCE_MARK = 'attendanceMark';

    public const FIXED_PERIOD_EXCLUSION = 'fixedPeriodExclusion';

    public const STUDENT_REPEATING_ABSENCE_NOTE = 'studentRepeatingAbsenceNote';

    protected $_resourceType = ResourceType::STUDENT_ABSENCE_NOTE;

    /**
     * @param Query $query
     * @return StudentAbsenceNote[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::STUDENT_ABSENCE_NOTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentAbsenceNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_ABSENCE_NOTE, $id);
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
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \DateTime
     */
    public function getAbsenceStartDatetime()
    {
        return $this->getProperty('absenceStartDatetime');
    }

    /**
     * @param \DateTime $absenceStartDatetime
     */
    public function setAbsenceStartDatetime(\DateTime $absenceStartDatetime = null)
    {
        $this->setProperty('absenceStartDatetime', $absenceStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getAbsenceEndDatetime()
    {
        return $this->getProperty('absenceEndDatetime');
    }

    /**
     * @param \DateTime $absenceEndDatetime
     */
    public function setAbsenceEndDatetime(\DateTime $absenceEndDatetime = null)
    {
        $this->setProperty('absenceEndDatetime', $absenceEndDatetime);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes = null)
    {
        $this->setProperty('notes', $notes);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDate()
    {
        return $this->getProperty('approvedDate');
    }

    /**
     * @param \DateTime $approvedDate
     */
    public function setApprovedDate(\DateTime $approvedDate = null)
    {
        $this->setProperty('approvedDate', $approvedDate);
    }

    /**
     * @return Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty('approvedByStaff');
    }

    /**
     * @param Staff $approvedByStaff
     */
    public function setApprovedByStaff(\Staff $approvedByStaff = null)
    {
        $this->setProperty('approvedByStaff', $approvedByStaff);
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
    public function setAttendanceMark(\AttendanceMark $attendanceMark = null)
    {
        $this->setProperty('attendanceMark', $attendanceMark);
    }

    /**
     * @return FixedPeriodExclusion
     */
    public function getFixedPeriodExclusion()
    {
        return $this->getProperty('fixedPeriodExclusion');
    }

    /**
     * @param FixedPeriodExclusion $fixedPeriodExclusion
     */
    public function setFixedPeriodExclusion(\FixedPeriodExclusion $fixedPeriodExclusion = null)
    {
        $this->setProperty('fixedPeriodExclusion', $fixedPeriodExclusion);
    }

    /**
     * @return StudentRepeatingAbsenceNote
     */
    public function getStudentRepeatingAbsenceNote()
    {
        return $this->getProperty('studentRepeatingAbsenceNote');
    }

    /**
     * @param StudentRepeatingAbsenceNote $studentRepeatingAbsenceNote
     */
    public function setStudentRepeatingAbsenceNote(\StudentRepeatingAbsenceNote $studentRepeatingAbsenceNote = null)
    {
        $this->setProperty('studentRepeatingAbsenceNote', $studentRepeatingAbsenceNote);
    }
}
