<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentMetricRuleStudentGroup extends ModelBase
{
    const ASSESSMENT_METRIC_RULE = 'assessmentMetricRule';

    const ACADEMIC_LEVEL = 'academicLevel';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_RULE_STUDENT_GROUP;

    /**
     * @param Query $query
     * @return AssessmentMetricRuleStudentGroup[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_METRIC_RULE_STUDENT_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMetricRuleStudentGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_METRIC_RULE_STUDENT_GROUP, $id);
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
     * @return AcademicLevel
     */
    public function getAcademicLevel()
    {
        return $this->getProperty('academicLevel');
    }

    /**
     * @param AcademicLevel $academicLevel
     */
    public function setAcademicLevel(AcademicLevel $academicLevel = null)
    {
        $this->setProperty('academicLevel', $academicLevel);
    }
}
