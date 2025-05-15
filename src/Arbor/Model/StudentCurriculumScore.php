<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentCurriculumScore extends ModelBase
{
    public const STUDENT = 'student';

    public const CURRICULUM_ENTITY = 'curriculumEntity';

    public const ASSESSMENT_TYPE = 'assessmentType';

    public const CURRICULUM_COMPLETION = 'curriculumCompletion';

    public const PREDICTED_MASTERY = 'predictedMastery';

    public const CURRENT_MASTERY = 'currentMastery';

    public const PREDICTED_GRADE_POINT_VALUE = 'predictedGradePointValue';

    public const CURRENT_GRADE_POINT_VALUE = 'currentGradePointValue';

    public const GRADE_POINT_VALUE_CAP = 'gradePointValueCap';

    public const DATE = 'date';

    protected $_resourceType = ResourceType::STUDENT_CURRICULUM_SCORE;

    /**
     * @param Query $query
     * @return StudentCurriculumScore[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_CURRICULUM_SCORE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentCurriculumScore
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_CURRICULUM_SCORE, $id);
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
     * @return ModelBase
     */
    public function getCurriculumEntity()
    {
        return $this->getProperty('curriculumEntity');
    }

    /**
     * @param ModelBase $curriculumEntity
     */
    public function setCurriculumEntity(\ModelBase $curriculumEntity = null)
    {
        $this->setProperty('curriculumEntity', $curriculumEntity);
    }

    /**
     * @return string
     */
    public function getAssessmentType()
    {
        return $this->getProperty('assessmentType');
    }

    /**
     * @param string $assessmentType
     */
    public function setAssessmentType(string $assessmentType = null)
    {
        $this->setProperty('assessmentType', $assessmentType);
    }

    /**
     * @return float
     */
    public function getCurriculumCompletion()
    {
        return $this->getProperty('curriculumCompletion');
    }

    /**
     * @param float $curriculumCompletion
     */
    public function setCurriculumCompletion(float $curriculumCompletion = null)
    {
        $this->setProperty('curriculumCompletion', $curriculumCompletion);
    }

    /**
     * @return float
     */
    public function getPredictedMastery()
    {
        return $this->getProperty('predictedMastery');
    }

    /**
     * @param float $predictedMastery
     */
    public function setPredictedMastery(float $predictedMastery = null)
    {
        $this->setProperty('predictedMastery', $predictedMastery);
    }

    /**
     * @return float
     */
    public function getCurrentMastery()
    {
        return $this->getProperty('currentMastery');
    }

    /**
     * @param float $currentMastery
     */
    public function setCurrentMastery(float $currentMastery = null)
    {
        $this->setProperty('currentMastery', $currentMastery);
    }

    /**
     * @return float
     */
    public function getPredictedGradePointValue()
    {
        return $this->getProperty('predictedGradePointValue');
    }

    /**
     * @param float $predictedGradePointValue
     */
    public function setPredictedGradePointValue(float $predictedGradePointValue = null)
    {
        $this->setProperty('predictedGradePointValue', $predictedGradePointValue);
    }

    /**
     * @return float
     */
    public function getCurrentGradePointValue()
    {
        return $this->getProperty('currentGradePointValue');
    }

    /**
     * @param float $currentGradePointValue
     */
    public function setCurrentGradePointValue(float $currentGradePointValue = null)
    {
        $this->setProperty('currentGradePointValue', $currentGradePointValue);
    }

    /**
     * @return float
     */
    public function getGradePointValueCap()
    {
        return $this->getProperty('gradePointValueCap');
    }

    /**
     * @param float $gradePointValueCap
     */
    public function setGradePointValueCap(float $gradePointValueCap = null)
    {
        $this->setProperty('gradePointValueCap', $gradePointValueCap);
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->getProperty('date');
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date = null)
    {
        $this->setProperty('date', $date);
    }
}
