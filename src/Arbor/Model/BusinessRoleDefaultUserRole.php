<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BusinessRole;
use \Arbor\Model\UserRole;

class BusinessRoleDefaultUserRole extends ModelBase
{
    const BUSINESS_ROLE = 'businessRole';

    const USER_ROLE = 'userRole';

    protected $_resourceType = ResourceType::BUSINESS_ROLE_DEFAULT_USER_ROLE;

    /**
     * @param \Arbor\Query\Query $query
     * @return BusinessRoleDefaultUserRole[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("BusinessRoleDefaultUserRole");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BusinessRoleDefaultUserRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::BUSINESS_ROLE_DEFAULT_USER_ROLE, $id);
    }

    /**
     * @return BusinessRole
     */
    public function getBusinessRole()
    {
        return $this->getProperty("businessRole");
    }

    /**
     * @param BusinessRole $businessRole
     */
    public function setBusinessRole(BusinessRole $businessRole = null)
    {
        $this->setProperty("businessRole", $businessRole);
    }

    /**
     * @return UserRole
     */
    public function getUserRole()
    {
        return $this->getProperty("userRole");
    }

    /**
     * @param UserRole $userRole
     */
    public function setUserRole(UserRole $userRole = null)
    {
        $this->setProperty("userRole", $userRole);
    }
}
