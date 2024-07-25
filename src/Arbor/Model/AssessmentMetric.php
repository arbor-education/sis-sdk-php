<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMetric extends ModelBase
{
    public const ASSESSMENT_METRIC_SET = 'assessmentMetricSet';

    public const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC;

    /**
     * @param Query $query
     * @return AssessmentMetric[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_METRIC);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMetric
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_METRIC, $id);
    }

    /**
     * @return \Arbor\Model\AssessmentMetricSet
     */
    public function getAssessmentMetricSet()
    {
        return $this->getProperty('assessmentMetricSet');
    }

    /**
     * @param \Arbor\Model\AssessmentMetricSet $assessmentMetricSet
     */
    public function setAssessmentMetricSet(\Arbor\Model\AssessmentMetricSet $assessmentMetricSet = null)
    {
        $this->setProperty('assessmentMetricSet', $assessmentMetricSet);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }
}
