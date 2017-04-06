<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Intervention;
use \Arbor\Model\TimetableSlot;

class InterventionSession extends ModelBase
{

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION_TEXT = 'locationText';

    const LOCATION = 'location';

    const SCHEDULED_BY = 'scheduledBy';

    const INTERVENTION = 'intervention';

    const STAFF_COUNT = 'staffCount';

    const STUDENT_COUNT = 'studentCount';

    const CALENDAR_WEEK = 'calendarWeek';

    const TIMETABLE_SLOT = 'timetableSlot';

    protected $_resourceType = ResourceType::INTERVENTION_SESSION;

    /**
     * @param \Arbor\Query\Query $query
     * @return InterventionSession[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("InterventionSession");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InterventionSession
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::INTERVENTION_SESSION, $id);
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
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty("intervention");
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(Intervention $intervention = null)
    {
        $this->setProperty("intervention", $intervention);
    }

    /**
     * @return int
     */
    public function getStaffCount()
    {
        return $this->getProperty("staffCount");
    }

    /**
     * @param int $staffCount
     */
    public function setStaffCount($staffCount = null)
    {
        $this->setProperty("staffCount", $staffCount);
    }

    /**
     * @return int
     */
    public function getStudentCount()
    {
        return $this->getProperty("studentCount");
    }

    /**
     * @param int $studentCount
     */
    public function setStudentCount($studentCount = null)
    {
        $this->setProperty("studentCount", $studentCount);
    }

    /**
     * @return int
     */
    public function getCalendarWeek()
    {
        return $this->getProperty("calendarWeek");
    }

    /**
     * @param int $calendarWeek
     */
    public function setCalendarWeek($calendarWeek = null)
    {
        $this->setProperty("calendarWeek", $calendarWeek);
    }

    /**
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty("timetableSlot");
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(TimetableSlot $timetableSlot = null)
    {
        $this->setProperty("timetableSlot", $timetableSlot);
    }


}
