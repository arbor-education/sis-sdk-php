<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AttendancePatternPeriod extends ModelBase
{

    const ATTENDANCE_PATTERN = 'attendancePattern';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    protected $_resourceType = ResourceType::ATTENDANCE_PATTERN_PERIOD;

    /**
     * @param Query $query
     * @return AttendancePatternPeriod[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_PATTERN_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendancePatternPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_PATTERN_PERIOD, $id);
    }

    /**
     * @return AttendancePattern
     */
    public function getAttendancePattern()
    {
        return $this->getProperty('attendancePattern');
    }

    /**
     * @param AttendancePattern $attendancePattern
     */
    public function setAttendancePattern(AttendancePattern $attendancePattern = null)
    {
        $this->setProperty('attendancePattern', $attendancePattern);
    }

    /**
     * @return int
     */
    public function getDayOfCycle()
    {
        return $this->getProperty('dayOfCycle');
    }

    /**
     * @param int $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle = null)
    {
        $this->setProperty('dayOfCycle', $dayOfCycle);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty('startTime');
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty('startTime', $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty('endTime');
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty('endTime', $endTime);
    }


}
