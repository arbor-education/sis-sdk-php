<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BusinessRoleAssignment extends ModelBase
{
    public const BUSINESS_ROLE = 'businessRole';

    public const STAFF_CONTRACT_POST = 'staffContractPost';

    public const PERSON = 'person';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::BUSINESS_ROLE_ASSIGNMENT;

    /**
     * @param Query $query
     * @return BusinessRoleAssignment[] | Collection
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

        $query->setResourceType(ResourceType::BUSINESS_ROLE_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BusinessRoleAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BUSINESS_ROLE_ASSIGNMENT, $id);
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
     * @return \Arbor\Model\StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty('staffContractPost');
    }

    /**
     * @param \Arbor\Model\StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(\Arbor\Model\StaffContractPost $staffContractPost = null)
    {
        $this->setProperty('staffContractPost', $staffContractPost);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
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
