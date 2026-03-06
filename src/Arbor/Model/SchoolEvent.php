<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SchoolEvent extends ModelBase
{
    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION_TEXT = 'locationText';

    public const LOCATION = 'location';

    public const SCHOOL_EVENT_TYPE = 'schoolEventType';

    public const REPEATING_SCHOOL_EVENT = 'repeatingSchoolEvent';

    public const SCHOOL_EVENT_NAME = 'schoolEventName';

    public const TIMETABLE_SLOT = 'timetableSlot';

    public const NARRATIVE = 'narrative';

    public const COVER_REQUIRED = 'coverRequired';

    protected $_resourceType = ResourceType::SCHOOL_EVENT;

    /**
     * @param Query $query
     * @return SchoolEvent[] | Collection
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

        $query->setResourceType(ResourceType::SCHOOL_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SCHOOL_EVENT, $id);
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
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty('locationText');
    }

    /**
     * @param string $locationText
     */
    public function setLocationText(string $locationText = null)
    {
        $this->setProperty('locationText', $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(\ModelBase $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return \Arbor\Model\SchoolEventType
     */
    public function getSchoolEventType()
    {
        return $this->getProperty('schoolEventType');
    }

    /**
     * @param \Arbor\Model\SchoolEventType $schoolEventType
     */
    public function setSchoolEventType(\Arbor\Model\SchoolEventType $schoolEventType = null)
    {
        $this->setProperty('schoolEventType', $schoolEventType);
    }

    /**
     * @return \Arbor\Model\RepeatingSchoolEvent
     */
    public function getRepeatingSchoolEvent()
    {
        return $this->getProperty('repeatingSchoolEvent');
    }

    /**
     * @param \Arbor\Model\RepeatingSchoolEvent $repeatingSchoolEvent
     */
    public function setRepeatingSchoolEvent(\Arbor\Model\RepeatingSchoolEvent $repeatingSchoolEvent = null)
    {
        $this->setProperty('repeatingSchoolEvent', $repeatingSchoolEvent);
    }

    /**
     * @return string
     */
    public function getSchoolEventName()
    {
        return $this->getProperty('schoolEventName');
    }

    /**
     * @param string $schoolEventName
     */
    public function setSchoolEventName(string $schoolEventName = null)
    {
        $this->setProperty('schoolEventName', $schoolEventName);
    }

    /**
     * @return \Arbor\Model\TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param \Arbor\Model\TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(\Arbor\Model\TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

    /**
     * @return bool
     */
    public function getCoverRequired()
    {
        return $this->getProperty('coverRequired');
    }

    /**
     * @param bool $coverRequired
     */
    public function setCoverRequired(bool $coverRequired = null)
    {
        $this->setProperty('coverRequired', $coverRequired);
    }
}
