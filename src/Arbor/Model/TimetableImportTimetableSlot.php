<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimetableImportTimetableSlot extends \ModelBase
{
    public const TIMETABLE_IMPORT_JOB = 'timetableImportJob';

    public const TIMETABLE_SLOT = 'timetableSlot';

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

    protected $_resourceType = ResourceType::TIMETABLE_IMPORT_TIMETABLE_SLOT;

    /**
     * @param Query $query
     * @return TimetableImportTimetableSlot[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::TIMETABLE_IMPORT_TIMETABLE_SLOT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetableImportTimetableSlot
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLE_IMPORT_TIMETABLE_SLOT, $id);
    }

    /**
     * @return TimetableImportJob
     */
    public function getTimetableImportJob()
    {
        return $this->getProperty('timetableImportJob');
    }

    /**
     * @param TimetableImportJob $timetableImportJob
     */
    public function setTimetableImportJob(\TimetableImportJob $timetableImportJob = null)
    {
        $this->setProperty('timetableImportJob', $timetableImportJob);
    }

    /**
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(\TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(\AcademicYear $academicYear = null)
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
}
