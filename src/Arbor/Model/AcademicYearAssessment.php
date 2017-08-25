<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

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
     * @param Query $query
     * @return AcademicYearAssessment[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_YEAR_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicYearAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_YEAR_ASSESSMENT, $id);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getAssessmentName()
    {
        return $this->getProperty('assessmentName');
    }

    /**
     * @param string $assessmentName
     */
    public function setAssessmentName($assessmentName = null)
    {
        $this->setProperty('assessmentName', $assessmentName);
    }

    /**
     * @return CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(CurriculumTier $curriculumTier = null)
    {
        $this->setProperty('curriculumTier', $curriculumTier);
    }

    /**
     * @return ModelBase
     */
    public function getAssessmentEntity()
    {
        return $this->getProperty('assessmentEntity');
    }

    /**
     * @param ModelBase $assessmentEntity
     */
    public function setAssessmentEntity(ModelBase $assessmentEntity = null)
    {
        $this->setProperty('assessmentEntity', $assessmentEntity);
    }

    /**
     * @return ProgressMeasurementPeriodSet
     */
    public function getProgressMeasurementPeriodSet()
    {
        return $this->getProperty('progressMeasurementPeriodSet');
    }

    /**
     * @param ProgressMeasurementPeriodSet $progressMeasurementPeriodSet
     */
    public function setProgressMeasurementPeriodSet(ProgressMeasurementPeriodSet $progressMeasurementPeriodSet = null)
    {
        $this->setProperty('progressMeasurementPeriodSet', $progressMeasurementPeriodSet);
    }

    /**
     * @return bool
     */
    public function getIsLinkedToSummativeTracking()
    {
        return $this->getProperty('isLinkedToSummativeTracking');
    }

    /**
     * @param bool $isLinkedToSummativeTracking
     */
    public function setIsLinkedToSummativeTracking($isLinkedToSummativeTracking = null)
    {
        $this->setProperty('isLinkedToSummativeTracking', $isLinkedToSummativeTracking);
    }

    /**
     * @return \DateTime
     */
    public function getSetupCompletedDatetime()
    {
        return $this->getProperty('setupCompletedDatetime');
    }

    /**
     * @param \DateTime $setupCompletedDatetime
     */
    public function setSetupCompletedDatetime(\DateTime $setupCompletedDatetime = null)
    {
        $this->setProperty('setupCompletedDatetime', $setupCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSetupCompletionStartedDatetime()
    {
        return $this->getProperty('setupCompletionStartedDatetime');
    }

    /**
     * @param \DateTime $setupCompletionStartedDatetime
     */
    public function setSetupCompletionStartedDatetime(\DateTime $setupCompletionStartedDatetime = null)
    {
        $this->setProperty('setupCompletionStartedDatetime', $setupCompletionStartedDatetime);
    }
}
