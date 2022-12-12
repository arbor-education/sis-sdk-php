<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentCurriculumScore extends ModelBase
{
    const STUDENT = 'student';

    const CURRICULUM_ENTITY = 'curriculumEntity';

    const ASSESSMENT_TYPE = 'assessmentType';

    const CURRICULUM_COMPLETION = 'curriculumCompletion';

    const PREDICTED_MASTERY = 'predictedMastery';

    const CURRENT_MASTERY = 'currentMastery';

    const PREDICTED_GRADE_POINT_VALUE = 'predictedGradePointValue';

    const CURRENT_GRADE_POINT_VALUE = 'currentGradePointValue';

    const GRADE_POINT_VALUE_CAP = 'gradePointValueCap';

    const DATE = 'date';

    protected $_resourceType = ResourceType::STUDENT_CURRICULUM_SCORE;

    /**
     * @param Query $query
     * @return StudentCurriculumScore[] | Collection
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
     * @return ModelBase
     */
    public function getCurriculumEntity()
    {
        return $this->getProperty('curriculumEntity');
    }

    /**
     * @param ModelBase $curriculumEntity
     */
    public function setCurriculumEntity(ModelBase $curriculumEntity = null)
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
    public function setAssessmentType($assessmentType = null)
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
    public function setCurriculumCompletion($curriculumCompletion = null)
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
    public function setPredictedMastery($predictedMastery = null)
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
    public function setCurrentMastery($currentMastery = null)
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
    public function setPredictedGradePointValue($predictedGradePointValue = null)
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
    public function setCurrentGradePointValue($currentGradePointValue = null)
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
    public function setGradePointValueCap($gradePointValueCap = null)
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
