<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CheckType;
use \Arbor\Model\CheckClearanceLevel;
use \Arbor\Model\Staff;

class PersonCheck extends ModelBase
{

    const PERSON = 'person';

    const CHECK_TYPE = 'checkType';

    const CHECK_CLEARANCE_LEVEL = 'checkClearanceLevel';

    const REQUESTED_DATE = 'requestedDate';

    const RETURNED_DATE = 'returnedDate';

    const EXPIRY_DATE = 'expiryDate';

    const REFERENCE_NUMBER = 'referenceNumber';

    const AUTHENTICATED_DATE = 'authenticatedDate';

    const AUTHENTICATED_BY_STAFF = 'authenticatedByStaff';

    const EVIDENCE_RECORDED_DATE = 'evidenceRecordedDate';

    const COMMENT = 'comment';

    protected $_resourceType = ResourceType::PERSON_CHECK;

    /**
     * @param \Arbor\Query\Query $query
     * @return PersonCheck[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("PersonCheck");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PersonCheck
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::PERSON_CHECK, $id);
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
     * @return CheckType
     */
    public function getCheckType()
    {
        return $this->getProperty("checkType");
    }

    /**
     * @param CheckType $checkType
     */
    public function setCheckType(CheckType $checkType = null)
    {
        $this->setProperty("checkType", $checkType);
    }

    /**
     * @return CheckClearanceLevel
     */
    public function getCheckClearanceLevel()
    {
        return $this->getProperty("checkClearanceLevel");
    }

    /**
     * @param CheckClearanceLevel $checkClearanceLevel
     */
    public function setCheckClearanceLevel(CheckClearanceLevel $checkClearanceLevel = null)
    {
        $this->setProperty("checkClearanceLevel", $checkClearanceLevel);
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDate()
    {
        return $this->getProperty("requestedDate");
    }

    /**
     * @param \DateTime $requestedDate
     */
    public function setRequestedDate(\DateTime $requestedDate = null)
    {
        $this->setProperty("requestedDate", $requestedDate);
    }

    /**
     * @return \DateTime
     */
    public function getReturnedDate()
    {
        return $this->getProperty("returnedDate");
    }

    /**
     * @param \DateTime $returnedDate
     */
    public function setReturnedDate(\DateTime $returnedDate = null)
    {
        $this->setProperty("returnedDate", $returnedDate);
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->getProperty("expiryDate");
    }

    /**
     * @param \DateTime $expiryDate
     */
    public function setExpiryDate(\DateTime $expiryDate = null)
    {
        $this->setProperty("expiryDate", $expiryDate);
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->getProperty("referenceNumber");
    }

    /**
     * @param string $referenceNumber
     */
    public function setReferenceNumber($referenceNumber = null)
    {
        $this->setProperty("referenceNumber", $referenceNumber);
    }

    /**
     * @return \DateTime
     */
    public function getAuthenticatedDate()
    {
        return $this->getProperty("authenticatedDate");
    }

    /**
     * @param \DateTime $authenticatedDate
     */
    public function setAuthenticatedDate(\DateTime $authenticatedDate = null)
    {
        $this->setProperty("authenticatedDate", $authenticatedDate);
    }

    /**
     * @return Staff
     */
    public function getAuthenticatedByStaff()
    {
        return $this->getProperty("authenticatedByStaff");
    }

    /**
     * @param Staff $authenticatedByStaff
     */
    public function setAuthenticatedByStaff(Staff $authenticatedByStaff = null)
    {
        $this->setProperty("authenticatedByStaff", $authenticatedByStaff);
    }

    /**
     * @return \DateTime
     */
    public function getEvidenceRecordedDate()
    {
        return $this->getProperty("evidenceRecordedDate");
    }

    /**
     * @param \DateTime $evidenceRecordedDate
     */
    public function setEvidenceRecordedDate(\DateTime $evidenceRecordedDate = null)
    {
        $this->setProperty("evidenceRecordedDate", $evidenceRecordedDate);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->getProperty("comment");
    }

    /**
     * @param string $comment
     */
    public function setComment($comment = null)
    {
        $this->setProperty("comment", $comment);
    }


}
