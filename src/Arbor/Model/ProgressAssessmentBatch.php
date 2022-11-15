<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgressAssessmentBatch extends ModelBase
{
    const BATCH_NAME = 'batchName';

    const ASSESSMENT = 'assessment';

    const PROGRESS_MEASUREMENT_PERIOD_SET = 'progressMeasurementPeriodSet';

    const ACADEMIC_YEAR = 'academicYear';

    const IS_BASELINE_LOCKED = 'isBaselineLocked';

    const IS_TARGET_LOCKED = 'isTargetLocked';

    const SHOW_RANK_ORDER = 'showRankOrder';

    const SHOW_CURRENT_VS_BASELINE = 'showCurrentVsBaseline';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH;

    /**
     * @param Query $query
     * @return ProgressAssessmentBatch[] | Collection
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
    public function setBatchName($batchName = null)
    {
        $this->setProperty('batchName', $batchName);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
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
     * @return bool
     */
    public function getIsBaselineLocked()
    {
        return $this->getProperty('isBaselineLocked');
    }

    /**
     * @param bool $isBaselineLocked
     */
    public function setIsBaselineLocked($isBaselineLocked = null)
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
    public function setIsTargetLocked($isTargetLocked = null)
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
    public function setShowRankOrder($showRankOrder = null)
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
    public function setShowCurrentVsBaseline($showCurrentVsBaseline = null)
    {
        $this->setProperty('showCurrentVsBaseline', $showCurrentVsBaseline);
    }
}
