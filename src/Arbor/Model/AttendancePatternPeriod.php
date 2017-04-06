<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AttendancePattern;

class AttendancePatternPeriod extends ModelBase
{

    const ATTENDANCE_PATTERN = 'attendancePattern';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    protected $_resourceType = ResourceType::ATTENDANCE_PATTERN_PERIOD;

    /**
     * @param \Arbor\Query\Query $query
     * @return AttendancePatternPeriod[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AttendancePatternPeriod");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AttendancePatternPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ATTENDANCE_PATTERN_PERIOD, $id);
    }

    /**
     * @return AttendancePattern
     */
    public function getAttendancePattern()
    {
        return $this->getProperty("attendancePattern");
    }

    /**
     * @param AttendancePattern $attendancePattern
     */
    public function setAttendancePattern(AttendancePattern $attendancePattern = null)
    {
        $this->setProperty("attendancePattern", $attendancePattern);
    }

    /**
     * @return int
     */
    public function getDayOfCycle()
    {
        return $this->getProperty("dayOfCycle");
    }

    /**
     * @param int $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle = null)
    {
        $this->setProperty("dayOfCycle", $dayOfCycle);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty("startTime");
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty("startTime", $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty("endTime");
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty("endTime", $endTime);
    }


}
