<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentOtherSchoolAttendanceRecord extends ModelBase
{
    public const STUDENT = 'student';

    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const YEAR = 'year';

    public const ACADEMIC_YEAR = 'academicYear';

    public const SESSIONS_POSSIBLE = 'sessionsPossible';

    public const SESSIONS_ATTENDED = 'sessionsAttended';

    public const SESSIONS_AUTHORIZED_ABSENCE = 'sessionsAuthorizedAbsence';

    public const SESSIONS_UNAUTHORIZED_ABSENCE = 'sessionsUnauthorizedAbsence';

    public const ATTENDANCE_START_DATE = 'attendanceStartDate';

    public const ATTENDANCE_MARKS = 'attendanceMarks';

    protected $_resourceType = ResourceType::STUDENT_OTHER_SCHOOL_ATTENDANCE_RECORD;

    /**
     * @param Query $query
     * @return StudentOtherSchoolAttendanceRecord[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_OTHER_SCHOOL_ATTENDANCE_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentOtherSchoolAttendanceRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_OTHER_SCHOOL_ATTENDANCE_RECORD, $id);
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
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(\Arbor\Model\EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty('educationalInstitution', $educationalInstitution);
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->getProperty('year');
    }

    /**
     * @param string $year
     */
    public function setYear(string $year = null)
    {
        $this->setProperty('year', $year);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return int
     */
    public function getSessionsPossible()
    {
        return $this->getProperty('sessionsPossible');
    }

    /**
     * @param int $sessionsPossible
     */
    public function setSessionsPossible(int $sessionsPossible = null)
    {
        $this->setProperty('sessionsPossible', $sessionsPossible);
    }

    /**
     * @return int
     */
    public function getSessionsAttended()
    {
        return $this->getProperty('sessionsAttended');
    }

    /**
     * @param int $sessionsAttended
     */
    public function setSessionsAttended(int $sessionsAttended = null)
    {
        $this->setProperty('sessionsAttended', $sessionsAttended);
    }

    /**
     * @return int
     */
    public function getSessionsAuthorizedAbsence()
    {
        return $this->getProperty('sessionsAuthorizedAbsence');
    }

    /**
     * @param int $sessionsAuthorizedAbsence
     */
    public function setSessionsAuthorizedAbsence(int $sessionsAuthorizedAbsence = null)
    {
        $this->setProperty('sessionsAuthorizedAbsence', $sessionsAuthorizedAbsence);
    }

    /**
     * @return int
     */
    public function getSessionsUnauthorizedAbsence()
    {
        return $this->getProperty('sessionsUnauthorizedAbsence');
    }

    /**
     * @param int $sessionsUnauthorizedAbsence
     */
    public function setSessionsUnauthorizedAbsence(int $sessionsUnauthorizedAbsence = null)
    {
        $this->setProperty('sessionsUnauthorizedAbsence', $sessionsUnauthorizedAbsence);
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceStartDate()
    {
        return $this->getProperty('attendanceStartDate');
    }

    /**
     * @param \DateTime $attendanceStartDate
     */
    public function setAttendanceStartDate(\DateTime $attendanceStartDate = null)
    {
        $this->setProperty('attendanceStartDate', $attendanceStartDate);
    }

    /**
     * @return string
     */
    public function getAttendanceMarks()
    {
        return $this->getProperty('attendanceMarks');
    }

    /**
     * @param string $attendanceMarks
     */
    public function setAttendanceMarks(string $attendanceMarks = null)
    {
        $this->setProperty('attendanceMarks', $attendanceMarks);
    }
}
