<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdHocAssessment extends ModelBase
{
    public const AD_HOC_ASSESSMENT_CATEGORY = 'adHocAssessmentCategory';

    public const ASSESSMENT_NAME = 'assessmentName';

    public const ASSESSMENT_CODE = 'assessmentCode';

    public const MARK_DATA_TYPE = 'markDataType';

    public const GRADE_SET = 'gradeSet';

    public const NUMBER_FORMAT = 'numberFormat';

    public const NUMBER_UNIT = 'numberUnit';

    public const CURRICULUM_TIER = 'curriculumTier';

    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const SUBJECT = 'subject';

    public const ASSESSMENT_STRATEGY = 'assessmentStrategy';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT;

    /**
     * @param Query $query
     * @return AdHocAssessment[] | Collection
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

        $query->setResourceType(ResourceType::AD_HOC_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdHocAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AD_HOC_ASSESSMENT, $id);
    }

    /**
     * @return \Arbor\Model\AdHocAssessmentCategory
     */
    public function getAdHocAssessmentCategory()
    {
        return $this->getProperty('adHocAssessmentCategory');
    }

    /**
     * @param \Arbor\Model\AdHocAssessmentCategory $adHocAssessmentCategory
     */
    public function setAdHocAssessmentCategory(\Arbor\Model\AdHocAssessmentCategory $adHocAssessmentCategory = null)
    {
        $this->setProperty('adHocAssessmentCategory', $adHocAssessmentCategory);
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
    public function getAssessmentCode()
    {
        return $this->getProperty('assessmentCode');
    }

    /**
     * @param string $assessmentCode
     */
    public function setAssessmentCode(string $assessmentCode = null)
    {
        $this->setProperty('assessmentCode', $assessmentCode);
    }

    /**
     * @return string
     */
    public function getMarkDataType()
    {
        return $this->getProperty('markDataType');
    }

    /**
     * @param string $markDataType
     */
    public function setMarkDataType(string $markDataType = null)
    {
        $this->setProperty('markDataType', $markDataType);
    }

    /**
     * @return \Arbor\Model\GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param \Arbor\Model\GradeSet $gradeSet
     */
    public function setGradeSet(\Arbor\Model\GradeSet $gradeSet = null)
    {
        $this->setProperty('gradeSet', $gradeSet);
    }

    /**
     * @return string
     */
    public function getNumberFormat()
    {
        return $this->getProperty('numberFormat');
    }

    /**
     * @param string $numberFormat
     */
    public function setNumberFormat(string $numberFormat = null)
    {
        $this->setProperty('numberFormat', $numberFormat);
    }

    /**
     * @return string
     */
    public function getNumberUnit()
    {
        return $this->getProperty('numberUnit');
    }

    /**
     * @param string $numberUnit
     */
    public function setNumberUnit(string $numberUnit = null)
    {
        $this->setProperty('numberUnit', $numberUnit);
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
     * @return \Arbor\Model\CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param \Arbor\Model\CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(\Arbor\Model\CurriculumGrade $curriculumGrade = null)
    {
        $this->setProperty('curriculumGrade', $curriculumGrade);
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
     * @return string
     */
    public function getAssessmentStrategy()
    {
        return $this->getProperty('assessmentStrategy');
    }

    /**
     * @param string $assessmentStrategy
     */
    public function setAssessmentStrategy(string $assessmentStrategy = null)
    {
        $this->setProperty('assessmentStrategy', $assessmentStrategy);
    }
}
