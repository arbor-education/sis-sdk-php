<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CandidateEntry;

class CandidateSpecialArrangement extends ModelBase
{
    const CANDIDATE_ENTRY = 'candidateEntry';

    const SPECIAL_ARRANGEMENT_TYPE = 'specialArrangementType';

    const NOTES = 'notes';

    const REQUESTED_DATETIME = 'requestedDatetime';

    const CONFIRMED_DATETIME = 'confirmedDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_SPECIAL_ARRANGEMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CandidateSpecialArrangement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CandidateSpecialArrangement");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CandidateSpecialArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CANDIDATE_SPECIAL_ARRANGEMENT, $id);
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
    public function getSpecialArrangementType()
    {
        return $this->getProperty("specialArrangementType");
    }

    /**
     * @param string $specialArrangementType
     */
    public function setSpecialArrangementType($specialArrangementType = null)
    {
        $this->setProperty("specialArrangementType", $specialArrangementType);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty("notes");
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes = null)
    {
        $this->setProperty("notes", $notes);
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
}
