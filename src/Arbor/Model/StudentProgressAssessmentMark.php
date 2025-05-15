<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentProgressAssessmentMark extends ModelBase
{
    public const STUDENT = 'student';

    public const ASSESSMENT = 'assessment';

    public const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    public const GRADE = 'grade';

    public const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    public const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    public const STATISTICAL_GRADE_POINT_SCALE_VALUE = 'statisticalGradePointScaleValue';

    public const ASSESSMENT_MARK_NON_SUBMISSION_REASON = 'assessmentMarkNonSubmissionReason';

    public const ASSESSMENT_DATE = 'assessmentDate';

    public const MARKING_STAFF = 'markingStaff';

    public const COMPLETED_DATETIME = 'completedDatetime';

    public const COMPLETED_STAFF = 'completedStaff';

    public const APPROVED_DATETIME = 'approvedDatetime';

    public const APPROVED_STAFF = 'approvedStaff';

    protected $_resourceType = ResourceType::STUDENT_PROGRESS_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return StudentProgressAssessmentMark[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_PROGRESS_ASSESSMENT_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentProgressAssessmentMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_PROGRESS_ASSESSMENT_MARK, $id);
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
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty('assessmentDate');
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty('assessmentDate', $assessmentDate);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getMarkingStaff()
    {
        return $this->getProperty('markingStaff');
    }

    /**
     * @param \Arbor\Model\Staff $markingStaff
     */
    public function setMarkingStaff(\Arbor\Model\Staff $markingStaff = null)
    {
        $this->setProperty('markingStaff', $markingStaff);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getCompletedStaff()
    {
        return $this->getProperty('completedStaff');
    }

    /**
     * @param \Arbor\Model\Staff $completedStaff
     */
    public function setCompletedStaff(\Arbor\Model\Staff $completedStaff = null)
    {
        $this->setProperty('completedStaff', $completedStaff);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty('approvedDatetime');
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty('approvedDatetime', $approvedDatetime);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getApprovedStaff()
    {
        return $this->getProperty('approvedStaff');
    }

    /**
     * @param \Arbor\Model\Staff $approvedStaff
     */
    public function setApprovedStaff(\Arbor\Model\Staff $approvedStaff = null)
    {
        $this->setProperty('approvedStaff', $approvedStaff);
    }
}
