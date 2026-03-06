<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Meeting extends ModelBase
{
    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION_TEXT = 'locationText';

    public const LOCATION = 'location';

    public const MEETING_NAME = 'meetingName';

    public const ALLOW_SELF_SERVICE_SCHEDULING = 'allowSelfServiceScheduling';

    public const SELF_SCHEDULING_OPENS_DATETIME = 'selfSchedulingOpensDatetime';

    public const SELF_SCHEDULING_CLOSES_DATETIME = 'selfSchedulingClosesDatetime';

    public const SCHEDULE_MINIMUM_DURATION = 'scheduleMinimumDuration';

    public const SCHEDULE_MAXIMUM_DURATION = 'scheduleMaximumDuration';

    public const SCHEDULE_SUGGESTED_DURATION = 'scheduleSuggestedDuration';

    public const SCHEDULE_LOCATION = 'scheduleLocation';

    public const ALLOW_DUPLICATE_SCHEDULING = 'allowDuplicateScheduling';

    public const AIMS = 'aims';

    public const AGENDA = 'agenda';

    public const OUTCOMES = 'outcomes';

    protected $_resourceType = ResourceType::MEETING;

    /**
     * @param Query $query
     * @return Meeting[] | Collection
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

        $query->setResourceType(ResourceType::MEETING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Meeting
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEETING, $id);
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
     * @return string
     */
    public function getMeetingName()
    {
        return $this->getProperty('meetingName');
    }

    /**
     * @param string $meetingName
     */
    public function setMeetingName(string $meetingName = null)
    {
        $this->setProperty('meetingName', $meetingName);
    }

    /**
     * @return bool
     */
    public function getAllowSelfServiceScheduling()
    {
        return $this->getProperty('allowSelfServiceScheduling');
    }

    /**
     * @param bool $allowSelfServiceScheduling
     */
    public function setAllowSelfServiceScheduling(bool $allowSelfServiceScheduling = null)
    {
        $this->setProperty('allowSelfServiceScheduling', $allowSelfServiceScheduling);
    }

    /**
     * @return \DateTime
     */
    public function getSelfSchedulingOpensDatetime()
    {
        return $this->getProperty('selfSchedulingOpensDatetime');
    }

    /**
     * @param \DateTime $selfSchedulingOpensDatetime
     */
    public function setSelfSchedulingOpensDatetime(\DateTime $selfSchedulingOpensDatetime = null)
    {
        $this->setProperty('selfSchedulingOpensDatetime', $selfSchedulingOpensDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSelfSchedulingClosesDatetime()
    {
        return $this->getProperty('selfSchedulingClosesDatetime');
    }

    /**
     * @param \DateTime $selfSchedulingClosesDatetime
     */
    public function setSelfSchedulingClosesDatetime(\DateTime $selfSchedulingClosesDatetime = null)
    {
        $this->setProperty('selfSchedulingClosesDatetime', $selfSchedulingClosesDatetime);
    }

    /**
     * @return string
     */
    public function getScheduleMinimumDuration()
    {
        return $this->getProperty('scheduleMinimumDuration');
    }

    /**
     * @param string $scheduleMinimumDuration
     */
    public function setScheduleMinimumDuration(string $scheduleMinimumDuration = null)
    {
        $this->setProperty('scheduleMinimumDuration', $scheduleMinimumDuration);
    }

    /**
     * @return string
     */
    public function getScheduleMaximumDuration()
    {
        return $this->getProperty('scheduleMaximumDuration');
    }

    /**
     * @param string $scheduleMaximumDuration
     */
    public function setScheduleMaximumDuration(string $scheduleMaximumDuration = null)
    {
        $this->setProperty('scheduleMaximumDuration', $scheduleMaximumDuration);
    }

    /**
     * @return string
     */
    public function getScheduleSuggestedDuration()
    {
        return $this->getProperty('scheduleSuggestedDuration');
    }

    /**
     * @param string $scheduleSuggestedDuration
     */
    public function setScheduleSuggestedDuration(string $scheduleSuggestedDuration = null)
    {
        $this->setProperty('scheduleSuggestedDuration', $scheduleSuggestedDuration);
    }

    /**
     * @return \Arbor\Model\Room
     */
    public function getScheduleLocation()
    {
        return $this->getProperty('scheduleLocation');
    }

    /**
     * @param \Arbor\Model\Room $scheduleLocation
     */
    public function setScheduleLocation(\Arbor\Model\Room $scheduleLocation = null)
    {
        $this->setProperty('scheduleLocation', $scheduleLocation);
    }

    /**
     * @return bool
     */
    public function getAllowDuplicateScheduling()
    {
        return $this->getProperty('allowDuplicateScheduling');
    }

    /**
     * @param bool $allowDuplicateScheduling
     */
    public function setAllowDuplicateScheduling(bool $allowDuplicateScheduling = null)
    {
        $this->setProperty('allowDuplicateScheduling', $allowDuplicateScheduling);
    }

    /**
     * @return string
     */
    public function getAims()
    {
        return $this->getProperty('aims');
    }

    /**
     * @param string $aims
     */
    public function setAims(string $aims = null)
    {
        $this->setProperty('aims', $aims);
    }

    /**
     * @return string
     */
    public function getAgenda()
    {
        return $this->getProperty('agenda');
    }

    /**
     * @param string $agenda
     */
    public function setAgenda(string $agenda = null)
    {
        $this->setProperty('agenda', $agenda);
    }

    /**
     * @return string
     */
    public function getOutcomes()
    {
        return $this->getProperty('outcomes');
    }

    /**
     * @param string $outcomes
     */
    public function setOutcomes(string $outcomes = null)
    {
        $this->setProperty('outcomes', $outcomes);
    }
}
