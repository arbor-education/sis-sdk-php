<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UserRoleAssignment extends \ModelBase
{
    public const USER = 'user';

    public const USER_ROLE = 'userRole';

    public const BUSINESS_ROLE_ASSIGNMENT = 'businessRoleAssignment';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::USER_ROLE_ASSIGNMENT;

    /**
     * @param Query $query
     * @return UserRoleAssignment[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::USER_ROLE_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserRoleAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_ROLE_ASSIGNMENT, $id);
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param User $user
     */
    public function setUser(\User $user = null)
    {
        $this->setProperty('user', $user);
    }

    /**
     * @return UserRole
     */
    public function getUserRole()
    {
        return $this->getProperty('userRole');
    }

    /**
     * @param UserRole $userRole
     */
    public function setUserRole(\UserRole $userRole = null)
    {
        $this->setProperty('userRole', $userRole);
    }

    /**
     * @return BusinessRoleAssignment
     */
    public function getBusinessRoleAssignment()
    {
        return $this->getProperty('businessRoleAssignment');
    }

    /**
     * @param BusinessRoleAssignment $businessRoleAssignment
     */
    public function setBusinessRoleAssignment(\BusinessRoleAssignment $businessRoleAssignment = null)
    {
        $this->setProperty('businessRoleAssignment', $businessRoleAssignment);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }
}
