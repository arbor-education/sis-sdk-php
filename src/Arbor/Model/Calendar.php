<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Calendar extends ModelBase
{
    public const OWNER = 'owner';

    public const CALENDAR_TYPE = 'calendarType';

    public const CALENDAR_NAME = 'calendarName';

    public const CALENDAR_DESCRIPTION = 'calendarDescription';

    public const CALENDAR_COLOR = 'calendarColor';

    protected $_resourceType = ResourceType::CALENDAR;

    /**
     * @param Query $query
     * @return Calendar[] | Collection
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

        $query->setResourceType(ResourceType::CALENDAR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Calendar
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CALENDAR, $id);
    }

    /**
     * @return ModelBase
     */
    public function getOwner()
    {
        return $this->getProperty('owner');
    }

    /**
     * @param ModelBase $owner
     */
    public function setOwner(\ModelBase $owner = null)
    {
        $this->setProperty('owner', $owner);
    }

    /**
     * @return \Arbor\Model\CalendarType
     */
    public function getCalendarType()
    {
        return $this->getProperty('calendarType');
    }

    /**
     * @param \Arbor\Model\CalendarType $calendarType
     */
    public function setCalendarType(\Arbor\Model\CalendarType $calendarType = null)
    {
        $this->setProperty('calendarType', $calendarType);
    }

    /**
     * @return string
     */
    public function getCalendarName()
    {
        return $this->getProperty('calendarName');
    }

    /**
     * @param string $calendarName
     */
    public function setCalendarName(string $calendarName = null)
    {
        $this->setProperty('calendarName', $calendarName);
    }

    /**
     * @return string
     */
    public function getCalendarDescription()
    {
        return $this->getProperty('calendarDescription');
    }

    /**
     * @param string $calendarDescription
     */
    public function setCalendarDescription(string $calendarDescription = null)
    {
        $this->setProperty('calendarDescription', $calendarDescription);
    }

    /**
     * @return string
     */
    public function getCalendarColor()
    {
        return $this->getProperty('calendarColor');
    }

    /**
     * @param string $calendarColor
     */
    public function setCalendarColor(string $calendarColor = null)
    {
        $this->setProperty('calendarColor', $calendarColor);
    }
}
