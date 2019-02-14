<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InHouseExamEntry extends ModelBase
{

    const IN_HOUSE_EXAM = 'inHouseExam';

    const IN_HOUSE_EXAM_INSTANCE = 'inHouseExamInstance';

    const IN_HOUSE_CANDIDATE = 'inHouseCandidate';

    const INVIGILATION_SESSION = 'invigilationSession';

    const SEAT = 'seat';

    const START_DATETIME = 'startDatetime';

    const EXTRA_TIME_PERCENTAGE = 'extraTimePercentage';

    const ATTENDANCE_MARK = 'attendanceMark';

    const MINUTES_LATE = 'minutesLate';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_ENTRY;

    /**
     * @param Query $query
     * @return InHouseExamEntry[] | Collection
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

        $query->setResourceType(ResourceType::IN_HOUSE_EXAM_ENTRY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InHouseExamEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_HOUSE_EXAM_ENTRY, $id);
    }

    /**
     * @return InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty('inHouseExam');
    }

    /**
     * @param InHouseExam $inHouseExam
     */
    public function setInHouseExam(InHouseExam $inHouseExam = null)
    {
        $this->setProperty('inHouseExam', $inHouseExam);
    }

    /**
     * @return InHouseExamInstance
     */
    public function getInHouseExamInstance()
    {
        return $this->getProperty('inHouseExamInstance');
    }

    /**
     * @param InHouseExamInstance $inHouseExamInstance
     */
    public function setInHouseExamInstance(InHouseExamInstance $inHouseExamInstance = null)
    {
        $this->setProperty('inHouseExamInstance', $inHouseExamInstance);
    }

    /**
     * @return InHouseCandidate
     */
    public function getInHouseCandidate()
    {
        return $this->getProperty('inHouseCandidate');
    }

    /**
     * @param InHouseCandidate $inHouseCandidate
     */
    public function setInHouseCandidate(InHouseCandidate $inHouseCandidate = null)
    {
        $this->setProperty('inHouseCandidate', $inHouseCandidate);
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
