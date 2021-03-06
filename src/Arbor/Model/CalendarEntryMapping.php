<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CalendarEntryMapping extends ModelBase
{
    const EVENT = 'event';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const MAPPED = 'mapped';

    const CALENDAR = 'calendar';

    const TIMESLOT_BLOCKED = 'timeslotBlocked';

    protected $_resourceType = ResourceType::CALENDAR_ENTRY_MAPPING;

    /**
     * @param Query $query
     * @return CalendarEntryMapping[] | Collection
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

        $query->setResourceType(ResourceType::CALENDAR_ENTRY_MAPPING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CalendarEntryMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CALENDAR_ENTRY_MAPPING, $id);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(ModelBase $event = null)
    {
        $this->setProperty('event', $event);
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
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getMapped()
    {
        return $this->getProperty('mapped');
    }

    /**
     * @param ModelBase $mapped
     */
    public function setMapped(ModelBase $mapped = null)
    {
        $this->setProperty('mapped', $mapped);
    }

    /**
     * @return Calendar
     */
    public function getCalendar()
    {
        return $this->getProperty('calendar');
    }

    /**
     * @param Calendar $calendar
     */
    public function setCalendar(Calendar $calendar = null)
    {
        $this->setProperty('calendar', $calendar);
    }

    /**
     * @return bool
     */
    public function getTimeslotBlocked()
    {
        return $this->getProperty('timeslotBlocked');
    }

    /**
     * @param bool $timeslotBlocked
     */
    public function setTimeslotBlocked($timeslotBlocked = null)
    {
        $this->setProperty('timeslotBlocked', $timeslotBlocked);
    }
}
