<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitEnrolment extends ModelBase
{
    const ACADEMIC_UNIT = 'academicUnit';

    const STUDENT = 'student';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const ENROLMENT_STATUS = 'enrolmentStatus';

    const REPEAT_ENROLMENT = 'repeatEnrolment';

    const ACADEMIC_UNIT_AUTOMATIC_ENROLMENT = 'academicUnitAutomaticEnrolment';

    const ENROLMENT_DEPENDENCY = 'enrolmentDependency';

    const STUDENT_ATTENDANCE_PATTERN_DEPENDENCY = 'studentAttendancePatternDependency';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicUnitEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_ENROLMENT, $id);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
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
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getEnrolmentStatus()
    {
        return $this->getProperty('enrolmentStatus');
    }

    /**
     * @param string $enrolmentStatus
     */
    public function setEnrolmentStatus($enrolmentStatus = null)
    {
        $this->setProperty('enrolmentStatus', $enrolmentStatus);
    }

    /**
     * @return bool
     */
    public function getRepeatEnrolment()
    {
        return $this->getProperty('repeatEnrolment');
    }

    /**
     * @param bool $repeatEnrolment
     */
    public function setRepeatEnrolment($repeatEnrolment = null)
    {
        $this->setProperty('repeatEnrolment', $repeatEnrolment);
    }

    /**
     * @return AcademicUnitAutomaticEnrolment
     */
    public function getAcademicUnitAutomaticEnrolment()
    {
        return $this->getProperty('academicUnitAutomaticEnrolment');
    }

    /**
     * @param AcademicUnitAutomaticEnrolment $academicUnitAutomaticEnrolment
     */
    public function setAcademicUnitAutomaticEnrolment(AcademicUnitAutomaticEnrolment $academicUnitAutomaticEnrolment = null)
    {
        $this->setProperty('academicUnitAutomaticEnrolment', $academicUnitAutomaticEnrolment);
    }

    /**
     * @return ModelBase
     */
    public function getEnrolmentDependency()
    {
        return $this->getProperty('enrolmentDependency');
    }

    /**
     * @param ModelBase $enrolmentDependency
     */
    public function setEnrolmentDependency(ModelBase $enrolmentDependency = null)
    {
        $this->setProperty('enrolmentDependency', $enrolmentDependency);
    }

    /**
     * @return StudentAttendancePattern
     */
    public function getStudentAttendancePatternDependency()
    {
        return $this->getProperty('studentAttendancePatternDependency');
    }

    /**
     * @param StudentAttendancePattern $studentAttendancePatternDependency
     */
    public function setStudentAttendancePatternDependency(StudentAttendancePattern $studentAttendancePatternDependency = null)
    {
        $this->setProperty('studentAttendancePatternDependency', $studentAttendancePatternDependency);
    }

}
