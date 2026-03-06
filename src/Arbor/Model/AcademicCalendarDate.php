<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicCalendarDate extends ModelBase
{
    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const CALENDAR_YEAR = 'calendarYear';

    public const CALENDAR_MONTH = 'calendarMonth';

    public const CALENDAR_WEEK = 'calendarWeek';

    public const CALENDAR_DAY = 'calendarDay';

    public const CALENDAR_DAY_OF_WEEK = 'calendarDayOfWeek';

    public const IS_PUBLIC_HOLIDAY = 'isPublicHoliday';

    public const PUBLIC_HOLIDAY_NAME = 'publicHolidayName';

    public const ACADEMIC_YEAR = 'academicYear';

    public const TERM = 'term';

    public const DAY_OF_CYCLE = 'dayOfCycle';

    public const DAY_OF_TERM = 'dayOfTerm';

    public const DAY_OF_ACADEMIC_YEAR = 'dayOfAcademicYear';

    public const ACADEMIC_HOLIDAY = 'academicHoliday';

    public const IS_GOOD_SCHOOL_DAY = 'isGoodSchoolDay';

    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::ACADEMIC_CALENDAR_DATE;

    /**
     * @param Query $query
     * @return AcademicCalendarDate[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_CALENDAR_DATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicCalendarDate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_CALENDAR_DATE, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
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
     * @return int
     */
    public function getCalendarYear()
    {
        return $this->getProperty('calendarYear');
    }

    /**
     * @param int $calendarYear
     */
    public function setCalendarYear(int $calendarYear = null)
    {
        $this->setProperty('calendarYear', $calendarYear);
    }

    /**
     * @return int
     */
    public function getCalendarMonth()
    {
        return $this->getProperty('calendarMonth');
    }

    /**
     * @param int $calendarMonth
     */
    public function setCalendarMonth(int $calendarMonth = null)
    {
        $this->setProperty('calendarMonth', $calendarMonth);
    }

    /**
     * @return int
     */
    public function getCalendarWeek()
    {
        return $this->getProperty('calendarWeek');
    }

    /**
     * @param int $calendarWeek
     */
    public function setCalendarWeek(int $calendarWeek = null)
    {
        $this->setProperty('calendarWeek', $calendarWeek);
    }

    /**
     * @return int
     */
    public function getCalendarDay()
    {
        return $this->getProperty('calendarDay');
    }

    /**
     * @param int $calendarDay
     */
    public function setCalendarDay(int $calendarDay = null)
    {
        $this->setProperty('calendarDay', $calendarDay);
    }

    /**
     * @return int
     */
    public function getCalendarDayOfWeek()
    {
        return $this->getProperty('calendarDayOfWeek');
    }

    /**
     * @param int $calendarDayOfWeek
     */
    public function setCalendarDayOfWeek(int $calendarDayOfWeek = null)
    {
        $this->setProperty('calendarDayOfWeek', $calendarDayOfWeek);
    }

    /**
     * @return bool
     */
    public function getIsPublicHoliday()
    {
        return $this->getProperty('isPublicHoliday');
    }

    /**
     * @param bool $isPublicHoliday
     */
    public function setIsPublicHoliday(bool $isPublicHoliday = null)
    {
        $this->setProperty('isPublicHoliday', $isPublicHoliday);
    }

    /**
     * @return string
     */
    public function getPublicHolidayName()
    {
        return $this->getProperty('publicHolidayName');
    }

    /**
     * @param string $publicHolidayName
     */
    public function setPublicHolidayName(string $publicHolidayName = null)
    {
        $this->setProperty('publicHolidayName', $publicHolidayName);
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
     * @return \Arbor\Model\Term
     */
    public function getTerm()
    {
        return $this->getProperty('term');
    }

    /**
     * @param \Arbor\Model\Term $term
     */
    public function setTerm(\Arbor\Model\Term $term = null)
    {
        $this->setProperty('term', $term);
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
    public function getDayOfTerm()
    {
        return $this->getProperty('dayOfTerm');
    }

    /**
     * @param int $dayOfTerm
     */
    public function setDayOfTerm(int $dayOfTerm = null)
    {
        $this->setProperty('dayOfTerm', $dayOfTerm);
    }

    /**
     * @return int
     */
    public function getDayOfAcademicYear()
    {
        return $this->getProperty('dayOfAcademicYear');
    }

    /**
     * @param int $dayOfAcademicYear
     */
    public function setDayOfAcademicYear(int $dayOfAcademicYear = null)
    {
        $this->setProperty('dayOfAcademicYear', $dayOfAcademicYear);
    }

    /**
     * @return \Arbor\Model\AcademicHoliday
     */
    public function getAcademicHoliday()
    {
        return $this->getProperty('academicHoliday');
    }

    /**
     * @param \Arbor\Model\AcademicHoliday $academicHoliday
     */
    public function setAcademicHoliday(\Arbor\Model\AcademicHoliday $academicHoliday = null)
    {
        $this->setProperty('academicHoliday', $academicHoliday);
    }

    /**
     * @return bool
     */
    public function getIsGoodSchoolDay()
    {
        return $this->getProperty('isGoodSchoolDay');
    }

    /**
     * @param bool $isGoodSchoolDay
     */
    public function setIsGoodSchoolDay(bool $isGoodSchoolDay = null)
    {
        $this->setProperty('isGoodSchoolDay', $isGoodSchoolDay);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }
}
