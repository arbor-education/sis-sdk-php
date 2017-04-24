<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\Assessment;
use \Arbor\Model\Grade;
use \Arbor\Model\ProgressMeasurementPeriod;

class StudentProgressGoal extends ModelBase
{
    const STUDENT = 'student';

    const ACADEMIC_YEAR = 'academicYear';

    const ASSESSMENT = 'assessment';

    const GOAL_TYPE = 'goalType';

    const GRADE = 'grade';

    const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    const STATISTICAL_GRADE_POINT_SCALE_VALUE = 'statisticalGradePointScaleValue';

    const IS_CALCULATED_GRADE = 'isCalculatedGrade';

    protected $_resourceType = ResourceType::STUDENT_PROGRESS_GOAL;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentProgressGoal[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StudentProgressGoal");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentProgressGoal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STUDENT_PROGRESS_GOAL, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty("assessment");
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty("assessment", $assessment);
    }

    /**
     * @return string
     */
    public function getGoalType()
    {
        return $this->getProperty("goalType");
    }

    /**
     * @param string $goalType
     */
    public function setGoalType($goalType = null)
    {
        $this->setProperty("goalType", $goalType);
    }

    /**
     * @return Grade
     */
    public function getGrade()
    {
        return $this->getProperty("grade");
    }

    /**
     * @param Grade $grade
     */
    public function setGrade(Grade $grade = null)
    {
        $this->setProperty("grade", $grade);
    }

    /**
     * @return ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty("progressMeasurementPeriod");
    }

    /**
     * @param ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty("progressMeasurementPeriod", $progressMeasurementPeriod);
    }

    /**
     * @return float
     */
    public function getLowerGradePointScaleValue()
    {
        return $this->getProperty("lowerGradePointScaleValue");
    }

    /**
     * @param float $lowerGradePointScaleValue
     */
    public function setLowerGradePointScaleValue($lowerGradePointScaleValue = null)
    {
        $this->setProperty("lowerGradePointScaleValue", $lowerGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getUpperGradePointScaleValue()
    {
        return $this->getProperty("upperGradePointScaleValue");
    }

    /**
     * @param float $upperGradePointScaleValue
     */
    public function setUpperGradePointScaleValue($upperGradePointScaleValue = null)
    {
        $this->setProperty("upperGradePointScaleValue", $upperGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getStatisticalGradePointScaleValue()
    {
        return $this->getProperty("statisticalGradePointScaleValue");
    }

    /**
     * @param float $statisticalGradePointScaleValue
     */
    public function setStatisticalGradePointScaleValue($statisticalGradePointScaleValue = null)
    {
        $this->setProperty("statisticalGradePointScaleValue", $statisticalGradePointScaleValue);
    }

    /**
     * @return bool
     */
    public function getIsCalculatedGrade()
    {
        return $this->getProperty("isCalculatedGrade");
    }

    /**
     * @param bool $isCalculatedGrade
     */
    public function setIsCalculatedGrade($isCalculatedGrade = null)
    {
        $this->setProperty("isCalculatedGrade", $isCalculatedGrade);
    }
}
