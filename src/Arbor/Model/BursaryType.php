<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BursaryType extends ModelBase
{
    const NAME = 'name';

    const ACADEMIC_YEAR = 'academicYear';

    const STUDENT_FUNDING_TYPE = 'studentFundingType';

    const ALLOCATED_AMOUNT = 'allocatedAmount';

    protected $_resourceType = ResourceType::BURSARY_TYPE;

    /**
     * @param Query $query
     * @return BursaryType[] | Collection
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
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return StudentFundingType
     */
    public function getStudentFundingType()
    {
        return $this->getProperty('studentFundingType');
    }

    /**
     * @param StudentFundingType $studentFundingType
     */
    public function setStudentFundingType(StudentFundingType $studentFundingType = null)
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
    public function setAllocatedAmount($allocatedAmount = null)
    {
        $this->setProperty('allocatedAmount', $allocatedAmount);
    }

}
