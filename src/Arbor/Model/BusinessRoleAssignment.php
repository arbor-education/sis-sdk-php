<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BusinessRole;
use \Arbor\Model\StaffContractPost;

class BusinessRoleAssignment extends ModelBase
{
    const BUSINESS_ROLE = 'businessRole';

    const STAFF_CONTRACT_POST = 'staffContractPost';

    const PERSON = 'person';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::BUSINESS_ROLE_ASSIGNMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return BusinessRoleAssignment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("BusinessRoleAssignment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BusinessRoleAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::BUSINESS_ROLE_ASSIGNMENT, $id);
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
     * @return StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty("staffContractPost");
    }

    /**
     * @param StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(StaffContractPost $staffContractPost = null)
    {
        $this->setProperty("staffContractPost", $staffContractPost);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }
}
