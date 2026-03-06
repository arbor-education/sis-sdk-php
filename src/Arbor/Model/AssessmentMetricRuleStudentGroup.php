<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMetricRuleStudentGroup extends ModelBase
{
    public const ASSESSMENT_METRIC_RULE = 'assessmentMetricRule';

    public const ACADEMIC_LEVEL = 'academicLevel';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC_RULE_STUDENT_GROUP;

    /**
     * @param Query $query
     * @return AssessmentMetricRuleStudentGroup[] | Collection
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
     * @return \Arbor\Model\AcademicLevel
     */
    public function getAcademicLevel()
    {
        return $this->getProperty('academicLevel');
    }

    /**
     * @param \Arbor\Model\AcademicLevel $academicLevel
     */
    public function setAcademicLevel(\Arbor\Model\AcademicLevel $academicLevel = null)
    {
        $this->setProperty('academicLevel', $academicLevel);
    }
}
