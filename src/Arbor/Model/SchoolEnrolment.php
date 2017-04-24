<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\Student;
use \Arbor\Model\UnenrolmentReason;

class SchoolEnrolment extends ModelBase
{
    const ACADEMIC_YEAR = 'academicYear';

    const STUDENT = 'student';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const UNENROLMENT_REASON = 'unenrolmentReason';

    const ENROLMENT_NOTES = 'enrolmentNotes';

    protected $_resourceType = ResourceType::SCHOOL_ENROLMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SchoolEnrolment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("SchoolEnrolment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SchoolEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::SCHOOL_ENROLMENT, $id);
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
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return UnenrolmentReason
     */
    public function getUnenrolmentReason()
    {
        return $this->getProperty("unenrolmentReason");
    }

    /**
     * @param UnenrolmentReason $unenrolmentReason
     */
    public function setUnenrolmentReason(UnenrolmentReason $unenrolmentReason = null)
    {
        $this->setProperty("unenrolmentReason", $unenrolmentReason);
    }

    /**
     * @return string
     */
    public function getEnrolmentNotes()
    {
        return $this->getProperty("enrolmentNotes");
    }

    /**
     * @param string $enrolmentNotes
     */
    public function setEnrolmentNotes($enrolmentNotes = null)
    {
        $this->setProperty("enrolmentNotes", $enrolmentNotes);
    }
}
