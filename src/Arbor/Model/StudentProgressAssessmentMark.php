<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentProgressAssessmentMark extends ModelBase
{

    const STUDENT = 'student';

    const ASSESSMENT = 'assessment';

    const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    const STUDENT_PROGRESS_ASSESSMENT = 'studentProgressAssessment';

    const GRADE = 'grade';

    const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    const STATISTICAL_GRADE_POINT_SCALE_VALUE = 'statisticalGradePointScaleValue';

    const ASSESSMENT_DATE = 'assessmentDate';

    const MARKING_STAFF = 'markingStaff';

    const COMPLETED_DATETIME = 'completedDatetime';

    const COMPLETED_STAFF = 'completedStaff';

    const APPROVED_DATETIME = 'approvedDatetime';

    const APPROVED_STAFF = 'approvedStaff';

    protected $_resourceType = ResourceType::STUDENT_PROGRESS_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return StudentProgressAssessmentMark[] | Collection
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
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
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
    public function setAssessment(Assessment $assessment = null)
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
    public function setProgressMeasurementPeriod(ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty('progressMeasurementPeriod', $progressMeasurementPeriod);
    }

    /**
     * @return StudentProgressAssessment
     */
    public function getStudentProgressAssessment()
    {
        return $this->getProperty('studentProgressAssessment');
    }

    /**
     * @param StudentProgressAssessment $studentProgressAssessment
     */
    public function setStudentProgressAssessment(StudentProgressAssessment $studentProgressAssessment = null)
    {
        $this->setProperty('studentProgressAssessment', $studentProgressAssessment);
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
     * @return float
     */
    public function getLowerGradePointScaleValue()
    {
        return $this->getProperty('lowerGradePointScaleValue');
    }

    /**
     * @param float $lowerGradePointScaleValue
     */
    public function setLowerGradePointScaleValue($lowerGradePointScaleValue = null)
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
    public function setUpperGradePointScaleValue($upperGradePointScaleValue = null)
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
    public function setStatisticalGradePointScaleValue($statisticalGradePointScaleValue = null)
    {
        $this->setProperty('statisticalGradePointScaleValue', $statisticalGradePointScaleValue);
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
     * @return Staff
     */
    public function getMarkingStaff()
    {
        return $this->getProperty('markingStaff');
    }

    /**
     * @param Staff $markingStaff
     */
    public function setMarkingStaff(Staff $markingStaff = null)
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
     * @return Staff
     */
    public function getCompletedStaff()
    {
        return $this->getProperty('completedStaff');
    }

    /**
     * @param Staff $completedStaff
     */
    public function setCompletedStaff(Staff $completedStaff = null)
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
     * @return Staff
     */
    public function getApprovedStaff()
    {
        return $this->getProperty('approvedStaff');
    }

    /**
     * @param Staff $approvedStaff
     */
    public function setApprovedStaff(Staff $approvedStaff = null)
    {
        $this->setProperty('approvedStaff', $approvedStaff);
    }


}
