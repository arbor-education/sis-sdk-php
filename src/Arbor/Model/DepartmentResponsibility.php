<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DepartmentResponsibility extends ModelBase
{
    const DEPARTMENT_RESPONSIBILITY_TYPE = 'departmentResponsibilityType';

    const DEPARTMENT = 'department';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::DEPARTMENT_RESPONSIBILITY;

    /**
     * @param Query $query
     * @return DepartmentResponsibility[] | Collection
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

        $query->setResourceType(ResourceType::DEPARTMENT_RESPONSIBILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DepartmentResponsibility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DEPARTMENT_RESPONSIBILITY, $id);
    }

    /**
     * @return DepartmentResponsibilityType
     */
    public function getDepartmentResponsibilityType()
    {
        return $this->getProperty('departmentResponsibilityType');
    }

    /**
     * @param DepartmentResponsibilityType $departmentResponsibilityType
     */
    public function setDepartmentResponsibilityType(DepartmentResponsibilityType $departmentResponsibilityType = null)
    {
        $this->setProperty('departmentResponsibilityType', $departmentResponsibilityType);
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
