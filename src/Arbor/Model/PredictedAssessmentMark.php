<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PredictedAssessmentMark extends \ModelBase
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
    public static function query(\Query $query = null)
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

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
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
    public function setAssessment(\Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty('progressMeasurementPeriod');
    }

    /**
     * @param ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(\ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty('progressMeasurementPeriod', $progressMeasurementPeriod);
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
    public function setGrade(\Grade $grade = null)
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
     * @return AssessmentMarkNonSubmissionReason
     */
    public function getAssessmentMarkNonSubmissionReason()
    {
        return $this->getProperty('assessmentMarkNonSubmissionReason');
    }

    /**
     * @param AssessmentMarkNonSubmissionReason $assessmentMarkNonSubmissionReason
     */
    public function setAssessmentMarkNonSubmissionReason(\AssessmentMarkNonSubmissionReason $assessmentMarkNonSubmissionReason = null)
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
