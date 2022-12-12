<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentMetricAssessment extends ModelBase
{
    const ASSESSMENT_METRIC = 'assessmentMetric';

    const ASSESSMENT = 'assessment';

    const ASSESSMENT_METRIC_ASSESSMENT_BATCH = 'assessmentMetricAssessmentBatch';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_ASSESSMENT;

    /**
     * @param Query $query
     * @return AssessmentMetricAssessment[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_METRIC_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMetricAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_METRIC_ASSESSMENT, $id);
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
     * @return AssessmentMetricAssessmentBatch
     */
    public function getAssessmentMetricAssessmentBatch()
    {
        return $this->getProperty('assessmentMetricAssessmentBatch');
    }

    /**
     * @param AssessmentMetricAssessmentBatch $assessmentMetricAssessmentBatch
     */
    public function setAssessmentMetricAssessmentBatch(AssessmentMetricAssessmentBatch $assessmentMetricAssessmentBatch = null)
    {
        $this->setProperty('assessmentMetricAssessmentBatch', $assessmentMetricAssessmentBatch);
    }
}
