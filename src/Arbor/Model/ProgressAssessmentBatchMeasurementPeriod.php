<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgressAssessmentBatchMeasurementPeriod extends \ModelBase
{
    public const PROGRESS_ASSESSMENT_BATCH = 'progressAssessmentBatch';

    public const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH_MEASUREMENT_PERIOD;

    /**
     * @param Query $query
     * @return ProgressAssessmentBatchMeasurementPeriod[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::PROGRESS_ASSESSMENT_BATCH_MEASUREMENT_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgressAssessmentBatchMeasurementPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_BATCH_MEASUREMENT_PERIOD, $id);
    }

    /**
     * @return ProgressAssessmentBatch
     */
    public function getProgressAssessmentBatch()
    {
        return $this->getProperty('progressAssessmentBatch');
    }

    /**
     * @param ProgressAssessmentBatch $progressAssessmentBatch
     */
    public function setProgressAssessmentBatch(\ProgressAssessmentBatch $progressAssessmentBatch = null)
    {
        $this->setProperty('progressAssessmentBatch', $progressAssessmentBatch);
    }

    /**
     * @return ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty('progressMeasurementPeriod');
    }

    /**
     * @param ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(\ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty('progressMeasurementPeriod', $progressMeasurementPeriod);
    }
}
