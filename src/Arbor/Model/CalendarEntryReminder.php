<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CalendarEntryReminder extends ModelBase
{
    public const CALENDAR_ENTRY_MAPPING = 'calendarEntryMapping';

    public const REMINDER_SENT_DATETIME = 'reminderSentDatetime';

    protected $_resourceType = ResourceType::CALENDAR_ENTRY_REMINDER;

    /**
     * @param Query $query
     * @return CalendarEntryReminder[] | Collection
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

        $query->setResourceType(ResourceType::CALENDAR_ENTRY_REMINDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CalendarEntryReminder
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CALENDAR_ENTRY_REMINDER, $id);
    }

    /**
     * @return \Arbor\Model\CalendarEntryMapping
     */
    public function getCalendarEntryMapping()
    {
        return $this->getProperty('calendarEntryMapping');
    }

    /**
     * @param \Arbor\Model\CalendarEntryMapping $calendarEntryMapping
     */
    public function setCalendarEntryMapping(\Arbor\Model\CalendarEntryMapping $calendarEntryMapping = null)
    {
        $this->setProperty('calendarEntryMapping', $calendarEntryMapping);
    }

    /**
     * @return \DateTime
     */
    public function getReminderSentDatetime()
    {
        return $this->getProperty('reminderSentDatetime');
    }

    /**
     * @param \DateTime $reminderSentDatetime
     */
    public function setReminderSentDatetime(\DateTime $reminderSentDatetime = null)
    {
        $this->setProperty('reminderSentDatetime', $reminderSentDatetime);
    }
}
