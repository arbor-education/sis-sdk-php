<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgressAssessmentBatchMeasurementPeriod extends ModelBase
{
    public const PROGRESS_ASSESSMENT_BATCH = 'progressAssessmentBatch';

    public const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH_MEASUREMENT_PERIOD;

    /**
     * @param Query $query
     * @return ProgressAssessmentBatchMeasurementPeriod[] | Collection
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
     * @return \Arbor\Model\ProgressAssessmentBatch
     */
    public function getProgressAssessmentBatch()
    {
        return $this->getProperty('progressAssessmentBatch');
    }

    /**
     * @param \Arbor\Model\ProgressAssessmentBatch $progressAssessmentBatch
     */
    public function setProgressAssessmentBatch(\Arbor\Model\ProgressAssessmentBatch $progressAssessmentBatch = null)
    {
        $this->setProperty('progressAssessmentBatch', $progressAssessmentBatch);
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
}
