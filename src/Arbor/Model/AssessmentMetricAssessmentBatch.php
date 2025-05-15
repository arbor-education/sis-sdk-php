<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMetricAssessmentBatch extends ModelBase
{
    public const ASSESSMENT_METRIC = 'assessmentMetric';

    public const OPERATOR = 'operator';

    public const PARENT_ASSESSMENT_METRIC_ASSESSMENT_BATCH = 'parentAssessmentMetricAssessmentBatch';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_ASSESSMENT_BATCH;

    /**
     * @param Query $query
     * @return AssessmentMetricAssessmentBatch[] | Collection
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
     * @return \Arbor\Model\AssessmentMetric
     */
    public function getAssessmentMetric()
    {
        return $this->getProperty('assessmentMetric');
    }

    /**
     * @param \Arbor\Model\AssessmentMetric $assessmentMetric
     */
    public function setAssessmentMetric(\Arbor\Model\AssessmentMetric $assessmentMetric = null)
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
    public function setOperator(string $operator = null)
    {
        $this->setProperty('operator', $operator);
    }

    /**
     * @return \Arbor\Model\AssessmentMetricAssessmentBatch
     */
    public function getParentAssessmentMetricAssessmentBatch()
    {
        return $this->getProperty('parentAssessmentMetricAssessmentBatch');
    }

    /**
     * @param \Arbor\Model\AssessmentMetricAssessmentBatch
     * $parentAssessmentMetricAssessmentBatch
     */
    public function setParentAssessmentMetricAssessmentBatch(\Arbor\Model\AssessmentMetricAssessmentBatch $parentAssessmentMetricAssessmentBatch = null)
    {
        $this->setProperty('parentAssessmentMetricAssessmentBatch', $parentAssessmentMetricAssessmentBatch);
    }
}
