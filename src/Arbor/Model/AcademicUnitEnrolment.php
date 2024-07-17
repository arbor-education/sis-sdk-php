<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicUnitEnrolment extends ModelBase
{
    public const ACADEMIC_UNIT = 'academicUnit';

    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const ENROLMENT_STATUS = 'enrolmentStatus';

    public const REPEAT_ENROLMENT = 'repeatEnrolment';

    public const ACADEMIC_UNIT_AUTOMATIC_ENROLMENT = 'academicUnitAutomaticEnrolment';

    public const ENROLMENT_DEPENDENCY = 'enrolmentDependency';

    public const STUDENT_ATTENDANCE_PATTERN_DEPENDENCY = 'studentAttendancePatternDependency';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicUnitEnrolment[] | Collection
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
     * @return \Arbor\Model\AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\Arbor\Model\AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
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
    public function setEnrolmentStatus(string $enrolmentStatus = null)
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
    public function setRepeatEnrolment(bool $repeatEnrolment = null)
    {
        $this->setProperty('repeatEnrolment', $repeatEnrolment);
    }

    /**
     * @return \Arbor\Model\AcademicUnitAutomaticEnrolment
     */
    public function getAcademicUnitAutomaticEnrolment()
    {
        return $this->getProperty('academicUnitAutomaticEnrolment');
    }

    /**
     * @param \Arbor\Model\AcademicUnitAutomaticEnrolment
     * $academicUnitAutomaticEnrolment
     */
    public function setAcademicUnitAutomaticEnrolment(\Arbor\Model\AcademicUnitAutomaticEnrolment $academicUnitAutomaticEnrolment = null)
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
    public function setEnrolmentDependency(\ModelBase $enrolmentDependency = null)
    {
        $this->setProperty('enrolmentDependency', $enrolmentDependency);
    }

    /**
     * @return \Arbor\Model\StudentAttendancePattern
     */
    public function getStudentAttendancePatternDependency()
    {
        return $this->getProperty('studentAttendancePatternDependency');
    }

    /**
     * @param \Arbor\Model\StudentAttendancePattern $studentAttendancePatternDependency
     */
    public function setStudentAttendancePatternDependency(\Arbor\Model\StudentAttendancePattern $studentAttendancePatternDependency = null)
    {
        $this->setProperty('studentAttendancePatternDependency', $studentAttendancePatternDependency);
    }
}
