<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Assessment;
use \Arbor\Model\ProgressMeasurementPeriodSet;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\AcademicYearAssessment;

class ProgressAssessmentBatch extends ModelBase
{
    const BATCH_NAME = 'batchName';

    const ASSESSMENT = 'assessment';

    const PROGRESS_MEASUREMENT_PERIOD_SET = 'progressMeasurementPeriodSet';

    const ACADEMIC_YEAR = 'academicYear';

    const ACADEMIC_YEAR_ASSESSMENT = 'academicYearAssessment';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgressAssessmentBatch[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ProgressAssessmentBatch");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgressAssessmentBatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_BATCH, $id);
    }

    /**
     * @return string
     */
    public function getBatchName()
    {
        return $this->getProperty("batchName");
    }

    /**
     * @param string $batchName
     */
    public function setBatchName($batchName = null)
    {
        $this->setProperty("batchName", $batchName);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty("assessment");
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty("assessment", $assessment);
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
     * @return AcademicYearAssessment
     */
    public function getAcademicYearAssessment()
    {
        return $this->getProperty("academicYearAssessment");
    }

    /**
     * @param AcademicYearAssessment $academicYearAssessment
     */
    public function setAcademicYearAssessment(AcademicYearAssessment $academicYearAssessment = null)
    {
        $this->setProperty("academicYearAssessment", $academicYearAssessment);
    }
}
