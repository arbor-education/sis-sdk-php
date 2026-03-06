<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UserRoleAssignment extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param \Arbor\Model\User $user
     */
    public function setUser(\Arbor\Model\User $user = null)
    {
        $this->setProperty('user', $user);
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

    /**
     * @return \Arbor\Model\BusinessRoleAssignment
     */
    public function getBusinessRoleAssignment()
    {
        return $this->getProperty('businessRoleAssignment');
    }

    /**
     * @param \Arbor\Model\BusinessRoleAssignment $businessRoleAssignment
     */
    public function setBusinessRoleAssignment(\Arbor\Model\BusinessRoleAssignment $businessRoleAssignment = null)
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
