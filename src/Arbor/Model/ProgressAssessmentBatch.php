<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgressAssessmentBatch extends ModelBase
{
    public const BATCH_NAME = 'batchName';

    public const ASSESSMENT = 'assessment';

    public const PROGRESS_MEASUREMENT_PERIOD_SET = 'progressMeasurementPeriodSet';

    public const ACADEMIC_YEAR = 'academicYear';

    public const IS_BASELINE_LOCKED = 'isBaselineLocked';

    public const IS_TARGET_LOCKED = 'isTargetLocked';

    public const SHOW_RANK_ORDER = 'showRankOrder';

    public const SHOW_CURRENT_VS_BASELINE = 'showCurrentVsBaseline';

    public const SHOW_CURRENT_VS_YEAR_TARGET = 'showCurrentVsYearTarget';

    public const SHOW_CURRENT_VS_PREDICTED = 'showCurrentVsPredicted';

    public const SHOW_CURRENT_VS_PREVIOUS = 'showCurrentVsPrevious';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH;

    /**
     * @param Query $query
     * @return ProgressAssessmentBatch[] | Collection
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

        $query->setResourceType(ResourceType::PROGRESS_ASSESSMENT_BATCH);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgressAssessmentBatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_BATCH, $id);
    }

    /**
     * @return string
     */
    public function getBatchName()
    {
        return $this->getProperty('batchName');
    }

    /**
     * @param string $batchName
     */
    public function setBatchName(string $batchName = null)
    {
        $this->setProperty('batchName', $batchName);
    }

    /**
     * @return \Arbor\Model\Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param \Arbor\Model\Assessment $assessment
     */
    public function setAssessment(\Arbor\Model\Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
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
     * @return bool
     */
    public function getIsBaselineLocked()
    {
        return $this->getProperty('isBaselineLocked');
    }

    /**
     * @param bool $isBaselineLocked
     */
    public function setIsBaselineLocked(bool $isBaselineLocked = null)
    {
        $this->setProperty('isBaselineLocked', $isBaselineLocked);
    }

    /**
     * @return bool
     */
    public function getIsTargetLocked()
    {
        return $this->getProperty('isTargetLocked');
    }

    /**
     * @param bool $isTargetLocked
     */
    public function setIsTargetLocked(bool $isTargetLocked = null)
    {
        $this->setProperty('isTargetLocked', $isTargetLocked);
    }

    /**
     * @return bool
     */
    public function getShowRankOrder()
    {
        return $this->getProperty('showRankOrder');
    }

    /**
     * @param bool $showRankOrder
     */
    public function setShowRankOrder(bool $showRankOrder = null)
    {
        $this->setProperty('showRankOrder', $showRankOrder);
    }

    /**
     * @return bool
     */
    public function getShowCurrentVsBaseline()
    {
        return $this->getProperty('showCurrentVsBaseline');
    }

    /**
     * @param bool $showCurrentVsBaseline
     */
    public function setShowCurrentVsBaseline(bool $showCurrentVsBaseline = null)
    {
        $this->setProperty('showCurrentVsBaseline', $showCurrentVsBaseline);
    }

    /**
     * @return bool
     */
    public function getShowCurrentVsYearTarget()
    {
        return $this->getProperty('showCurrentVsYearTarget');
    }

    /**
     * @param bool $showCurrentVsYearTarget
     */
    public function setShowCurrentVsYearTarget(bool $showCurrentVsYearTarget = null)
    {
        $this->setProperty('showCurrentVsYearTarget', $showCurrentVsYearTarget);
    }

    /**
     * @return bool
     */
    public function getShowCurrentVsPredicted()
    {
        return $this->getProperty('showCurrentVsPredicted');
    }

    /**
     * @param bool $showCurrentVsPredicted
     */
    public function setShowCurrentVsPredicted(bool $showCurrentVsPredicted = null)
    {
        $this->setProperty('showCurrentVsPredicted', $showCurrentVsPredicted);
    }

    /**
     * @return bool
     */
    public function getShowCurrentVsPrevious()
    {
        return $this->getProperty('showCurrentVsPrevious');
    }

    /**
     * @param bool $showCurrentVsPrevious
     */
    public function setShowCurrentVsPrevious(bool $showCurrentVsPrevious = null)
    {
        $this->setProperty('showCurrentVsPrevious', $showCurrentVsPrevious);
    }
}
