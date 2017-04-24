<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Candidate;
use \Arbor\Model\QualificationAward;
use \Arbor\Model\QualificationAvailabilityInstance;

class CandidateRegistration extends ModelBase
{
    const CANDIDATE = 'candidate';

    const QUALIFICATION_AWARD = 'qualificationAward';

    const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    const REGISTRATION_NUMBER = 'registrationNumber';

    const REGISTRATION_REQUESTED_DATETIME = 'registrationRequestedDatetime';

    const REGISTRATION_CONFIRMED_DATETIME = 'registrationConfirmedDatetime';

    const RESPONSE_RECEIVED_DATETIME = 'responseReceivedDatetime';

    const RESPONSE_MESSAGE = 'responseMessage';

    protected $_resourceType = ResourceType::CANDIDATE_REGISTRATION;

    /**
     * @param \Arbor\Query\Query $query
     * @return CandidateRegistration[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CandidateRegistration");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CandidateRegistration
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CANDIDATE_REGISTRATION, $id);
    }

    /**
     * @return Candidate
     */
    public function getCandidate()
    {
        return $this->getProperty("candidate");
    }

    /**
     * @param Candidate $candidate
     */
    public function setCandidate(Candidate $candidate = null)
    {
        $this->setProperty("candidate", $candidate);
    }

    /**
     * @return QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty("qualificationAward");
    }

    /**
     * @param QualificationAward $qualificationAward
     */
    public function setQualificationAward(QualificationAward $qualificationAward = null)
    {
        $this->setProperty("qualificationAward", $qualificationAward);
    }

    /**
     * @return QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty("qualificationAvailabilityInstance");
    }

    /**
     * @param QualificationAvailabilityInstance $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty("qualificationAvailabilityInstance", $qualificationAvailabilityInstance);
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->getProperty("registrationNumber");
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber($registrationNumber = null)
    {
        $this->setProperty("registrationNumber", $registrationNumber);
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationRequestedDatetime()
    {
        return $this->getProperty("registrationRequestedDatetime");
    }

    /**
     * @param \DateTime $registrationRequestedDatetime
     */
    public function setRegistrationRequestedDatetime(\DateTime $registrationRequestedDatetime = null)
    {
        $this->setProperty("registrationRequestedDatetime", $registrationRequestedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationConfirmedDatetime()
    {
        return $this->getProperty("registrationConfirmedDatetime");
    }

    /**
     * @param \DateTime $registrationConfirmedDatetime
     */
    public function setRegistrationConfirmedDatetime(\DateTime $registrationConfirmedDatetime = null)
    {
        $this->setProperty("registrationConfirmedDatetime", $registrationConfirmedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getResponseReceivedDatetime()
    {
        return $this->getProperty("responseReceivedDatetime");
    }

    /**
     * @param \DateTime $responseReceivedDatetime
     */
    public function setResponseReceivedDatetime(\DateTime $responseReceivedDatetime = null)
    {
        $this->setProperty("responseReceivedDatetime", $responseReceivedDatetime);
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->getProperty("responseMessage");
    }

    /**
     * @param string $responseMessage
     */
    public function setResponseMessage($responseMessage = null)
    {
        $this->setProperty("responseMessage", $responseMessage);
    }
}
