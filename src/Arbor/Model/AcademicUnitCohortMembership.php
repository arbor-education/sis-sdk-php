<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitCohortMembership extends ModelBase
{

    const ACADEMIC_UNIT_COHORT = 'academicUnitCohort';

    const STUDENT = 'student';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_COHORT_MEMBERSHIP;

    /**
     * @param Query $query
     * @return AcademicUnitCohortMembership[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_COHORT_MEMBERSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitCohortMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_COHORT_MEMBERSHIP, $id);
    }

    /**
     * @return AcademicUnitCohort
     */
    public function getAcademicUnitCohort()
    {
        return $this->getProperty('academicUnitCohort');
    }

    /**
     * @param AcademicUnitCohort $academicUnitCohort
     */
    public function setAcademicUnitCohort(AcademicUnitCohort $academicUnitCohort = null)
    {
        $this->setProperty('academicUnitCohort', $academicUnitCohort);
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


}
