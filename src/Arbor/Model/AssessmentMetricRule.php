<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMetricRule extends ModelBase
{
    public const ASSESSMENT_METRIC = 'assessmentMetric';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_RULE;

    /**
     * @param Query $query
     * @return AssessmentMetricRule[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_METRIC_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMetricRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_METRIC_RULE, $id);
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
}
