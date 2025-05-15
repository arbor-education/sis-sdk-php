<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StandardizedAssessmentMark extends ModelBase
{
    public const STUDENT = 'student';

    public const STANDARDIZED_ASSESSMENT_ASPECT = 'standardizedAssessmentAspect';

    public const MARK_GRADE = 'markGrade';

    public const MARK_INTEGER = 'markInteger';

    public const MARK_DECIMAL = 'markDecimal';

    public const MARK_COMMENT = 'markComment';

    public const ASSESSMENT_DATE = 'assessmentDate';

    public const ASSESSMENT_IMPORT_ITEM = 'assessmentImportItem';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return StandardizedAssessmentMark[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessmentMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_MARK, $id);
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
     * @return \Arbor\Model\StandardizedAssessmentAspect
     */
    public function getStandardizedAssessmentAspect()
    {
        return $this->getProperty('standardizedAssessmentAspect');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessmentAspect $standardizedAssessmentAspect
     */
    public function setStandardizedAssessmentAspect(\Arbor\Model\StandardizedAssessmentAspect $standardizedAssessmentAspect = null)
    {
        $this->setProperty('standardizedAssessmentAspect', $standardizedAssessmentAspect);
    }

    /**
     * @return \Arbor\Model\Grade
     */
    public function getMarkGrade()
    {
        return $this->getProperty('markGrade');
    }

    /**
     * @param \Arbor\Model\Grade $markGrade
     */
    public function setMarkGrade(\Arbor\Model\Grade $markGrade = null)
    {
        $this->setProperty('markGrade', $markGrade);
    }

    /**
     * @return int
     */
    public function getMarkInteger()
    {
        return $this->getProperty('markInteger');
    }

    /**
     * @param int $markInteger
     */
    public function setMarkInteger(int $markInteger = null)
    {
        $this->setProperty('markInteger', $markInteger);
    }

    /**
     * @return float
     */
    public function getMarkDecimal()
    {
        return $this->getProperty('markDecimal');
    }

    /**
     * @param float $markDecimal
     */
    public function setMarkDecimal(float $markDecimal = null)
    {
        $this->setProperty('markDecimal', $markDecimal);
    }

    /**
     * @return string
     */
    public function getMarkComment()
    {
        return $this->getProperty('markComment');
    }

    /**
     * @param string $markComment
     */
    public function setMarkComment(string $markComment = null)
    {
        $this->setProperty('markComment', $markComment);
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
     * @return \Arbor\Model\AssessmentImportItem
     */
    public function getAssessmentImportItem()
    {
        return $this->getProperty('assessmentImportItem');
    }

    /**
     * @param \Arbor\Model\AssessmentImportItem $assessmentImportItem
     */
    public function setAssessmentImportItem(\Arbor\Model\AssessmentImportItem $assessmentImportItem = null)
    {
        $this->setProperty('assessmentImportItem', $assessmentImportItem);
    }
}
