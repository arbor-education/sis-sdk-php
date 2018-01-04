<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Department extends ModelBase
{
    const DEPARTMENT_CODE = 'departmentCode';

    const DEPARTMENT_NAME = 'departmentName';

    const IS_ACTIVE = 'isActive';

    protected $_resourceType = ResourceType::DEPARTMENT;

    /**
     * @param Query $query
     * @return Department[] | Collection
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

        $query->setResourceType(ResourceType::DEPARTMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Department
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DEPARTMENT, $id);
    }

    /**
     * @return string
     */
    public function getDepartmentCode()
    {
        return $this->getProperty('departmentCode');
    }

    /**
     * @param string $departmentCode
     */
    public function setDepartmentCode($departmentCode = null)
    {
        $this->setProperty('departmentCode', $departmentCode);
    }

    /**
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->getProperty('departmentName');
    }

    /**
     * @param string $departmentName
     */
    public function setDepartmentName($departmentName = null)
    {
        $this->setProperty('departmentName', $departmentName);
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->getProperty('isActive');
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive($isActive = null)
    {
        $this->setProperty('isActive', $isActive);
    }
}
