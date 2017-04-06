<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class UserRole extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const SECTION_NAME = 'sectionName';

    const FUNCTION_NAME = 'functionName';

    const PERMISSION_NAME = 'permissionName';

    const DESCRIPTION = 'description';

    protected $_resourceType = ResourceType::USER_ROLE;

    /**
     * @param \Arbor\Query\Query $query
     * @return UserRole[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UserRole");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UserRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::USER_ROLE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getSectionName()
    {
        return $this->getProperty("sectionName");
    }

    /**
     * @param string $sectionName
     */
    public function setSectionName($sectionName = null)
    {
        $this->setProperty("sectionName", $sectionName);
    }

    /**
     * @return string
     */
    public function getFunctionName()
    {
        return $this->getProperty("functionName");
    }

    /**
     * @param string $functionName
     */
    public function setFunctionName($functionName = null)
    {
        $this->setProperty("functionName", $functionName);
    }

    /**
     * @return string
     */
    public function getPermissionName()
    {
        return $this->getProperty("permissionName");
    }

    /**
     * @param string $permissionName
     */
    public function setPermissionName($permissionName = null)
    {
        $this->setProperty("permissionName", $permissionName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }


}
