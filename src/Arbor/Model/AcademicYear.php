<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicYear extends ModelBase
{
    const ACADEMIC_YEAR_NAME = 'academicYearName';

    const CODE = 'code';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const TIMETABLE_CYCLE_LENGTH = 'timetableCycleLength';

    protected $_resourceType = ResourceType::ACADEMIC_YEAR;

    /**
     * @param Query $query
     * @return AcademicYear[] | Collection
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
    public function setAcademicYearName($academicYearName = null)
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
    public function setCode($code = null)
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
    public function setTimetableCycleLength($timetableCycleLength = null)
    {
        $this->setProperty('timetableCycleLength', $timetableCycleLength);
    }
}
