<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Meeting extends ModelBase
{
    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION_TEXT = 'locationText';

    const LOCATION = 'location';

    const SCHEDULED_BY = 'scheduledBy';

    const MEETING_NAME = 'meetingName';

    const ALLOW_SELF_SERVICE_SCHEDULING = 'allowSelfServiceScheduling';

    const SELF_SCHEDULING_OPENS_DATETIME = 'selfSchedulingOpensDatetime';

    const SELF_SCHEDULING_CLOSES_DATETIME = 'selfSchedulingClosesDatetime';

    const SCHEDULE_MINIMUM_DURATION = 'scheduleMinimumDuration';

    const SCHEDULE_MAXIMUM_DURATION = 'scheduleMaximumDuration';

    const SCHEDULE_SUGGESTED_DURATION = 'scheduleSuggestedDuration';

    const SCHEDULE_LOCATION = 'scheduleLocation';

    const ALLOW_DUPLICATE_SCHEDULING = 'allowDuplicateScheduling';

    const AIMS = 'aims';

    const AGENDA = 'agenda';

    const OUTCOMES = 'outcomes';

    protected $_resourceType = ResourceType::MEETING;

    /**
     * @param \Arbor\Query\Query $query
     * @return Meeting[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Meeting");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Meeting
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MEETING, $id);
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
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty("locationText");
    }

    /**
     * @param string $locationText
     */
    public function setLocationText($locationText = null)
    {
        $this->setProperty("locationText", $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty("location");
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(ModelBase $location = null)
    {
        $this->setProperty("location", $location);
    }

    /**
     * @return ModelBase
     */
    public function getScheduledBy()
    {
        return $this->getProperty("scheduledBy");
    }

    /**
     * @param ModelBase $scheduledBy
     */
    public function setScheduledBy(ModelBase $scheduledBy = null)
    {
        $this->setProperty("scheduledBy", $scheduledBy);
    }

    /**
     * @return string
     */
    public function getMeetingName()
    {
        return $this->getProperty("meetingName");
    }

    /**
     * @param string $meetingName
     */
    public function setMeetingName($meetingName = null)
    {
        $this->setProperty("meetingName", $meetingName);
    }

    /**
     * @return bool
     */
    public function getAllowSelfServiceScheduling()
    {
        return $this->getProperty("allowSelfServiceScheduling");
    }

    /**
     * @param bool $allowSelfServiceScheduling
     */
    public function setAllowSelfServiceScheduling($allowSelfServiceScheduling = null)
    {
        $this->setProperty("allowSelfServiceScheduling", $allowSelfServiceScheduling);
    }

    /**
     * @return \DateTime
     */
    public function getSelfSchedulingOpensDatetime()
    {
        return $this->getProperty("selfSchedulingOpensDatetime");
    }

    /**
     * @param \DateTime $selfSchedulingOpensDatetime
     */
    public function setSelfSchedulingOpensDatetime(\DateTime $selfSchedulingOpensDatetime = null)
    {
        $this->setProperty("selfSchedulingOpensDatetime", $selfSchedulingOpensDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSelfSchedulingClosesDatetime()
    {
        return $this->getProperty("selfSchedulingClosesDatetime");
    }

    /**
     * @param \DateTime $selfSchedulingClosesDatetime
     */
    public function setSelfSchedulingClosesDatetime(\DateTime $selfSchedulingClosesDatetime = null)
    {
        $this->setProperty("selfSchedulingClosesDatetime", $selfSchedulingClosesDatetime);
    }

    /**
     * @return string
     */
    public function getScheduleMinimumDuration()
    {
        return $this->getProperty("scheduleMinimumDuration");
    }

    /**
     * @param string $scheduleMinimumDuration
     */
    public function setScheduleMinimumDuration($scheduleMinimumDuration = null)
    {
        $this->setProperty("scheduleMinimumDuration", $scheduleMinimumDuration);
    }

    /**
     * @return string
     */
    public function getScheduleMaximumDuration()
    {
        return $this->getProperty("scheduleMaximumDuration");
    }

    /**
     * @param string $scheduleMaximumDuration
     */
    public function setScheduleMaximumDuration($scheduleMaximumDuration = null)
    {
        $this->setProperty("scheduleMaximumDuration", $scheduleMaximumDuration);
    }

    /**
     * @return string
     */
    public function getScheduleSuggestedDuration()
    {
        return $this->getProperty("scheduleSuggestedDuration");
    }

    /**
     * @param string $scheduleSuggestedDuration
     */
    public function setScheduleSuggestedDuration($scheduleSuggestedDuration = null)
    {
        $this->setProperty("scheduleSuggestedDuration", $scheduleSuggestedDuration);
    }

    /**
     * @return ModelBase
     */
    public function getScheduleLocation()
    {
        return $this->getProperty("scheduleLocation");
    }

    /**
     * @param ModelBase $scheduleLocation
     */
    public function setScheduleLocation(ModelBase $scheduleLocation = null)
    {
        $this->setProperty("scheduleLocation", $scheduleLocation);
    }

    /**
     * @return bool
     */
    public function getAllowDuplicateScheduling()
    {
        return $this->getProperty("allowDuplicateScheduling");
    }

    /**
     * @param bool $allowDuplicateScheduling
     */
    public function setAllowDuplicateScheduling($allowDuplicateScheduling = null)
    {
        $this->setProperty("allowDuplicateScheduling", $allowDuplicateScheduling);
    }

    /**
     * @return string
     */
    public function getAims()
    {
        return $this->getProperty("aims");
    }

    /**
     * @param string $aims
     */
    public function setAims($aims = null)
    {
        $this->setProperty("aims", $aims);
    }

    /**
     * @return string
     */
    public function getAgenda()
    {
        return $this->getProperty("agenda");
    }

    /**
     * @param string $agenda
     */
    public function setAgenda($agenda = null)
    {
        $this->setProperty("agenda", $agenda);
    }

    /**
     * @return string
     */
    public function getOutcomes()
    {
        return $this->getProperty("outcomes");
    }

    /**
     * @param string $outcomes
     */
    public function setOutcomes($outcomes = null)
    {
        $this->setProperty("outcomes", $outcomes);
    }
}
