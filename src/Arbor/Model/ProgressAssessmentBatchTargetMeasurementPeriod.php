<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgressAssessmentBatchTargetMeasurementPeriod extends ModelBase
{
    public const PROGRESS_ASSESSMENT_BATCH_TARGET = 'progressAssessmentBatchTarget';

    public const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    public const MARKING_STARTED_DATETIME = 'markingStartedDatetime';

    public const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    public const MARKING_FINALIZED_DATETIME = 'markingFinalizedDatetime';

    public const ALL_MARKS_APPROVED = 'allMarksApproved';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET_MEASUREMENT_PERIOD;

    /**
     * @param Query $query
     * @return ProgressAssessmentBatchTargetMeasurementPeriod[] | Collection
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

        $query->setResourceType(ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET_MEASUREMENT_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgressAssessmentBatchTargetMeasurementPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET_MEASUREMENT_PERIOD, $id);
    }

    /**
     * @return \Arbor\Model\ProgressAssessmentBatchTarget
     */
    public function getProgressAssessmentBatchTarget()
    {
        return $this->getProperty('progressAssessmentBatchTarget');
    }

    /**
     * @param \Arbor\Model\ProgressAssessmentBatchTarget $progressAssessmentBatchTarget
     */
    public function setProgressAssessmentBatchTarget(\Arbor\Model\ProgressAssessmentBatchTarget $progressAssessmentBatchTarget = null)
    {
        $this->setProperty('progressAssessmentBatchTarget', $progressAssessmentBatchTarget);
    }

    /**
     * @return \Arbor\Model\ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty('progressMeasurementPeriod');
    }

    /**
     * @param \Arbor\Model\ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(\Arbor\Model\ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty('progressMeasurementPeriod', $progressMeasurementPeriod);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingStartedDatetime()
    {
        return $this->getProperty('markingStartedDatetime');
    }

    /**
     * @param \DateTime $markingStartedDatetime
     */
    public function setMarkingStartedDatetime(\DateTime $markingStartedDatetime = null)
    {
        $this->setProperty('markingStartedDatetime', $markingStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingCompletedDatetime()
    {
        return $this->getProperty('markingCompletedDatetime');
    }

    /**
     * @param \DateTime $markingCompletedDatetime
     */
    public function setMarkingCompletedDatetime(\DateTime $markingCompletedDatetime = null)
    {
        $this->setProperty('markingCompletedDatetime', $markingCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingFinalizedDatetime()
    {
        return $this->getProperty('markingFinalizedDatetime');
    }

    /**
     * @param \DateTime $markingFinalizedDatetime
     */
    public function setMarkingFinalizedDatetime(\DateTime $markingFinalizedDatetime = null)
    {
        $this->setProperty('markingFinalizedDatetime', $markingFinalizedDatetime);
    }

    /**
     * @return bool
     */
    public function getAllMarksApproved()
    {
        return $this->getProperty('allMarksApproved');
    }

    /**
     * @param bool $allMarksApproved
     */
    public function setAllMarksApproved(bool $allMarksApproved = null)
    {
        $this->setProperty('allMarksApproved', $allMarksApproved);
    }
}
