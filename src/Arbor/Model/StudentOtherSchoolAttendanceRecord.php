<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\EducationalInstitution;
use \Arbor\Model\AcademicYear;

class StudentOtherSchoolAttendanceRecord extends ModelBase
{

    const STUDENT = 'student';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const YEAR = 'year';

    const ACADEMIC_YEAR = 'academicYear';

    const SESSIONS_POSSIBLE = 'sessionsPossible';

    const SESSIONS_ATTENDED = 'sessionsAttended';

    const SESSIONS_AUTHORIZED_ABSENCE = 'sessionsAuthorizedAbsence';

    const SESSIONS_UNAUTHORIZED_ABSENCE = 'sessionsUnauthorizedAbsence';

    const ATTENDANCE_START_DATE = 'attendanceStartDate';

    const ATTENDANCE_MARKS = 'attendanceMarks';

    protected $_resourceType = ResourceType::STUDENT_OTHER_SCHOOL_ATTENDANCE_RECORD;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentOtherSchoolAttendanceRecord[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentOtherSchoolAttendanceRecord");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentOtherSchoolAttendanceRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_OTHER_SCHOOL_ATTENDANCE_RECORD, $id);
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
     * @return EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty("educationalInstitution");
    }

    /**
     * @param EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty("educationalInstitution", $educationalInstitution);
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->getProperty("year");
    }

    /**
     * @param string $year
     */
    public function setYear($year = null)
    {
        $this->setProperty("year", $year);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
    }

    /**
     * @return int
     */
    public function getSessionsPossible()
    {
        return $this->getProperty("sessionsPossible");
    }

    /**
     * @param int $sessionsPossible
     */
    public function setSessionsPossible($sessionsPossible = null)
    {
        $this->setProperty("sessionsPossible", $sessionsPossible);
    }

    /**
     * @return int
     */
    public function getSessionsAttended()
    {
        return $this->getProperty("sessionsAttended");
    }

    /**
     * @param int $sessionsAttended
     */
    public function setSessionsAttended($sessionsAttended = null)
    {
        $this->setProperty("sessionsAttended", $sessionsAttended);
    }

    /**
     * @return int
     */
    public function getSessionsAuthorizedAbsence()
    {
        return $this->getProperty("sessionsAuthorizedAbsence");
    }

    /**
     * @param int $sessionsAuthorizedAbsence
     */
    public function setSessionsAuthorizedAbsence($sessionsAuthorizedAbsence = null)
    {
        $this->setProperty("sessionsAuthorizedAbsence", $sessionsAuthorizedAbsence);
    }

    /**
     * @return int
     */
    public function getSessionsUnauthorizedAbsence()
    {
        return $this->getProperty("sessionsUnauthorizedAbsence");
    }

    /**
     * @param int $sessionsUnauthorizedAbsence
     */
    public function setSessionsUnauthorizedAbsence($sessionsUnauthorizedAbsence = null)
    {
        $this->setProperty("sessionsUnauthorizedAbsence", $sessionsUnauthorizedAbsence);
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceStartDate()
    {
        return $this->getProperty("attendanceStartDate");
    }

    /**
     * @param \DateTime $attendanceStartDate
     */
    public function setAttendanceStartDate(\DateTime $attendanceStartDate = null)
    {
        $this->setProperty("attendanceStartDate", $attendanceStartDate);
    }

    /**
     * @return string
     */
    public function getAttendanceMarks()
    {
        return $this->getProperty("attendanceMarks");
    }

    /**
     * @param string $attendanceMarks
     */
    public function setAttendanceMarks($attendanceMarks = null)
    {
        $this->setProperty("attendanceMarks", $attendanceMarks);
    }


}
