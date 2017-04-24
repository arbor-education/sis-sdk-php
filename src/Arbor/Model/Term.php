<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class Term extends ModelBase
{
    const ACADEMIC_YEAR = 'academicYear';

    const TERM_NAME = 'termName';

    const SHORT_TERM_NAME = 'shortTermName';

    const CODE = 'code';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const TIMETABLE_CYCLE_OFFSET = 'timetableCycleOffset';

    protected $_resourceType = ResourceType::TERM;

    /**
     * @param \Arbor\Query\Query $query
     * @return Term[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Term");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Term
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TERM, $id);
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
     * @return string
     */
    public function getTermName()
    {
        return $this->getProperty("termName");
    }

    /**
     * @param string $termName
     */
    public function setTermName($termName = null)
    {
        $this->setProperty("termName", $termName);
    }

    /**
     * @return string
     */
    public function getShortTermName()
    {
        return $this->getProperty("shortTermName");
    }

    /**
     * @param string $shortTermName
     */
    public function setShortTermName($shortTermName = null)
    {
        $this->setProperty("shortTermName", $shortTermName);
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
    public function getTimetableCycleOffset()
    {
        return $this->getProperty("timetableCycleOffset");
    }

    /**
     * @param int $timetableCycleOffset
     */
    public function setTimetableCycleOffset($timetableCycleOffset = null)
    {
        $this->setProperty("timetableCycleOffset", $timetableCycleOffset);
    }
}
