<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicCalendarDate extends ModelBase
{
    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const CALENDAR_YEAR = 'calendarYear';

    const CALENDAR_MONTH = 'calendarMonth';

    const CALENDAR_WEEK = 'calendarWeek';

    const CALENDAR_DAY = 'calendarDay';

    const CALENDAR_DAY_OF_WEEK = 'calendarDayOfWeek';

    const IS_PUBLIC_HOLIDAY = 'isPublicHoliday';

    const PUBLIC_HOLIDAY_NAME = 'publicHolidayName';

    const ACADEMIC_YEAR = 'academicYear';

    const TERM = 'term';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const DAY_OF_TERM = 'dayOfTerm';

    const DAY_OF_ACADEMIC_YEAR = 'dayOfAcademicYear';

    const ACADEMIC_HOLIDAY = 'academicHoliday';

    const IS_GOOD_SCHOOL_DAY = 'isGoodSchoolDay';

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::ACADEMIC_CALENDAR_DATE;

    /**
     * @param Query $query
     * @return AcademicCalendarDate[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
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
    public function setCalendarYear($calendarYear = null)
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
    public function setCalendarMonth($calendarMonth = null)
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
    public function setCalendarWeek($calendarWeek = null)
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
    public function setCalendarDay($calendarDay = null)
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
    public function setCalendarDayOfWeek($calendarDayOfWeek = null)
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
    public function setIsPublicHoliday($isPublicHoliday = null)
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
    public function setPublicHolidayName($publicHolidayName = null)
    {
        $this->setProperty('publicHolidayName', $publicHolidayName);
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
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return Term
     */
    public function getTerm()
    {
        return $this->getProperty('term');
    }

    /**
     * @param Term $term
     */
    public function setTerm(Term $term = null)
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
    public function setDayOfCycle($dayOfCycle = null)
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
    public function setDayOfTerm($dayOfTerm = null)
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
    public function setDayOfAcademicYear($dayOfAcademicYear = null)
    {
        $this->setProperty('dayOfAcademicYear', $dayOfAcademicYear);
    }

    /**
     * @return AcademicHoliday
     */
    public function getAcademicHoliday()
    {
        return $this->getProperty('academicHoliday');
    }

    /**
     * @param AcademicHoliday $academicHoliday
     */
    public function setAcademicHoliday(AcademicHoliday $academicHoliday = null)
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
    public function setIsGoodSchoolDay($isGoodSchoolDay = null)
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

}
