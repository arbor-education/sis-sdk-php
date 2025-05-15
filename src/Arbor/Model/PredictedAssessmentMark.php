<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PredictedAssessmentMark extends ModelBase
{
    public const ACADEMIC_YEAR = 'academicYear';

    public const STUDENT = 'student';

    public const ASSESSMENT = 'assessment';

    public const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    public const GRADE = 'grade';

    public const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    public const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    public const STATISTICAL_GRADE_POINT_SCALE_VALUE = 'statisticalGradePointScaleValue';

    public const ASSESSMENT_MARK_NON_SUBMISSION_REASON = 'assessmentMarkNonSubmissionReason';

    public const IS_CALCULATED_GRADE = 'isCalculatedGrade';

    protected $_resourceType = ResourceType::PREDICTED_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return PredictedAssessmentMark[] | Collection
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

        $query->setResourceType(ResourceType::PREDICTED_ASSESSMENT_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PredictedAssessmentMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PREDICTED_ASSESSMENT_MARK, $id);
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

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
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
     * @return \Arbor\Model\ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty('progressMeasurementPeriod');
    }

    /**
     * @param \Arbor\Model\ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(\Arbor\Model\ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty('progressMeasurementPeriod', $progressMeasurementPeriod);
    }

    /**
     * @return \Arbor\Model\Grade
     */
    public function getGrade()
    {
        return $this->getProperty('grade');
    }

    /**
     * @param \Arbor\Model\Grade $grade
     */
    public function setGrade(\Arbor\Model\Grade $grade = null)
    {
        $this->setProperty('grade', $grade);
    }

    /**
     * @return float
     */
    public function getLowerGradePointScaleValue()
    {
        return $this->getProperty('lowerGradePointScaleValue');
    }

    /**
     * @param float $lowerGradePointScaleValue
     */
    public function setLowerGradePointScaleValue(float $lowerGradePointScaleValue = null)
    {
        $this->setProperty('lowerGradePointScaleValue', $lowerGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getUpperGradePointScaleValue()
    {
        return $this->getProperty('upperGradePointScaleValue');
    }

    /**
     * @param float $upperGradePointScaleValue
     */
    public function setUpperGradePointScaleValue(float $upperGradePointScaleValue = null)
    {
        $this->setProperty('upperGradePointScaleValue', $upperGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getStatisticalGradePointScaleValue()
    {
        return $this->getProperty('statisticalGradePointScaleValue');
    }

    /**
     * @param float $statisticalGradePointScaleValue
     */
    public function setStatisticalGradePointScaleValue(float $statisticalGradePointScaleValue = null)
    {
        $this->setProperty('statisticalGradePointScaleValue', $statisticalGradePointScaleValue);
    }

    /**
     * @return \Arbor\Model\AssessmentMarkNonSubmissionReason
     */
    public function getAssessmentMarkNonSubmissionReason()
    {
        return $this->getProperty('assessmentMarkNonSubmissionReason');
    }

    /**
     * @param \Arbor\Model\AssessmentMarkNonSubmissionReason
     * $assessmentMarkNonSubmissionReason
     */
    public function setAssessmentMarkNonSubmissionReason(\Arbor\Model\AssessmentMarkNonSubmissionReason $assessmentMarkNonSubmissionReason = null)
    {
        $this->setProperty('assessmentMarkNonSubmissionReason', $assessmentMarkNonSubmissionReason);
    }

    /**
     * @return bool
     */
    public function getIsCalculatedGrade()
    {
        return $this->getProperty('isCalculatedGrade');
    }

    /**
     * @param bool $isCalculatedGrade
     */
    public function setIsCalculatedGrade(bool $isCalculatedGrade = null)
    {
        $this->setProperty('isCalculatedGrade', $isCalculatedGrade);
    }
}
