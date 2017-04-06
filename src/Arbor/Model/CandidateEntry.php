<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Candidate;
use \Arbor\Model\QualificationLearningUnit;
use \Arbor\Model\QualificationAssessable;
use \Arbor\Model\QualificationAssessableInstance;
use \Arbor\Model\InvigilationSession;

class CandidateEntry extends ModelBase
{

    const CANDIDATE = 'candidate';

    const QUALIFICATION_LEARNING_UNIT = 'qualificationLearningUnit';

    const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    const QUALIFICATION_ASSESSABLE_INSTANCE = 'qualificationAssessableInstance';

    const INVIGILATION_SESSION = 'invigilationSession';

    const ENTRY_NUMBER = 'entryNumber';

    const ENTRY_REQUESTED_DATETIME = 'entryRequestedDatetime';

    const ENTRY_CONFIRMED_DATETIME = 'entryConfirmedDatetime';

    const RESPONSE_RECEIVED_DATETIME = 'responseReceivedDatetime';

    const START_DATETIME = 'startDatetime';

    const RESPONSE_MESSAGE = 'responseMessage';

    const ATTENDANCE_MARK = 'attendanceMark';

    const MINUTES_LATE = 'minutesLate';

    protected $_resourceType = ResourceType::CANDIDATE_ENTRY;

    /**
     * @param \Arbor\Query\Query $query
     * @return CandidateEntry[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CandidateEntry");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CandidateEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CANDIDATE_ENTRY, $id);
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
     * @return QualificationLearningUnit
     */
    public function getQualificationLearningUnit()
    {
        return $this->getProperty("qualificationLearningUnit");
    }

    /**
     * @param QualificationLearningUnit $qualificationLearningUnit
     */
    public function setQualificationLearningUnit(QualificationLearningUnit $qualificationLearningUnit = null)
    {
        $this->setProperty("qualificationLearningUnit", $qualificationLearningUnit);
    }

    /**
     * @return QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty("qualificationAssessable");
    }

    /**
     * @param QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty("qualificationAssessable", $qualificationAssessable);
    }

    /**
     * @return QualificationAssessableInstance
     */
    public function getQualificationAssessableInstance()
    {
        return $this->getProperty("qualificationAssessableInstance");
    }

    /**
     * @param QualificationAssessableInstance $qualificationAssessableInstance
     */
    public function setQualificationAssessableInstance(QualificationAssessableInstance $qualificationAssessableInstance = null)
    {
        $this->setProperty("qualificationAssessableInstance", $qualificationAssessableInstance);
    }

    /**
     * @return InvigilationSession
     */
    public function getInvigilationSession()
    {
        return $this->getProperty("invigilationSession");
    }

    /**
     * @param InvigilationSession $invigilationSession
     */
    public function setInvigilationSession(InvigilationSession $invigilationSession = null)
    {
        $this->setProperty("invigilationSession", $invigilationSession);
    }

    /**
     * @return string
     */
    public function getEntryNumber()
    {
        return $this->getProperty("entryNumber");
    }

    /**
     * @param string $entryNumber
     */
    public function setEntryNumber($entryNumber = null)
    {
        $this->setProperty("entryNumber", $entryNumber);
    }

    /**
     * @return \DateTime
     */
    public function getEntryRequestedDatetime()
    {
        return $this->getProperty("entryRequestedDatetime");
    }

    /**
     * @param \DateTime $entryRequestedDatetime
     */
    public function setEntryRequestedDatetime(\DateTime $entryRequestedDatetime = null)
    {
        $this->setProperty("entryRequestedDatetime", $entryRequestedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEntryConfirmedDatetime()
    {
        return $this->getProperty("entryConfirmedDatetime");
    }

    /**
     * @param \DateTime $entryConfirmedDatetime
     */
    public function setEntryConfirmedDatetime(\DateTime $entryConfirmedDatetime = null)
    {
        $this->setProperty("entryConfirmedDatetime", $entryConfirmedDatetime);
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
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
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

    /**
     * @return string
     */
    public function getAttendanceMark()
    {
        return $this->getProperty("attendanceMark");
    }

    /**
     * @param string $attendanceMark
     */
    public function setAttendanceMark($attendanceMark = null)
    {
        $this->setProperty("attendanceMark", $attendanceMark);
    }

    /**
     * @return int
     */
    public function getMinutesLate()
    {
        return $this->getProperty("minutesLate");
    }

    /**
     * @param int $minutesLate
     */
    public function setMinutesLate($minutesLate = null)
    {
        $this->setProperty("minutesLate", $minutesLate);
    }


}
