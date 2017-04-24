<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BusinessRole;
use \Arbor\Model\Title;
use \Arbor\Model\Staff;

class NewUserRequest extends ModelBase
{
    const BUSINESS_ROLE = 'businessRole';

    const TITLE = 'title';

    const FIRST_NAME = 'firstName';

    const LAST_NAME = 'lastName';

    const EMAIL = 'email';

    const MOBILE_NUMBER = 'mobileNumber';

    const APPROVED_DATETIME = 'approvedDatetime';

    const REJECTED_DATETIME = 'rejectedDatetime';

    const SELECTED_APPROVER_STAFF = 'selectedApproverStaff';

    const APPROVERS_EXIST = 'approversExist';

    protected $_resourceType = ResourceType::NEW_USER_REQUEST;

    /**
     * @param \Arbor\Query\Query $query
     * @return NewUserRequest[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("NewUserRequest");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return NewUserRequest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::NEW_USER_REQUEST, $id);
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
     * @return Title
     */
    public function getTitle()
    {
        return $this->getProperty("title");
    }

    /**
     * @param Title $title
     */
    public function setTitle(Title $title = null)
    {
        $this->setProperty("title", $title);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty("firstName");
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName = null)
    {
        $this->setProperty("firstName", $firstName);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty("lastName");
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName = null)
    {
        $this->setProperty("lastName", $lastName);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getProperty("email");
    }

    /**
     * @param string $email
     */
    public function setEmail($email = null)
    {
        $this->setProperty("email", $email);
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->getProperty("mobileNumber");
    }

    /**
     * @param string $mobileNumber
     */
    public function setMobileNumber($mobileNumber = null)
    {
        $this->setProperty("mobileNumber", $mobileNumber);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty("approvedDatetime");
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty("approvedDatetime", $approvedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRejectedDatetime()
    {
        return $this->getProperty("rejectedDatetime");
    }

    /**
     * @param \DateTime $rejectedDatetime
     */
    public function setRejectedDatetime(\DateTime $rejectedDatetime = null)
    {
        $this->setProperty("rejectedDatetime", $rejectedDatetime);
    }

    /**
     * @return Staff
     */
    public function getSelectedApproverStaff()
    {
        return $this->getProperty("selectedApproverStaff");
    }

    /**
     * @param Staff $selectedApproverStaff
     */
    public function setSelectedApproverStaff(Staff $selectedApproverStaff = null)
    {
        $this->setProperty("selectedApproverStaff", $selectedApproverStaff);
    }

    /**
     * @return bool
     */
    public function getApproversExist()
    {
        return $this->getProperty("approversExist");
    }

    /**
     * @param bool $approversExist
     */
    public function setApproversExist($approversExist = null)
    {
        $this->setProperty("approversExist", $approversExist);
    }
}
