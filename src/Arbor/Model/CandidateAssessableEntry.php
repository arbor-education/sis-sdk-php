<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CandidateAssessableEntry extends ModelBase
{
    public const CANDIDATE_ENTRY = 'candidateEntry';

    public const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    public const QUALIFICATION_ASSESSABLE_INSTANCE = 'qualificationAssessableInstance';

    public const INVIGILATION_SESSION = 'invigilationSession';

    public const SEAT = 'seat';

    public const START_DATETIME = 'startDatetime';

    public const EXTRA_TIME_PERCENTAGE = 'extraTimePercentage';

    public const ATTENDANCE_MARK = 'attendanceMark';

    public const MINUTES_LATE = 'minutesLate';

    protected $_resourceType = ResourceType::CANDIDATE_ASSESSABLE_ENTRY;

    /**
     * @param Query $query
     * @return CandidateAssessableEntry[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_ASSESSABLE_ENTRY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateAssessableEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_ASSESSABLE_ENTRY, $id);
    }

    /**
     * @return \Arbor\Model\CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty('candidateEntry');
    }

    /**
     * @param \Arbor\Model\CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(\Arbor\Model\CandidateEntry $candidateEntry = null)
    {
        $this->setProperty('candidateEntry', $candidateEntry);
    }

    /**
     * @return \Arbor\Model\QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param \Arbor\Model\QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(\Arbor\Model\QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty('qualificationAssessable', $qualificationAssessable);
    }

    /**
     * @return \Arbor\Model\QualificationAssessableInstance
     */
    public function getQualificationAssessableInstance()
    {
        return $this->getProperty('qualificationAssessableInstance');
    }

    /**
     * @param \Arbor\Model\QualificationAssessableInstance
     * $qualificationAssessableInstance
     */
    public function setQualificationAssessableInstance(\Arbor\Model\QualificationAssessableInstance $qualificationAssessableInstance = null)
    {
        $this->setProperty('qualificationAssessableInstance', $qualificationAssessableInstance);
    }

    /**
     * @return \Arbor\Model\InvigilationSession
     */
    public function getInvigilationSession()
    {
        return $this->getProperty('invigilationSession');
    }

    /**
     * @param \Arbor\Model\InvigilationSession $invigilationSession
     */
    public function setInvigilationSession(\Arbor\Model\InvigilationSession $invigilationSession = null)
    {
        $this->setProperty('invigilationSession', $invigilationSession);
    }

    /**
     * @return \Arbor\Model\RoomLayoutSeat
     */
    public function getSeat()
    {
        return $this->getProperty('seat');
    }

    /**
     * @param \Arbor\Model\RoomLayoutSeat $seat
     */
    public function setSeat(\Arbor\Model\RoomLayoutSeat $seat = null)
    {
        $this->setProperty('seat', $seat);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return float
     */
    public function getExtraTimePercentage()
    {
        return $this->getProperty('extraTimePercentage');
    }

    /**
     * @param float $extraTimePercentage
     */
    public function setExtraTimePercentage(float $extraTimePercentage = null)
    {
        $this->setProperty('extraTimePercentage', $extraTimePercentage);
    }

    /**
     * @return string
     */
    public function getAttendanceMark()
    {
        return $this->getProperty('attendanceMark');
    }

    /**
     * @param string $attendanceMark
     */
    public function setAttendanceMark(string $attendanceMark = null)
    {
        $this->setProperty('attendanceMark', $attendanceMark);
    }

    /**
     * @return int
     */
    public function getMinutesLate()
    {
        return $this->getProperty('minutesLate');
    }

    /**
     * @param int $minutesLate
     */
    public function setMinutesLate(int $minutesLate = null)
    {
        $this->setProperty('minutesLate', $minutesLate);
    }
}
