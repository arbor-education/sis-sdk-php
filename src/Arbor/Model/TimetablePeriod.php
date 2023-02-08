<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimetablePeriod extends ModelBase
{

    const TIMETABLE_PERIOD_GROUPING = 'timetablePeriodGrouping';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const DAY_OF_WEEK = 'dayOfWeek';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    protected $_resourceType = ResourceType::TIMETABLE_PERIOD;

    /**
     * @param Query $query
     * @return TimetablePeriod[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLE_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetablePeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLE_PERIOD, $id);
    }

    /**
     * @return TimetablePeriodGrouping
     */
    public function getTimetablePeriodGrouping()
    {
        return $this->getProperty('timetablePeriodGrouping');
    }

    /**
     * @param TimetablePeriodGrouping $timetablePeriodGrouping
     */
    public function setTimetablePeriodGrouping(TimetablePeriodGrouping $timetablePeriodGrouping = null)
    {
        $this->setProperty('timetablePeriodGrouping', $timetablePeriodGrouping);
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
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->getProperty('dayOfWeek');
    }

    /**
     * @param int $dayOfWeek
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        $this->setProperty('dayOfWeek', $dayOfWeek);
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
