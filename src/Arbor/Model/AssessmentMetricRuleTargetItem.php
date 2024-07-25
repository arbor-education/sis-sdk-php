<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMetricRuleTargetItem extends ModelBase
{
    public const OPERATOR = 'operator';

    public const TARGET_TYPE = 'targetType';

    public const ASSESSMENT_METRIC_RULE = 'assessmentMetricRule';

    public const ASSESSMENT_METRIC_ASSESSMENT = 'assessmentMetricAssessment';

    public const ASSESSMENT = 'assessment';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_RULE_TARGET_ITEM;

    /**
     * @param Query $query
     * @return AssessmentMetricRuleTargetItem[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_METRIC_RULE_TARGET_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMetricRuleTargetItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_METRIC_RULE_TARGET_ITEM, $id);
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
     * @return string
     */
    public function getTargetType()
    {
        return $this->getProperty('targetType');
    }

    /**
     * @param string $targetType
     */
    public function setTargetType(string $targetType = null)
    {
        $this->setProperty('targetType', $targetType);
    }

    /**
     * @return \Arbor\Model\AssessmentMetricRule
     */
    public function getAssessmentMetricRule()
    {
        return $this->getProperty('assessmentMetricRule');
    }

    /**
     * @param \Arbor\Model\AssessmentMetricRule $assessmentMetricRule
     */
    public function setAssessmentMetricRule(\Arbor\Model\AssessmentMetricRule $assessmentMetricRule = null)
    {
        $this->setProperty('assessmentMetricRule', $assessmentMetricRule);
    }

    /**
     * @return \Arbor\Model\AssessmentMetricAssessment
     */
    public function getAssessmentMetricAssessment()
    {
        return $this->getProperty('assessmentMetricAssessment');
    }

    /**
     * @param \Arbor\Model\AssessmentMetricAssessment $assessmentMetricAssessment
     */
    public function setAssessmentMetricAssessment(\Arbor\Model\AssessmentMetricAssessment $assessmentMetricAssessment = null)
    {
        $this->setProperty('assessmentMetricAssessment', $assessmentMetricAssessment);
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
}
