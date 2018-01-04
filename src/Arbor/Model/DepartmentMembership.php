<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DepartmentMembership extends ModelBase
{
    const DEPARTMENT_RESPONSIBILITY = 'departmentResponsibility';

    const DEPARTMENT = 'department';

    const STAFF = 'staff';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::DEPARTMENT_MEMBERSHIP;

    /**
     * @param Query $query
     * @return DepartmentMembership[] | Collection
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

        $query->setResourceType(ResourceType::DEPARTMENT_MEMBERSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DepartmentMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DEPARTMENT_MEMBERSHIP, $id);
    }

    /**
     * @return DepartmentResponsibility
     */
    public function getDepartmentResponsibility()
    {
        return $this->getProperty('departmentResponsibility');
    }

    /**
     * @param DepartmentResponsibility $departmentResponsibility
     */
    public function setDepartmentResponsibility(DepartmentResponsibility $departmentResponsibility = null)
    {
        $this->setProperty('departmentResponsibility', $departmentResponsibility);
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
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
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
