<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Candidate;
use \Arbor\Model\AwardingOrganization;

class CandidateEnrolment extends ModelBase
{

    const CANDIDATE = 'candidate';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const ENROLMENT_NUMBER = 'enrolmentNumber';

    const ENROLMENT_REQUESTED_DATETIME = 'enrolmentRequestedDatetime';

    const ENROLMENT_CONFIRMED_DATETIME = 'enrolmentConfirmedDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_ENROLMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CandidateEnrolment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CandidateEnrolment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CandidateEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CANDIDATE_ENROLMENT, $id);
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
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty("awardingOrganization");
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty("awardingOrganization", $awardingOrganization);
    }

    /**
     * @return string
     */
    public function getEnrolmentNumber()
    {
        return $this->getProperty("enrolmentNumber");
    }

    /**
     * @param string $enrolmentNumber
     */
    public function setEnrolmentNumber($enrolmentNumber = null)
    {
        $this->setProperty("enrolmentNumber", $enrolmentNumber);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentRequestedDatetime()
    {
        return $this->getProperty("enrolmentRequestedDatetime");
    }

    /**
     * @param \DateTime $enrolmentRequestedDatetime
     */
    public function setEnrolmentRequestedDatetime(\DateTime $enrolmentRequestedDatetime = null)
    {
        $this->setProperty("enrolmentRequestedDatetime", $enrolmentRequestedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentConfirmedDatetime()
    {
        return $this->getProperty("enrolmentConfirmedDatetime");
    }

    /**
     * @param \DateTime $enrolmentConfirmedDatetime
     */
    public function setEnrolmentConfirmedDatetime(\DateTime $enrolmentConfirmedDatetime = null)
    {
        $this->setProperty("enrolmentConfirmedDatetime", $enrolmentConfirmedDatetime);
    }


}
