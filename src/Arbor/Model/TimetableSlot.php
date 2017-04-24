<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class TimetableSlot extends ModelBase
{
    const ACADEMIC_YEAR = 'academicYear';

    const TIMETABLED_OBJECT = 'timetabledObject';

    const LOCATION = 'location';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const DAY_OF_WEEK = 'dayOfWeek';

    const TERM_TIME_ONLY = 'termTimeOnly';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const FREQUENCY = 'frequency';

    const STATUS = 'status';

    protected $_resourceType = ResourceType::TIMETABLE_SLOT;

    /**
     * @param \Arbor\Query\Query $query
     * @return TimetableSlot[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("TimetableSlot");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TimetableSlot
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TIMETABLE_SLOT, $id);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
    }

    /**
     * @return ModelBase
     */
    public function getTimetabledObject()
    {
        return $this->getProperty("timetabledObject");
    }

    /**
     * @param ModelBase $timetabledObject
     */
    public function setTimetabledObject(ModelBase $timetabledObject = null)
    {
        $this->setProperty("timetabledObject", $timetabledObject);
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
     * @return int
     */
    public function getDayOfCycle()
    {
        return $this->getProperty("dayOfCycle");
    }

    /**
     * @param int $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle = null)
    {
        $this->setProperty("dayOfCycle", $dayOfCycle);
    }

    /**
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->getProperty("dayOfWeek");
    }

    /**
     * @param int $dayOfWeek
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        $this->setProperty("dayOfWeek", $dayOfWeek);
    }

    /**
     * @return bool
     */
    public function getTermTimeOnly()
    {
        return $this->getProperty("termTimeOnly");
    }

    /**
     * @param bool $termTimeOnly
     */
    public function setTermTimeOnly($termTimeOnly = null)
    {
        $this->setProperty("termTimeOnly", $termTimeOnly);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty("startTime");
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty("startTime", $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty("endTime");
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty("endTime", $endTime);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->getProperty("frequency");
    }

    /**
     * @param string $frequency
     */
    public function setFrequency($frequency = null)
    {
        $this->setProperty("frequency", $frequency);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty("status");
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty("status", $status);
    }
}
