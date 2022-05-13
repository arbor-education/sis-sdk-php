<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentMetricAssessmentBatch extends ModelBase
{
    const ASSESSMENT_METRIC = 'assessmentMetric';

    const OPERATOR = 'operator';

    const PARENT_ASSESSMENT_METRIC_ASSESSMENT_BATCH = 'parentAssessmentMetricAssessmentBatch';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_ASSESSMENT_BATCH;

    /**
     * @param Query $query
     * @return AssessmentMetricAssessmentBatch[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_METRIC_ASSESSMENT_BATCH);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMetricAssessmentBatch
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_METRIC_ASSESSMENT_BATCH, $id);
    }

    /**
     * @return AssessmentMetric
     */
    public function getAssessmentMetric()
    {
        return $this->getProperty('assessmentMetric');
    }

    /**
     * @param AssessmentMetric $assessmentMetric
     */
    public function setAssessmentMetric(AssessmentMetric $assessmentMetric = null)
    {
        $this->setProperty('assessmentMetric', $assessmentMetric);
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->getProperty('operator');
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator = null)
    {
        $this->setProperty('operator', $operator);
    }

    /**
     * @return AssessmentMetricAssessmentBatch
     */
    public function getParentAssessmentMetricAssessmentBatch()
    {
        return $this->getProperty('parentAssessmentMetricAssessmentBatch');
    }

    /**
     * @param AssessmentMetricAssessmentBatch $parentAssessmentMetricAssessmentBatch
     */
    public function setParentAssessmentMetricAssessmentBatch(AssessmentMetricAssessmentBatch $parentAssessmentMetricAssessmentBatch = null)
    {
        $this->setProperty('parentAssessmentMetricAssessmentBatch', $parentAssessmentMetricAssessmentBatch);
    }

}
