<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicYearAssessment extends ModelBase
{
    public const ACADEMIC_YEAR = 'academicYear';

    public const ASSESSMENT_NAME = 'assessmentName';

    public const CURRICULUM_TIER = 'curriculumTier';

    public const ASSESSMENT_ENTITY = 'assessmentEntity';

    public const PROGRESS_MEASUREMENT_PERIOD_SET = 'progressMeasurementPeriodSet';

    public const IS_LINKED_TO_SUMMATIVE_TRACKING = 'isLinkedToSummativeTracking';

    public const SETUP_COMPLETED_DATETIME = 'setupCompletedDatetime';

    public const SETUP_COMPLETION_STARTED_DATETIME = 'setupCompletionStartedDatetime';

    public const DELETION_STARTED_DATETIME = 'deletionStartedDatetime';

    public const ALLOW_COMMENTS = 'allowComments';

    protected $_resourceType = ResourceType::ACADEMIC_YEAR_ASSESSMENT;

    /**
     * @param Query $query
     * @return AcademicYearAssessment[] | Collection
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
     * @return string
     */
    public function getAssessmentName()
    {
        return $this->getProperty('assessmentName');
    }

    /**
     * @param string $assessmentName
     */
    public function setAssessmentName(string $assessmentName = null)
    {
        $this->setProperty('assessmentName', $assessmentName);
    }

    /**
     * @return \Arbor\Model\CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param \Arbor\Model\CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(\Arbor\Model\CurriculumTier $curriculumTier = null)
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
    public function setAssessmentEntity(\ModelBase $assessmentEntity = null)
    {
        $this->setProperty('assessmentEntity', $assessmentEntity);
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
     * @return bool
     */
    public function getIsLinkedToSummativeTracking()
    {
        return $this->getProperty('isLinkedToSummativeTracking');
    }

    /**
     * @param bool $isLinkedToSummativeTracking
     */
    public function setIsLinkedToSummativeTracking(bool $isLinkedToSummativeTracking = null)
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

    /**
     * @return \DateTime
     */
    public function getDeletionStartedDatetime()
    {
        return $this->getProperty('deletionStartedDatetime');
    }

    /**
     * @param \DateTime $deletionStartedDatetime
     */
    public function setDeletionStartedDatetime(\DateTime $deletionStartedDatetime = null)
    {
        $this->setProperty('deletionStartedDatetime', $deletionStartedDatetime);
    }

    /**
     * @return bool
     */
    public function getAllowComments()
    {
        return $this->getProperty('allowComments');
    }

    /**
     * @param bool $allowComments
     */
    public function setAllowComments(bool $allowComments = null)
    {
        $this->setProperty('allowComments', $allowComments);
    }
}
