<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentMetricRuleGradeItem extends ModelBase
{
    const OPERATOR = 'operator';

    const GRADE = 'grade';

    const ASSESSMENT_METRIC_RULE = 'assessmentMetricRule';

    const ASSESSMENT_METRIC_ASSESSMENT = 'assessmentMetricAssessment';

    const ASSESSMENT = 'assessment';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_RULE_GRADE_ITEM;

    /**
     * @param Query $query
     * @return AssessmentMetricRuleGradeItem[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_METRIC_RULE_GRADE_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMetricRuleGradeItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_METRIC_RULE_GRADE_ITEM, $id);
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
     * @return Grade
     */
    public function getGrade()
    {
        return $this->getProperty('grade');
    }

    /**
     * @param Grade $grade
     */
    public function setGrade(Grade $grade = null)
    {
        $this->setProperty('grade', $grade);
    }

    /**
     * @return AssessmentMetricRule
     */
    public function getAssessmentMetricRule()
    {
        return $this->getProperty('assessmentMetricRule');
    }

    /**
     * @param AssessmentMetricRule $assessmentMetricRule
     */
    public function setAssessmentMetricRule(AssessmentMetricRule $assessmentMetricRule = null)
    {
        $this->setProperty('assessmentMetricRule', $assessmentMetricRule);
    }

    /**
     * @return AssessmentMetricAssessment
     */
    public function getAssessmentMetricAssessment()
    {
        return $this->getProperty('assessmentMetricAssessment');
    }

    /**
     * @param AssessmentMetricAssessment $assessmentMetricAssessment
     */
    public function setAssessmentMetricAssessment(AssessmentMetricAssessment $assessmentMetricAssessment = null)
    {
        $this->setProperty('assessmentMetricAssessment', $assessmentMetricAssessment);
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

}
