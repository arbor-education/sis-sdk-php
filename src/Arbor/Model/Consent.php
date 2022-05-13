<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Consent extends ModelBase
{
    const STUDENT = 'student';

    const CONSENT_TYPE = 'consentType';

    const RELATED = 'related';

    const REQUESTOR = 'requestor';

    const REQUESTED_DATETIME = 'requestedDatetime';

    const REJECTED_DATETIME = 'rejectedDatetime';

    const CONSENTED_DATETIME = 'consentedDatetime';

    const RESPONDEE = 'respondee';

    protected $_resourceType = ResourceType::CONSENT;

    /**
     * @param Query $query
     * @return Consent[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::CONSENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Consent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CONSENT, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return ConsentType
     */
    public function getConsentType()
    {
        return $this->getProperty('consentType');
    }

    /**
     * @param ConsentType $consentType
     */
    public function setConsentType(ConsentType $consentType = null)
    {
        $this->setProperty('consentType', $consentType);
    }

    /**
     * @return ModelBase
     */
    public function getRelated()
    {
        return $this->getProperty('related');
    }

    /**
     * @param ModelBase $related
     */
    public function setRelated(ModelBase $related = null)
    {
        $this->setProperty('related', $related);
    }

    /**
     * @return Staff
     */
    public function getRequestor()
    {
        return $this->getProperty('requestor');
    }

    /**
     * @param Staff $requestor
     */
    public function setRequestor(Staff $requestor = null)
    {
        $this->setProperty('requestor', $requestor);
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDatetime()
    {
        return $this->getProperty('requestedDatetime');
    }

    /**
     * @param \DateTime $requestedDatetime
     */
    public function setRequestedDatetime(\DateTime $requestedDatetime = null)
    {
        $this->setProperty('requestedDatetime', $requestedDatetime);
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
     * @return \DateTime
     */
    public function getConsentedDatetime()
    {
        return $this->getProperty('consentedDatetime');
    }

    /**
     * @param \DateTime $consentedDatetime
     */
    public function setConsentedDatetime(\DateTime $consentedDatetime = null)
    {
        $this->setProperty('consentedDatetime', $consentedDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getRespondee()
    {
        return $this->getProperty('respondee');
    }

    /**
     * @param ModelBase $respondee
     */
    public function setRespondee(ModelBase $respondee = null)
    {
        $this->setProperty('respondee', $respondee);
    }

}
