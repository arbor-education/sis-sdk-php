<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DepartmentResponsibility extends ModelBase
{
    public const DEPARTMENT_RESPONSIBILITY_TYPE = 'departmentResponsibilityType';

    public const DEPARTMENT = 'department';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::DEPARTMENT_RESPONSIBILITY;

    /**
     * @param Query $query
     * @return DepartmentResponsibility[] | Collection
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
     * @return \Arbor\Model\DepartmentResponsibilityType
     */
    public function getDepartmentResponsibilityType()
    {
        return $this->getProperty('departmentResponsibilityType');
    }

    /**
     * @param \Arbor\Model\DepartmentResponsibilityType $departmentResponsibilityType
     */
    public function setDepartmentResponsibilityType(\Arbor\Model\DepartmentResponsibilityType $departmentResponsibilityType = null)
    {
        $this->setProperty('departmentResponsibilityType', $departmentResponsibilityType);
    }

    /**
     * @return \Arbor\Model\Department
     */
    public function getDepartment()
    {
        return $this->getProperty('department');
    }

    /**
     * @param \Arbor\Model\Department $department
     */
    public function setDepartment(\Arbor\Model\Department $department = null)
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
