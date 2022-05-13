<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AdHocAssessment extends ModelBase
{
    const AD_HOC_ASSESSMENT_CATEGORY = 'adHocAssessmentCategory';

    const ASSESSMENT_NAME = 'assessmentName';

    const ASSESSMENT_CODE = 'assessmentCode';

    const MARK_DATA_TYPE = 'markDataType';

    const GRADE_SET = 'gradeSet';

    const NUMBER_FORMAT = 'numberFormat';

    const NUMBER_UNIT = 'numberUnit';

    const CURRICULUM_TIER = 'curriculumTier';

    const CURRICULUM_GRADE = 'curriculumGrade';

    const SUBJECT = 'subject';

    const ASSESSMENT_STRATEGY = 'assessmentStrategy';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT;

    /**
     * @param Query $query
     * @return AdHocAssessment[] | Collection
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
     * @return AdHocAssessmentCategory
     */
    public function getAdHocAssessmentCategory()
    {
        return $this->getProperty('adHocAssessmentCategory');
    }

    /**
     * @param AdHocAssessmentCategory $adHocAssessmentCategory
     */
    public function setAdHocAssessmentCategory(AdHocAssessmentCategory $adHocAssessmentCategory = null)
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
    public function setAssessmentName($assessmentName = null)
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
    public function setAssessmentCode($assessmentCode = null)
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
    public function setMarkDataType($markDataType = null)
    {
        $this->setProperty('markDataType', $markDataType);
    }

    /**
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
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
    public function setNumberFormat($numberFormat = null)
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
    public function setNumberUnit($numberUnit = null)
    {
        $this->setProperty('numberUnit', $numberUnit);
    }

    /**
     * @return CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(CurriculumTier $curriculumTier = null)
    {
        $this->setProperty('curriculumTier', $curriculumTier);
    }

    /**
     * @return CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(CurriculumGrade $curriculumGrade = null)
    {
        $this->setProperty('curriculumGrade', $curriculumGrade);
    }

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param Subject $subject
     */
    public function setSubject(Subject $subject = null)
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
    public function setAssessmentStrategy($assessmentStrategy = null)
    {
        $this->setProperty('assessmentStrategy', $assessmentStrategy);
    }
}
