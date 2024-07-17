<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicLevelMembership extends ModelBase
{
    public const ACADEMIC_LEVEL = 'academicLevel';

    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::ACADEMIC_LEVEL_MEMBERSHIP;

    /**
     * @param Query $query
     * @return AcademicLevelMembership[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_LEVEL_MEMBERSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicLevelMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_LEVEL_MEMBERSHIP, $id);
    }

    /**
     * @return \Arbor\Model\AcademicLevel
     */
    public function getAcademicLevel()
    {
        return $this->getProperty('academicLevel');
    }

    /**
     * @param \Arbor\Model\AcademicLevel $academicLevel
     */
    public function setAcademicLevel(\Arbor\Model\AcademicLevel $academicLevel = null)
    {
        $this->setProperty('academicLevel', $academicLevel);
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
}
