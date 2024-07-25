<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Assessment extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ASSESSMENT_NAME = 'assessmentName';

    public const ASSESSMENT_SHORT_NAME = 'assessmentShortName';

    public const USER_DEFINED_NAME = 'userDefinedName';

    public const USER_DEFINED_SHORT_NAME = 'userDefinedShortName';

    public const SUBJECT = 'subject';

    public const CURRICULUM_TIER = 'curriculumTier';

    public const GRADE_POINT_SCALE = 'gradePointScale';

    public const STUDENT_PROGRESS_BASELINE_CALCULATOR_CLASS_NAME = 'studentProgressBaselineCalculatorClassName';

    public const IS_BASELINE_LOCKED = 'isBaselineLocked';

    public const IS_TARGET_LOCKED = 'isTargetLocked';

    protected $_resourceType = ResourceType::ASSESSMENT;

    /**
     * @param Query $query
     * @return Assessment[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Assessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getAssessmentName()
    {
        return $this->getProperty('assessmentName');
    }

    /**
     * @param string $assessmentName
     */
    public function setAssessmentName(string $assessmentName = null)
    {
        $this->setProperty('assessmentName', $assessmentName);
    }

    /**
     * @return string
     */
    public function getAssessmentShortName()
    {
        return $this->getProperty('assessmentShortName');
    }

    /**
     * @param string $assessmentShortName
     */
    public function setAssessmentShortName(string $assessmentShortName = null)
    {
        $this->setProperty('assessmentShortName', $assessmentShortName);
    }

    /**
     * @return string
     */
    public function getUserDefinedName()
    {
        return $this->getProperty('userDefinedName');
    }

    /**
     * @param string $userDefinedName
     */
    public function setUserDefinedName(string $userDefinedName = null)
    {
        $this->setProperty('userDefinedName', $userDefinedName);
    }

    /**
     * @return string
     */
    public function getUserDefinedShortName()
    {
        return $this->getProperty('userDefinedShortName');
    }

    /**
     * @param string $userDefinedShortName
     */
    public function setUserDefinedShortName(string $userDefinedShortName = null)
    {
        $this->setProperty('userDefinedShortName', $userDefinedShortName);
    }

    /**
     * @return \Arbor\Model\Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param \Arbor\Model\Subject $subject
     */
    public function setSubject(\Arbor\Model\Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return \Arbor\Model\CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param \Arbor\Model\CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(\Arbor\Model\CurriculumTier $curriculumTier = null)
    {
        $this->setProperty('curriculumTier', $curriculumTier);
    }

    /**
     * @return \Arbor\Model\GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param \Arbor\Model\GradePointScale $gradePointScale
     */
    public function setGradePointScale(\Arbor\Model\GradePointScale $gradePointScale = null)
    {
        $this->setProperty('gradePointScale', $gradePointScale);
    }

    /**
     * @return string
     */
    public function getStudentProgressBaselineCalculatorClassName()
    {
        return $this->getProperty('studentProgressBaselineCalculatorClassName');
    }

    /**
     * @param string $studentProgressBaselineCalculatorClassName
     */
    public function setStudentProgressBaselineCalculatorClassName(string $studentProgressBaselineCalculatorClassName = null)
    {
        $this->setProperty('studentProgressBaselineCalculatorClassName', $studentProgressBaselineCalculatorClassName);
    }

    /**
     * @return bool
     */
    public function getIsBaselineLocked()
    {
        return $this->getProperty('isBaselineLocked');
    }

    /**
     * @param bool $isBaselineLocked
     */
    public function setIsBaselineLocked(bool $isBaselineLocked = null)
    {
        $this->setProperty('isBaselineLocked', $isBaselineLocked);
    }

    /**
     * @return bool
     */
    public function getIsTargetLocked()
    {
        return $this->getProperty('isTargetLocked');
    }

    /**
     * @param bool $isTargetLocked
     */
    public function setIsTargetLocked(bool $isTargetLocked = null)
    {
        $this->setProperty('isTargetLocked', $isTargetLocked);
    }
}
