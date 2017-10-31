<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitDepartment extends ModelBase
{

    const DEPARTMENT = 'department';

    const ACADEMIC_UNIT = 'academicUnit';

    const START_DATE = 'startDate';

    const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_DEPARTMENT;

    /**
     * @param Query $query
     * @return AcademicUnitDepartment[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_DEPARTMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitDepartment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_DEPARTMENT, $id);
    }

    /**
     * @return Department
     */
    public function getDepartment()
    {
        return $this->getProperty('department');
    }

    /**
     * @param Department $department
     */
    public function setDepartment(Department $department = null)
    {
        $this->setProperty('department', $department);
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
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }


}
