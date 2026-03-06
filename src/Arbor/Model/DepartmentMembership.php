<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DepartmentMembership extends ModelBase
{
    public const DEPARTMENT_RESPONSIBILITY = 'departmentResponsibility';

    public const DEPARTMENT = 'department';

    public const STAFF = 'staff';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::DEPARTMENT_MEMBERSHIP;

    /**
     * @param Query $query
     * @return DepartmentMembership[] | Collection
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
     * @return \Arbor\Model\DepartmentResponsibility
     */
    public function getDepartmentResponsibility()
    {
        return $this->getProperty('departmentResponsibility');
    }

    /**
     * @param \Arbor\Model\DepartmentResponsibility $departmentResponsibility
     */
    public function setDepartmentResponsibility(\Arbor\Model\DepartmentResponsibility $departmentResponsibility = null)
    {
        $this->setProperty('departmentResponsibility', $departmentResponsibility);
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
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
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
