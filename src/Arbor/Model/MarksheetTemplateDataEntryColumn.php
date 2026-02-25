<?php

namespace Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\ResourceType;

class MarksheetTemplateDataEntryColumn extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ASSESSMENT_COMPONENT = 'assessmentComponent';

    public const ASSESSMENT_DATA_DROP = 'assessmentDataDrop';

    public const ASSESSMENT_SUBJECT = 'assessmentSubject';

    public const ASSESSMENT_DATA_GRADE_SET = 'assessmentDataGradeSet';

    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const IS_USED_IN_COMPLETION_STATISTICS = 'isUsedInCompletionStatistics';

    protected $_resourceType = ResourceType::MARKSHEET_TEMPLATE_DATA_ENTRY_COLUMN;

    /**
     * @param Query $query
     * @return MarksheetTemplateDataEntryColumn[] | Collection
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

        $query->setResourceType(ResourceType::MARKSHEET_TEMPLATE_DATA_ENTRY_COLUMN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarksheetTemplateDataEntryColumn
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARKSHEET_TEMPLATE_DATA_ENTRY_COLUMN, $id);
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
     * @return \Arbor\Model\AssessmentComponent
     */
    public function getAssessmentComponent()
    {
        return $this->getProperty('assessmentComponent');
    }

    /**
     * @param \Arbor\Model\AssessmentComponent $assessmentComponent
     */
    public function setAssessmentComponent(\Arbor\Model\AssessmentComponent $assessmentComponent = null)
    {
        $this->setProperty('assessmentComponent', $assessmentComponent);
    }

    /**
     * @return \Arbor\Model\AssessmentDataDrop
     */
    public function getAssessmentDataDrop()
    {
        return $this->getProperty('assessmentDataDrop');
    }

    /**
     * @param \Arbor\Model\AssessmentDataDrop $assessmentDataDrop
     */
    public function setAssessmentDataDrop(\Arbor\Model\AssessmentDataDrop $assessmentDataDrop = null)
    {
        $this->setProperty('assessmentDataDrop', $assessmentDataDrop);
    }

    /**
     * @return \Arbor\Model\AssessmentSubject
     */
    public function getAssessmentSubject()
    {
        return $this->getProperty('assessmentSubject');
    }

    /**
     * @param \Arbor\Model\AssessmentSubject $assessmentSubject
     */
    public function setAssessmentSubject(\Arbor\Model\AssessmentSubject $assessmentSubject = null)
    {
        $this->setProperty('assessmentSubject', $assessmentSubject);
    }

    /**
     * @return \Arbor\Model\AssessmentDataGradeSet
     */
    public function getAssessmentDataGradeSet()
    {
        return $this->getProperty('assessmentDataGradeSet');
    }

    /**
     * @param \Arbor\Model\AssessmentDataGradeSet $assessmentDataGradeSet
     */
    public function setAssessmentDataGradeSet(\Arbor\Model\AssessmentDataGradeSet $assessmentDataGradeSet = null)
    {
        $this->setProperty('assessmentDataGradeSet', $assessmentDataGradeSet);
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
     * @return bool
     */
    public function getIsUsedInCompletionStatistics()
    {
        return $this->getProperty('isUsedInCompletionStatistics');
    }

    /**
     * @param bool $isUsedInCompletionStatistics
     */
    public function setIsUsedInCompletionStatistics(bool $isUsedInCompletionStatistics = null)
    {
        $this->setProperty('isUsedInCompletionStatistics', $isUsedInCompletionStatistics);
    }
}
