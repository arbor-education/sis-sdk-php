<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentMetric extends \ModelBase
{
    public const ASSESSMENT_METRIC_SET = 'assessmentMetricSet';

    public const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::ASSESSMENT_METRIC;

    /**
     * @param Query $query
     * @return AssessmentMetric[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
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
     * @return AssessmentMetricSet
     */
    public function getAssessmentMetricSet()
    {
        return $this->getProperty('assessmentMetricSet');
    }

    /**
     * @param AssessmentMetricSet $assessmentMetricSet
     */
    public function setAssessmentMetricSet(\AssessmentMetricSet $assessmentMetricSet = null)
    {
        $this->setProperty('assessmentMetricSet', $assessmentMetricSet);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }
}
