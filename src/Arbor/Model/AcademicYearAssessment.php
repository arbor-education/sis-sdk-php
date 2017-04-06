<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\CurriculumTier;
use \Arbor\Model\ProgressMeasurementPeriodSet;

class AcademicYearAssessment extends ModelBase
{

    const ACADEMIC_YEAR = 'academicYear';

    const ASSESSMENT_NAME = 'assessmentName';

    const CURRICULUM_TIER = 'curriculumTier';

    const ASSESSMENT_ENTITY = 'assessmentEntity';

    const PROGRESS_MEASUREMENT_PERIOD_SET = 'progressMeasurementPeriodSet';

    const IS_LINKED_TO_SUMMATIVE_TRACKING = 'isLinkedToSummativeTracking';

    const SETUP_COMPLETED_DATETIME = 'setupCompletedDatetime';

    const SETUP_COMPLETION_STARTED_DATETIME = 'setupCompletionStartedDatetime';

    protected $_resourceType = ResourceType::ACADEMIC_YEAR_ASSESSMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicYearAssessment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AcademicYearAssessment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicYearAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ACADEMIC_YEAR_ASSESSMENT, $id);
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
    public function getAssessmentName()
    {
        return $this->getProperty("assessmentName");
    }

    /**
     * @param string $assessmentName
     */
    public function setAssessmentName($assessmentName = null)
    {
        $this->setProperty("assessmentName", $assessmentName);
    }

    /**
     * @return CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty("curriculumTier");
    }

    /**
     * @param CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(CurriculumTier $curriculumTier = null)
    {
        $this->setProperty("curriculumTier", $curriculumTier);
    }

    /**
     * @return ModelBase
     */
    public function getAssessmentEntity()
    {
        return $this->getProperty("assessmentEntity");
    }

    /**
     * @param ModelBase $assessmentEntity
     */
    public function setAssessmentEntity(ModelBase $assessmentEntity = null)
    {
        $this->setProperty("assessmentEntity", $assessmentEntity);
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
     * @return bool
     */
    public function getIsLinkedToSummativeTracking()
    {
        return $this->getProperty("isLinkedToSummativeTracking");
    }

    /**
     * @param bool $isLinkedToSummativeTracking
     */
    public function setIsLinkedToSummativeTracking($isLinkedToSummativeTracking = null)
    {
        $this->setProperty("isLinkedToSummativeTracking", $isLinkedToSummativeTracking);
    }

    /**
     * @return \DateTime
     */
    public function getSetupCompletedDatetime()
    {
        return $this->getProperty("setupCompletedDatetime");
    }

    /**
     * @param \DateTime $setupCompletedDatetime
     */
    public function setSetupCompletedDatetime(\DateTime $setupCompletedDatetime = null)
    {
        $this->setProperty("setupCompletedDatetime", $setupCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSetupCompletionStartedDatetime()
    {
        return $this->getProperty("setupCompletionStartedDatetime");
    }

    /**
     * @param \DateTime $setupCompletionStartedDatetime
     */
    public function setSetupCompletionStartedDatetime(\DateTime $setupCompletionStartedDatetime = null)
    {
        $this->setProperty("setupCompletionStartedDatetime", $setupCompletionStartedDatetime);
    }


}
