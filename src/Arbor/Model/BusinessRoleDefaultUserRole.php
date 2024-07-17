<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BusinessRoleDefaultUserRole extends ModelBase
{
    public const BUSINESS_ROLE = 'businessRole';

    public const USER_ROLE = 'userRole';

    protected $_resourceType = ResourceType::BUSINESS_ROLE_DEFAULT_USER_ROLE;

    /**
     * @param Query $query
     * @return BusinessRoleDefaultUserRole[] | Collection
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

        $query->setResourceType(ResourceType::BUSINESS_ROLE_DEFAULT_USER_ROLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BusinessRoleDefaultUserRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BUSINESS_ROLE_DEFAULT_USER_ROLE, $id);
    }

    /**
     * @return \Arbor\Model\BusinessRole
     */
    public function getBusinessRole()
    {
        return $this->getProperty('businessRole');
    }

    /**
     * @param \Arbor\Model\BusinessRole $businessRole
     */
    public function setBusinessRole(\Arbor\Model\BusinessRole $businessRole = null)
    {
        $this->setProperty('businessRole', $businessRole);
    }

    /**
     * @return \Arbor\Model\UserRole
     */
    public function getUserRole()
    {
        return $this->getProperty('userRole');
    }

    /**
     * @param \Arbor\Model\UserRole $userRole
     */
    public function setUserRole(\Arbor\Model\UserRole $userRole = null)
    {
        $this->setProperty('userRole', $userRole);
    }
}
