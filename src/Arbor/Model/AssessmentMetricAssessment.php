<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMetricAssessment extends ModelBase
{
    public const ASSESSMENT_METRIC = 'assessmentMetric';

    public const ASSESSMENT = 'assessment';

    public const ASSESSMENT_METRIC_ASSESSMENT_BATCH = 'assessmentMetricAssessmentBatch';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_ASSESSMENT;

    /**
     * @param Query $query
     * @return AssessmentMetricAssessment[] | Collection
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
     * @return \Arbor\Model\AssessmentMetricAssessmentBatch
     */
    public function getAssessmentMetricAssessmentBatch()
    {
        return $this->getProperty('assessmentMetricAssessmentBatch');
    }

    /**
     * @param \Arbor\Model\AssessmentMetricAssessmentBatch
     * $assessmentMetricAssessmentBatch
     */
    public function setAssessmentMetricAssessmentBatch(\Arbor\Model\AssessmentMetricAssessmentBatch $assessmentMetricAssessmentBatch = null)
    {
        $this->setProperty('assessmentMetricAssessmentBatch', $assessmentMetricAssessmentBatch);
    }
}
