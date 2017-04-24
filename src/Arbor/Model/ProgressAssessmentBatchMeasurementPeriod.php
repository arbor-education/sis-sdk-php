<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ProgressAssessmentBatch;
use \Arbor\Model\ProgressMeasurementPeriod;

class ProgressAssessmentBatchMeasurementPeriod extends ModelBase
{
    const PROGRESS_ASSESSMENT_BATCH = 'progressAssessmentBatch';

    const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH_MEASUREMENT_PERIOD;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgressAssessmentBatchMeasurementPeriod[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ProgressAssessmentBatchMeasurementPeriod");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgressAssessmentBatchMeasurementPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_BATCH_MEASUREMENT_PERIOD, $id);
    }

    /**
     * @return ProgressAssessmentBatch
     */
    public function getProgressAssessmentBatch()
    {
        return $this->getProperty("progressAssessmentBatch");
    }

    /**
     * @param ProgressAssessmentBatch $progressAssessmentBatch
     */
    public function setProgressAssessmentBatch(ProgressAssessmentBatch $progressAssessmentBatch = null)
    {
        $this->setProperty("progressAssessmentBatch", $progressAssessmentBatch);
    }

    /**
     * @return ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty("progressMeasurementPeriod");
    }

    /**
     * @param ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty("progressMeasurementPeriod", $progressMeasurementPeriod);
    }
}
