<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class NewUserRequest extends ModelBase
{

    public const BUSINESS_ROLE = 'businessRole';

    public const TITLE = 'title';

    public const FIRST_NAME = 'firstName';

    public const LAST_NAME = 'lastName';

    public const EMAIL = 'email';

    public const MOBILE_NUMBER = 'mobileNumber';

    public const APPROVED_DATETIME = 'approvedDatetime';

    public const REJECTED_DATETIME = 'rejectedDatetime';

    public const SELECTED_APPROVER_STAFF = 'selectedApproverStaff';

    public const APPROVERS_EXIST = 'approversExist';

    protected $_resourceType = ResourceType::NEW_USER_REQUEST;

    /**
     * @param Query $query
     * @return NewUserRequest[] | Collection
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

        $query->setResourceType(ResourceType::NEW_USER_REQUEST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return NewUserRequest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NEW_USER_REQUEST, $id);
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
     * @return \Arbor\Model\Title
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param \Arbor\Model\Title $title
     */
    public function setTitle(\Arbor\Model\Title $title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty('firstName');
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName = null)
    {
        $this->setProperty('firstName', $firstName);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty('lastName');
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName = null)
    {
        $this->setProperty('lastName', $lastName);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getProperty('email');
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email = null)
    {
        $this->setProperty('email', $email);
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->getProperty('mobileNumber');
    }

    /**
     * @param string $mobileNumber
     */
    public function setMobileNumber(string $mobileNumber = null)
    {
        $this->setProperty('mobileNumber', $mobileNumber);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty('approvedDatetime');
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty('approvedDatetime', $approvedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRejectedDatetime()
    {
        return $this->getProperty('rejectedDatetime');
    }

    /**
     * @param \DateTime $rejectedDatetime
     */
    public function setRejectedDatetime(\DateTime $rejectedDatetime = null)
    {
        $this->setProperty('rejectedDatetime', $rejectedDatetime);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getSelectedApproverStaff()
    {
        return $this->getProperty('selectedApproverStaff');
    }

    /**
     * @param \Arbor\Model\Staff $selectedApproverStaff
     */
    public function setSelectedApproverStaff(\Arbor\Model\Staff $selectedApproverStaff = null)
    {
        $this->setProperty('selectedApproverStaff', $selectedApproverStaff);
    }

    /**
     * @return bool
     */
    public function getApproversExist()
    {
        return $this->getProperty('approversExist');
    }

    /**
     * @param bool $approversExist
     */
    public function setApproversExist(bool $approversExist = null)
    {
        $this->setProperty('approversExist', $approversExist);
    }

}
