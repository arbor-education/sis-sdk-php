<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgressMeasurementPeriod extends ModelBase
{
    public const PROGRESS_MEASUREMENT_PERIOD_SET = 'progressMeasurementPeriodSet';

    public const PERIOD_NAME = 'periodName';

    public const SHORT_NAME = 'shortName';

    public const ACADEMIC_YEAR = 'academicYear';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::PROGRESS_MEASUREMENT_PERIOD;

    /**
     * @param Query $query
     * @return ProgressMeasurementPeriod[] | Collection
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

        $query->setResourceType(ResourceType::PROGRESS_MEASUREMENT_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgressMeasurementPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRESS_MEASUREMENT_PERIOD, $id);
    }

    /**
     * @return \Arbor\Model\ProgressMeasurementPeriodSet
     */
    public function getProgressMeasurementPeriodSet()
    {
        return $this->getProperty('progressMeasurementPeriodSet');
    }

    /**
     * @param \Arbor\Model\ProgressMeasurementPeriodSet $progressMeasurementPeriodSet
     */
    public function setProgressMeasurementPeriodSet(\Arbor\Model\ProgressMeasurementPeriodSet $progressMeasurementPeriodSet = null)
    {
        $this->setProperty('progressMeasurementPeriodSet', $progressMeasurementPeriodSet);
    }

    /**
     * @return string
     */
    public function getPeriodName()
    {
        return $this->getProperty('periodName');
    }

    /**
     * @param string $periodName
     */
    public function setPeriodName(string $periodName = null)
    {
        $this->setProperty('periodName', $periodName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
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
}
