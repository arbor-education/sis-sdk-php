<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class AcademicYear extends ModelBase
{
    const ACADEMIC_YEAR_NAME = 'academicYearName';

    const CODE = 'code';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const TIMETABLE_CYCLE_LENGTH = 'timetableCycleLength';

    const TIMETABLE_CYCLE_RESETS_EACH_TERM = 'timetableCycleResetsEachTerm';

    protected $_resourceType = ResourceType::ACADEMIC_YEAR;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicYear[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AcademicYear");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicYear
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ACADEMIC_YEAR, $id);
    }

    /**
     * @return string
     */
    public function getAcademicYearName()
    {
        return $this->getProperty("academicYearName");
    }

    /**
     * @param string $academicYearName
     */
    public function setAcademicYearName($academicYearName = null)
    {
        $this->setProperty("academicYearName", $academicYearName);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
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
     * @return int
     */
    public function getTimetableCycleLength()
    {
        return $this->getProperty("timetableCycleLength");
    }

    /**
     * @param int $timetableCycleLength
     */
    public function setTimetableCycleLength($timetableCycleLength = null)
    {
        $this->setProperty("timetableCycleLength", $timetableCycleLength);
    }

    /**
     * @return bool
     */
    public function getTimetableCycleResetsEachTerm()
    {
        return $this->getProperty("timetableCycleResetsEachTerm");
    }

    /**
     * @param bool $timetableCycleResetsEachTerm
     */
    public function setTimetableCycleResetsEachTerm($timetableCycleResetsEachTerm = null)
    {
        $this->setProperty("timetableCycleResetsEachTerm", $timetableCycleResetsEachTerm);
    }
}
