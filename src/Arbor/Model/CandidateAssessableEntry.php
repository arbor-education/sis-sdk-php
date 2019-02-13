<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CandidateAssessableEntry extends ModelBase
{

    const CANDIDATE_ENTRY = 'candidateEntry';

    const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    const QUALIFICATION_ASSESSABLE_INSTANCE = 'qualificationAssessableInstance';

    const INVIGILATION_SESSION = 'invigilationSession';

    const SEAT = 'seat';

    const START_DATETIME = 'startDatetime';

    const EXTRA_TIME_PERCENTAGE = 'extraTimePercentage';

    const ATTENDANCE_MARK = 'attendanceMark';

    const MINUTES_LATE = 'minutesLate';

    protected $_resourceType = ResourceType::CANDIDATE_ASSESSABLE_ENTRY;

    /**
     * @param Query $query
     * @return CandidateAssessableEntry[] | Collection
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
     * @return CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty('candidateEntry');
    }

    /**
     * @param CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(CandidateEntry $candidateEntry = null)
    {
        $this->setProperty('candidateEntry', $candidateEntry);
    }

    /**
     * @return QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty('qualificationAssessable', $qualificationAssessable);
    }

    /**
     * @return QualificationAssessableInstance
     */
    public function getQualificationAssessableInstance()
    {
        return $this->getProperty('qualificationAssessableInstance');
    }

    /**
     * @param QualificationAssessableInstance $qualificationAssessableInstance
     */
    public function setQualificationAssessableInstance(QualificationAssessableInstance $qualificationAssessableInstance = null)
    {
        $this->setProperty('qualificationAssessableInstance', $qualificationAssessableInstance);
    }

    /**
     * @return InvigilationSession
     */
    public function getInvigilationSession()
    {
        return $this->getProperty('invigilationSession');
    }

    /**
     * @param InvigilationSession $invigilationSession
     */
    public function setInvigilationSession(InvigilationSession $invigilationSession = null)
    {
        $this->setProperty('invigilationSession', $invigilationSession);
    }

    /**
     * @return RoomLayoutSeat
     */
    public function getSeat()
    {
        return $this->getProperty('seat');
    }

    /**
     * @param RoomLayoutSeat $seat
     */
    public function setSeat(RoomLayoutSeat $seat = null)
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
    public function setExtraTimePercentage($extraTimePercentage = null)
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
    public function setAttendanceMark($attendanceMark = null)
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
    public function setMinutesLate($minutesLate = null)
    {
        $this->setProperty('minutesLate', $minutesLate);
    }


}
