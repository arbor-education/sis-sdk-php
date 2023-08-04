<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PersonCheck extends \ModelBase
{
    public const PERSON = 'person';

    public const CHECK_TYPE = 'checkType';

    public const CHECK_CLEARANCE_LEVEL = 'checkClearanceLevel';

    public const REQUESTED_DATE = 'requestedDate';

    public const RETURNED_DATE = 'returnedDate';

    public const EXPIRY_DATE = 'expiryDate';

    public const REFERENCE_NUMBER = 'referenceNumber';

    public const AUTHENTICATED_DATE = 'authenticatedDate';

    public const AUTHENTICATED_BY_STAFF = 'authenticatedByStaff';

    public const EVIDENCE_RECORDED_DATE = 'evidenceRecordedDate';

    public const COMMENT = 'comment';

    protected $_resourceType = ResourceType::PERSON_CHECK;

    /**
     * @param Query $query
     * @return PersonCheck[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_CHECK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonCheck
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_CHECK, $id);
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
     * @return CheckType
     */
    public function getCheckType()
    {
        return $this->getProperty('checkType');
    }

    /**
     * @param CheckType $checkType
     */
    public function setCheckType(\CheckType $checkType = null)
    {
        $this->setProperty('checkType', $checkType);
    }

    /**
     * @return CheckClearanceLevel
     */
    public function getCheckClearanceLevel()
    {
        return $this->getProperty('checkClearanceLevel');
    }

    /**
     * @param CheckClearanceLevel $checkClearanceLevel
     */
    public function setCheckClearanceLevel(\CheckClearanceLevel $checkClearanceLevel = null)
    {
        $this->setProperty('checkClearanceLevel', $checkClearanceLevel);
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDate()
    {
        return $this->getProperty('requestedDate');
    }

    /**
     * @param \DateTime $requestedDate
     */
    public function setRequestedDate(\DateTime $requestedDate = null)
    {
        $this->setProperty('requestedDate', $requestedDate);
    }

    /**
     * @return \DateTime
     */
    public function getReturnedDate()
    {
        return $this->getProperty('returnedDate');
    }

    /**
     * @param \DateTime $returnedDate
     */
    public function setReturnedDate(\DateTime $returnedDate = null)
    {
        $this->setProperty('returnedDate', $returnedDate);
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->getProperty('expiryDate');
    }

    /**
     * @param \DateTime $expiryDate
     */
    public function setExpiryDate(\DateTime $expiryDate = null)
    {
        $this->setProperty('expiryDate', $expiryDate);
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->getProperty('referenceNumber');
    }

    /**
     * @param string $referenceNumber
     */
    public function setReferenceNumber(string $referenceNumber = null)
    {
        $this->setProperty('referenceNumber', $referenceNumber);
    }

    /**
     * @return \DateTime
     */
    public function getAuthenticatedDate()
    {
        return $this->getProperty('authenticatedDate');
    }

    /**
     * @param \DateTime $authenticatedDate
     */
    public function setAuthenticatedDate(\DateTime $authenticatedDate = null)
    {
        $this->setProperty('authenticatedDate', $authenticatedDate);
    }

    /**
     * @return Staff
     */
    public function getAuthenticatedByStaff()
    {
        return $this->getProperty('authenticatedByStaff');
    }

    /**
     * @param Staff $authenticatedByStaff
     */
    public function setAuthenticatedByStaff(\Staff $authenticatedByStaff = null)
    {
        $this->setProperty('authenticatedByStaff', $authenticatedByStaff);
    }

    /**
     * @return \DateTime
     */
    public function getEvidenceRecordedDate()
    {
        return $this->getProperty('evidenceRecordedDate');
    }

    /**
     * @param \DateTime $evidenceRecordedDate
     */
    public function setEvidenceRecordedDate(\DateTime $evidenceRecordedDate = null)
    {
        $this->setProperty('evidenceRecordedDate', $evidenceRecordedDate);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->getProperty('comment');
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment = null)
    {
        $this->setProperty('comment', $comment);
    }
}
