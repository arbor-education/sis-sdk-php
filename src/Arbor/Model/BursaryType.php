<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BursaryType extends ModelBase
{
    public const NAME = 'name';

    public const ACADEMIC_YEAR = 'academicYear';

    public const STUDENT_FUNDING_TYPE = 'studentFundingType';

    public const ALLOCATED_AMOUNT = 'allocatedAmount';

    protected $_resourceType = ResourceType::BURSARY_TYPE;

    /**
     * @param Query $query
     * @return BursaryType[] | Collection
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

        $query->setResourceType(ResourceType::BURSARY_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BursaryType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BURSARY_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
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
     * @return \Arbor\Model\StudentFundingType
     */
    public function getStudentFundingType()
    {
        return $this->getProperty('studentFundingType');
    }

    /**
     * @param \Arbor\Model\StudentFundingType $studentFundingType
     */
    public function setStudentFundingType(\Arbor\Model\StudentFundingType $studentFundingType = null)
    {
        $this->setProperty('studentFundingType', $studentFundingType);
    }

    /**
     * @return string
     */
    public function getAllocatedAmount()
    {
        return $this->getProperty('allocatedAmount');
    }

    /**
     * @param string $allocatedAmount
     */
    public function setAllocatedAmount(string $allocatedAmount = null)
    {
        $this->setProperty('allocatedAmount', $allocatedAmount);
    }
}
