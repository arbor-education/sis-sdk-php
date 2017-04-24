<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CalendarEntryMapping;

class CalendarEntryReminder extends ModelBase
{
    const CALENDAR_ENTRY_MAPPING = 'calendarEntryMapping';

    const REMINDER_SENT_DATETIME = 'reminderSentDatetime';

    protected $_resourceType = ResourceType::CALENDAR_ENTRY_REMINDER;

    /**
     * @param \Arbor\Query\Query $query
     * @return CalendarEntryReminder[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CalendarEntryReminder");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CalendarEntryReminder
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CALENDAR_ENTRY_REMINDER, $id);
    }

    /**
     * @return CalendarEntryMapping
     */
    public function getCalendarEntryMapping()
    {
        return $this->getProperty("calendarEntryMapping");
    }

    /**
     * @param CalendarEntryMapping $calendarEntryMapping
     */
    public function setCalendarEntryMapping(CalendarEntryMapping $calendarEntryMapping = null)
    {
        $this->setProperty("calendarEntryMapping", $calendarEntryMapping);
    }

    /**
     * @return \DateTime
     */
    public function getReminderSentDatetime()
    {
        return $this->getProperty("reminderSentDatetime");
    }

    /**
     * @param \DateTime $reminderSentDatetime
     */
    public function setReminderSentDatetime(\DateTime $reminderSentDatetime = null)
    {
        $this->setProperty("reminderSentDatetime", $reminderSentDatetime);
    }
}
