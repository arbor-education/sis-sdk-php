<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class FinalAssessmentTarget extends ModelBase
{
    public const STUDENT = 'student';

    public const ASSESSMENT = 'assessment';

    public const GRADE = 'grade';

    public const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    public const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    public const STATISTICAL_GRADE_POINT_SCALE_VALUE = 'statisticalGradePointScaleValue';

    public const LOCKED = 'locked';

    protected $_resourceType = ResourceType::FINAL_ASSESSMENT_TARGET;

    /**
     * @param Query $query
     * @return FinalAssessmentTarget[] | Collection
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

        $query->setResourceType(ResourceType::FINAL_ASSESSMENT_TARGET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return FinalAssessmentTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FINAL_ASSESSMENT_TARGET, $id);
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
     * @return bool
     */
    public function getLocked()
    {
        return $this->getProperty('locked');
    }

    /**
     * @param bool $locked
     */
    public function setLocked(bool $locked = null)
    {
        $this->setProperty('locked', $locked);
    }
}
