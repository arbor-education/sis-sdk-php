<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TimetableSlot extends ModelBase
{
    public const ACADEMIC_YEAR = 'academicYear';

    public const TIMETABLED_OBJECT = 'timetabledObject';

    public const DAY_OF_CYCLE = 'dayOfCycle';

    public const DAY_OF_WEEK = 'dayOfWeek';

    public const TERM_TIME_ONLY = 'termTimeOnly';

    public const START_TIME = 'startTime';

    public const END_TIME = 'endTime';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const FREQUENCY = 'frequency';

    public const STATUS = 'status';

    protected $_resourceType = ResourceType::TIMETABLE_SLOT;

    /**
     * @param Query $query
     * @return TimetableSlot[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLE_SLOT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetableSlot
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLE_SLOT, $id);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return ModelBase
     */
    public function getTimetabledObject()
    {
        return $this->getProperty('timetabledObject');
    }

    /**
     * @param ModelBase $timetabledObject
     */
    public function setTimetabledObject(\ModelBase $timetabledObject = null)
    {
        $this->setProperty('timetabledObject', $timetabledObject);
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
    public function setDayOfCycle(int $dayOfCycle = null)
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
    public function setDayOfWeek(int $dayOfWeek = null)
    {
        $this->setProperty('dayOfWeek', $dayOfWeek);
    }

    /**
     * @return bool
     */
    public function getTermTimeOnly()
    {
        return $this->getProperty('termTimeOnly');
    }

    /**
     * @param bool $termTimeOnly
     */
    public function setTermTimeOnly(bool $termTimeOnly = null)
    {
        $this->setProperty('termTimeOnly', $termTimeOnly);
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
    public function setStartTime(string $startTime = null)
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
    public function setEndTime(string $endTime = null)
    {
        $this->setProperty('endTime', $endTime);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->getProperty('frequency');
    }

    /**
     * @param string $frequency
     */
    public function setFrequency(string $frequency = null)
    {
        $this->setProperty('frequency', $frequency);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }
}
