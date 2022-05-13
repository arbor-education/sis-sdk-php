<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BusinessRole extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const BUSINESS_ROLE_NAME = 'businessRoleName';

    const USER_DEFINED_NAME = 'userDefinedName';

    const BUSINESS_ROLE_DESCRIPTION = 'businessRoleDescription';

    const USER_DEFINED_DESCRIPTION = 'userDefinedDescription';

    const INTERNAL_STAFF = 'internalStaff';

    const TEACHING_STAFF = 'teachingStaff';

    const BUSINESS_ROLE_CATEGORY = 'businessRoleCategory';

    const CUSTOMER_MANAGES_DEFAULT_USER_ROLES = 'customerManagesDefaultUserRoles';

    protected $_resourceType = ResourceType::BUSINESS_ROLE;

    /**
     * @param Query $query
     * @return BusinessRole[] | Collection
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

        $query->setResourceType(ResourceType::BUSINESS_ROLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BusinessRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BUSINESS_ROLE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getBusinessRoleName()
    {
        return $this->getProperty('businessRoleName');
    }

    /**
     * @param string $businessRoleName
     */
    public function setBusinessRoleName($businessRoleName = null)
    {
        $this->setProperty('businessRoleName', $businessRoleName);
    }

    /**
     * @return string
     */
    public function getUserDefinedName()
    {
        return $this->getProperty('userDefinedName');
    }

    /**
     * @param string $userDefinedName
     */
    public function setUserDefinedName($userDefinedName = null)
    {
        $this->setProperty('userDefinedName', $userDefinedName);
    }

    /**
     * @return string
     */
    public function getBusinessRoleDescription()
    {
        return $this->getProperty('businessRoleDescription');
    }

    /**
     * @param string $businessRoleDescription
     */
    public function setBusinessRoleDescription($businessRoleDescription = null)
    {
        $this->setProperty('businessRoleDescription', $businessRoleDescription);
    }

    /**
     * @return string
     */
    public function getUserDefinedDescription()
    {
        return $this->getProperty('userDefinedDescription');
    }

    /**
     * @param string $userDefinedDescription
     */
    public function setUserDefinedDescription($userDefinedDescription = null)
    {
        $this->setProperty('userDefinedDescription', $userDefinedDescription);
    }

    /**
     * @return bool
     */
    public function getInternalStaff()
    {
        return $this->getProperty('internalStaff');
    }

    /**
     * @param bool $internalStaff
     */
    public function setInternalStaff($internalStaff = null)
    {
        $this->setProperty('internalStaff', $internalStaff);
    }

    /**
     * @return bool
     */
    public function getTeachingStaff()
    {
        return $this->getProperty('teachingStaff');
    }

    /**
     * @param bool $teachingStaff
     */
    public function setTeachingStaff($teachingStaff = null)
    {
        $this->setProperty('teachingStaff', $teachingStaff);
    }

    /**
     * @return string
     */
    public function getBusinessRoleCategory()
    {
        return $this->getProperty('businessRoleCategory');
    }

    /**
     * @param string $businessRoleCategory
     */
    public function setBusinessRoleCategory($businessRoleCategory = null)
    {
        $this->setProperty('businessRoleCategory', $businessRoleCategory);
    }

    /**
     * @return bool
     */
    public function getCustomerManagesDefaultUserRoles()
    {
        return $this->getProperty('customerManagesDefaultUserRoles');
    }

    /**
     * @param bool $customerManagesDefaultUserRoles
     */
    public function setCustomerManagesDefaultUserRoles($customerManagesDefaultUserRoles = null)
    {
        $this->setProperty('customerManagesDefaultUserRoles', $customerManagesDefaultUserRoles);
    }

}
