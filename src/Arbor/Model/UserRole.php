<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UserRole extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const SECTION_NAME = 'sectionName';

    public const FUNCTION_NAME = 'functionName';

    public const PERMISSION_NAME = 'permissionName';

    public const PERMISSION_CATEGORY = 'permissionCategory';

    public const DESCRIPTION = 'description';

    public const IS_EXTERNAL_ADMINISTRATOR_ROLE = 'isExternalAdministratorRole';

    protected $_resourceType = ResourceType::USER_ROLE;

    /**
     * @param Query $query
     * @return UserRole[] | Collection
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

        $query->setResourceType(ResourceType::USER_ROLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_ROLE, $id);
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
    public function setCode(string $code = null)
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
    public function setActive(bool $active = null)
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
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getSectionName()
    {
        return $this->getProperty('sectionName');
    }

    /**
     * @param string $sectionName
     */
    public function setSectionName(string $sectionName = null)
    {
        $this->setProperty('sectionName', $sectionName);
    }

    /**
     * @return string
     */
    public function getFunctionName()
    {
        return $this->getProperty('functionName');
    }

    /**
     * @param string $functionName
     */
    public function setFunctionName(string $functionName = null)
    {
        $this->setProperty('functionName', $functionName);
    }

    /**
     * @return string
     */
    public function getPermissionName()
    {
        return $this->getProperty('permissionName');
    }

    /**
     * @param string $permissionName
     */
    public function setPermissionName(string $permissionName = null)
    {
        $this->setProperty('permissionName', $permissionName);
    }

    /**
     * @return string
     */
    public function getPermissionCategory()
    {
        return $this->getProperty('permissionCategory');
    }

    /**
     * @param string $permissionCategory
     */
    public function setPermissionCategory(string $permissionCategory = null)
    {
        $this->setProperty('permissionCategory', $permissionCategory);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return bool
     */
    public function getIsExternalAdministratorRole()
    {
        return $this->getProperty('isExternalAdministratorRole');
    }

    /**
     * @param bool $isExternalAdministratorRole
     */
    public function setIsExternalAdministratorRole(bool $isExternalAdministratorRole = null)
    {
        $this->setProperty('isExternalAdministratorRole', $isExternalAdministratorRole);
    }
}
