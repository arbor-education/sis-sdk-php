<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentAbsenceNote extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty('approvedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $approvedByStaff
     */
    public function setApprovedByStaff(\Arbor\Model\Staff $approvedByStaff = null)
    {
        $this->setProperty('approvedByStaff', $approvedByStaff);
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
     * @return \Arbor\Model\FixedPeriodExclusion
     */
    public function getFixedPeriodExclusion()
    {
        return $this->getProperty('fixedPeriodExclusion');
    }

    /**
     * @param \Arbor\Model\FixedPeriodExclusion $fixedPeriodExclusion
     */
    public function setFixedPeriodExclusion(\Arbor\Model\FixedPeriodExclusion $fixedPeriodExclusion = null)
    {
        $this->setProperty('fixedPeriodExclusion', $fixedPeriodExclusion);
    }

    /**
     * @return \Arbor\Model\StudentRepeatingAbsenceNote
     */
    public function getStudentRepeatingAbsenceNote()
    {
        return $this->getProperty('studentRepeatingAbsenceNote');
    }

    /**
     * @param \Arbor\Model\StudentRepeatingAbsenceNote $studentRepeatingAbsenceNote
     */
    public function setStudentRepeatingAbsenceNote(\Arbor\Model\StudentRepeatingAbsenceNote $studentRepeatingAbsenceNote = null)
    {
        $this->setProperty('studentRepeatingAbsenceNote', $studentRepeatingAbsenceNote);
    }
}
