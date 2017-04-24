<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\User;
use \Arbor\Model\UserRole;
use \Arbor\Model\BusinessRoleAssignment;

class UserRoleAssignment extends ModelBase
{
    const USER = 'user';

    const USER_ROLE = 'userRole';

    const BUSINESS_ROLE_ASSIGNMENT = 'businessRoleAssignment';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::USER_ROLE_ASSIGNMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return UserRoleAssignment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UserRoleAssignment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UserRoleAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::USER_ROLE_ASSIGNMENT, $id);
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->getProperty("user");
    }

    /**
     * @param User $user
     */
    public function setUser(User $user = null)
    {
        $this->setProperty("user", $user);
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

    /**
     * @return BusinessRoleAssignment
     */
    public function getBusinessRoleAssignment()
    {
        return $this->getProperty("businessRoleAssignment");
    }

    /**
     * @param BusinessRoleAssignment $businessRoleAssignment
     */
    public function setBusinessRoleAssignment(BusinessRoleAssignment $businessRoleAssignment = null)
    {
        $this->setProperty("businessRoleAssignment", $businessRoleAssignment);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }
}
