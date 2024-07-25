<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InHouseExamEntry extends ModelBase
{
    public const IN_HOUSE_EXAM = 'inHouseExam';

    public const IN_HOUSE_EXAM_INSTANCE = 'inHouseExamInstance';

    public const IN_HOUSE_CANDIDATE = 'inHouseCandidate';

    public const INVIGILATION_SESSION = 'invigilationSession';

    public const SEAT = 'seat';

    public const START_DATETIME = 'startDatetime';

    public const EXTRA_TIME_PERCENTAGE = 'extraTimePercentage';

    public const ATTENDANCE_MARK = 'attendanceMark';

    public const MINUTES_LATE = 'minutesLate';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_ENTRY;

    /**
     * @param Query $query
     * @return InHouseExamEntry[] | Collection
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
     * @return \Arbor\Model\InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty('inHouseExam');
    }

    /**
     * @param \Arbor\Model\InHouseExam $inHouseExam
     */
    public function setInHouseExam(\Arbor\Model\InHouseExam $inHouseExam = null)
    {
        $this->setProperty('inHouseExam', $inHouseExam);
    }

    /**
     * @return \Arbor\Model\InHouseExamInstance
     */
    public function getInHouseExamInstance()
    {
        return $this->getProperty('inHouseExamInstance');
    }

    /**
     * @param \Arbor\Model\InHouseExamInstance $inHouseExamInstance
     */
    public function setInHouseExamInstance(\Arbor\Model\InHouseExamInstance $inHouseExamInstance = null)
    {
        $this->setProperty('inHouseExamInstance', $inHouseExamInstance);
    }

    /**
     * @return \Arbor\Model\InHouseCandidate
     */
    public function getInHouseCandidate()
    {
        return $this->getProperty('inHouseCandidate');
    }

    /**
     * @param \Arbor\Model\InHouseCandidate $inHouseCandidate
     */
    public function setInHouseCandidate(\Arbor\Model\InHouseCandidate $inHouseCandidate = null)
    {
        $this->setProperty('inHouseCandidate', $inHouseCandidate);
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
