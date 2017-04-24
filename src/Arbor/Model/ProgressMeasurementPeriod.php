<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ProgressMeasurementPeriodSet;
use \Arbor\Model\AcademicYear;

class ProgressMeasurementPeriod extends ModelBase
{
    const PROGRESS_MEASUREMENT_PERIOD_SET = 'progressMeasurementPeriodSet';

    const PERIOD_NAME = 'periodName';

    const SHORT_NAME = 'shortName';

    const ACADEMIC_YEAR = 'academicYear';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::PROGRESS_MEASUREMENT_PERIOD;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgressMeasurementPeriod[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ProgressMeasurementPeriod");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgressMeasurementPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PROGRESS_MEASUREMENT_PERIOD, $id);
    }

    /**
     * @return ProgressMeasurementPeriodSet
     */
    public function getProgressMeasurementPeriodSet()
    {
        return $this->getProperty("progressMeasurementPeriodSet");
    }

    /**
     * @param ProgressMeasurementPeriodSet $progressMeasurementPeriodSet
     */
    public function setProgressMeasurementPeriodSet(ProgressMeasurementPeriodSet $progressMeasurementPeriodSet = null)
    {
        $this->setProperty("progressMeasurementPeriodSet", $progressMeasurementPeriodSet);
    }

    /**
     * @return string
     */
    public function getPeriodName()
    {
        return $this->getProperty("periodName");
    }

    /**
     * @param string $periodName
     */
    public function setPeriodName($periodName = null)
    {
        $this->setProperty("periodName", $periodName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
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
}
