<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentMetricRule extends ModelBase
{

    const ASSESSMENT_METRIC = 'assessmentMetric';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_RULE;

    /**
     * @param Query $query
     * @return AssessmentMetricRule[] | Collection
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


}
