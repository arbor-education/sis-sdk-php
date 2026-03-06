<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicHoliday extends ModelBase
{
    public const ACADEMIC_HOLIDAY_TYPE = 'academicHolidayType';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const HOLIDAY_LABEL = 'holidayLabel';

    protected $_resourceType = ResourceType::ACADEMIC_HOLIDAY;

    /**
     * @param Query $query
     * @return AcademicHoliday[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_HOLIDAY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicHoliday
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_HOLIDAY, $id);
    }

    /**
     * @return string
     */
    public function getAcademicHolidayType()
    {
        return $this->getProperty('academicHolidayType');
    }

    /**
     * @param string $academicHolidayType
     */
    public function setAcademicHolidayType(string $academicHolidayType = null)
    {
        $this->setProperty('academicHolidayType', $academicHolidayType);
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
     * @return string
     */
    public function getHolidayLabel()
    {
        return $this->getProperty('holidayLabel');
    }

    /**
     * @param string $holidayLabel
     */
    public function setHolidayLabel(string $holidayLabel = null)
    {
        $this->setProperty('holidayLabel', $holidayLabel);
    }
}
