<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicYear extends ModelBase
{
    public const ACADEMIC_YEAR_NAME = 'academicYearName';

    public const CODE = 'code';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const TIMETABLE_CYCLE_LENGTH = 'timetableCycleLength';

    protected $_resourceType = ResourceType::ACADEMIC_YEAR;

    /**
     * @param Query $query
     * @return AcademicYear[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_YEAR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicYear
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_YEAR, $id);
    }

    /**
     * @return string
     */
    public function getAcademicYearName()
    {
        return $this->getProperty('academicYearName');
    }

    /**
     * @param string $academicYearName
     */
    public function setAcademicYearName(string $academicYearName = null)
    {
        $this->setProperty('academicYearName', $academicYearName);
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
    public function getTimetableCycleLength()
    {
        return $this->getProperty('timetableCycleLength');
    }

    /**
     * @param int $timetableCycleLength
     */
    public function setTimetableCycleLength(int $timetableCycleLength = null)
    {
        $this->setProperty('timetableCycleLength', $timetableCycleLength);
    }
}
