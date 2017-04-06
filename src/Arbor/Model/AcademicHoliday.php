<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class AcademicHoliday extends ModelBase
{

    const ACADEMIC_HOLIDAY_TYPE = 'academicHolidayType';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const HOLIDAY_LABEL = 'holidayLabel';

    const CONSIDER_AS_DAY_OF_TIMETABLE_CYCLE = 'considerAsDayOfTimetableCycle';

    protected $_resourceType = ResourceType::ACADEMIC_HOLIDAY;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicHoliday[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AcademicHoliday");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicHoliday
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ACADEMIC_HOLIDAY, $id);
    }

    /**
     * @return string
     */
    public function getAcademicHolidayType()
    {
        return $this->getProperty("academicHolidayType");
    }

    /**
     * @param string $academicHolidayType
     */
    public function setAcademicHolidayType($academicHolidayType = null)
    {
        $this->setProperty("academicHolidayType", $academicHolidayType);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
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
    public function getHolidayLabel()
    {
        return $this->getProperty("holidayLabel");
    }

    /**
     * @param string $holidayLabel
     */
    public function setHolidayLabel($holidayLabel = null)
    {
        $this->setProperty("holidayLabel", $holidayLabel);
    }

    /**
     * @return bool
     */
    public function getConsiderAsDayOfTimetableCycle()
    {
        return $this->getProperty("considerAsDayOfTimetableCycle");
    }

    /**
     * @param bool $considerAsDayOfTimetableCycle
     */
    public function setConsiderAsDayOfTimetableCycle($considerAsDayOfTimetableCycle = null)
    {
        $this->setProperty("considerAsDayOfTimetableCycle", $considerAsDayOfTimetableCycle);
    }


}
