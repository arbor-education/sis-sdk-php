<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\InHouseExam;
use \Arbor\Model\InHouseExamInstance;
use \Arbor\Model\InHouseCandidate;
use \Arbor\Model\InvigilationSession;
use \Arbor\Model\RoomLayoutSeat;

class InHouseExamEntry extends ModelBase
{

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_ENTRY;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\InHouseExamEntry[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("InHouseExamEntry");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\InHouseExamEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("InHouseExamEntry", $id);
    }

    /**
     * @return InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty("inHouseExam");
    }

    /**
     * @param InHouseExam $inHouseExam
     */
    public function setInHouseExam(InHouseExam $inHouseExam = null)
    {
        $this->setProperty("inHouseExam", $inHouseExam);
    }

    /**
     * @return InHouseExamInstance
     */
    public function getInHouseExamInstance()
    {
        return $this->getProperty("inHouseExamInstance");
    }

    /**
     * @param InHouseExamInstance $inHouseExamInstance
     */
    public function setInHouseExamInstance(InHouseExamInstance $inHouseExamInstance = null)
    {
        $this->setProperty("inHouseExamInstance", $inHouseExamInstance);
    }

    /**
     * @return InHouseCandidate
     */
    public function getInHouseCandidate()
    {
        return $this->getProperty("inHouseCandidate");
    }

    /**
     * @param InHouseCandidate $inHouseCandidate
     */
    public function setInHouseCandidate(InHouseCandidate $inHouseCandidate = null)
    {
        $this->setProperty("inHouseCandidate", $inHouseCandidate);
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
     * @return RoomLayoutSeat
     */
    public function getSeat()
    {
        return $this->getProperty("seat");
    }

    /**
     * @param RoomLayoutSeat $seat
     */
    public function setSeat(RoomLayoutSeat $seat = null)
    {
        $this->setProperty("seat", $seat);
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
     * @return float
     */
    public function getExtraTimePercentage()
    {
        return $this->getProperty("extraTimePercentage");
    }

    /**
     * @param float $extraTimePercentage
     */
    public function setExtraTimePercentage($extraTimePercentage = null)
    {
        $this->setProperty("extraTimePercentage", $extraTimePercentage);
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
