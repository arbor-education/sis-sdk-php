<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CandidateEntry;

class CandidateExtraTimeRequest extends ModelBase
{
    const CANDIDATE_ENTRY = 'candidateEntry';

    const TIME_REQUESTED = 'timeRequested';

    const REASON = 'reason';

    const NARRATIVE = 'narrative';

    const REQUESTED_DATETIME = 'requestedDatetime';

    const CONFIRMED_DATETIME = 'confirmedDatetime';

    const REJECTED_DATETIME = 'rejectedDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_EXTRA_TIME_REQUEST;

    /**
     * @param \Arbor\Query\Query $query
     * @return CandidateExtraTimeRequest[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CandidateExtraTimeRequest");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CandidateExtraTimeRequest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CANDIDATE_EXTRA_TIME_REQUEST, $id);
    }

    /**
     * @return CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty("candidateEntry");
    }

    /**
     * @param CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(CandidateEntry $candidateEntry = null)
    {
        $this->setProperty("candidateEntry", $candidateEntry);
    }

    /**
     * @return string
     */
    public function getTimeRequested()
    {
        return $this->getProperty("timeRequested");
    }

    /**
     * @param string $timeRequested
     */
    public function setTimeRequested($timeRequested = null)
    {
        $this->setProperty("timeRequested", $timeRequested);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty("reason");
    }

    /**
     * @param string $reason
     */
    public function setReason($reason = null)
    {
        $this->setProperty("reason", $reason);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDatetime()
    {
        return $this->getProperty("requestedDatetime");
    }

    /**
     * @param \DateTime $requestedDatetime
     */
    public function setRequestedDatetime(\DateTime $requestedDatetime = null)
    {
        $this->setProperty("requestedDatetime", $requestedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getConfirmedDatetime()
    {
        return $this->getProperty("confirmedDatetime");
    }

    /**
     * @param \DateTime $confirmedDatetime
     */
    public function setConfirmedDatetime(\DateTime $confirmedDatetime = null)
    {
        $this->setProperty("confirmedDatetime", $confirmedDatetime);
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
}
