<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StandardizedAssessmentMark extends ModelBase
{

    const STUDENT = 'student';

    const STANDARDIZED_ASSESSMENT_ASPECT = 'standardizedAssessmentAspect';

    const MARK_GRADE = 'markGrade';

    const MARK_INTEGER = 'markInteger';

    const MARK_DECIMAL = 'markDecimal';

    const MARK_COMMENT = 'markComment';

    const ASSESSMENT_DATE = 'assessmentDate';

    const ASSESSMENT_IMPORT_ITEM = 'assessmentImportItem';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return StandardizedAssessmentMark[] | Collection
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
     * @return StandardizedAssessmentAspect
     */
    public function getStandardizedAssessmentAspect()
    {
        return $this->getProperty('standardizedAssessmentAspect');
    }

    /**
     * @param StandardizedAssessmentAspect $standardizedAssessmentAspect
     */
    public function setStandardizedAssessmentAspect(StandardizedAssessmentAspect $standardizedAssessmentAspect = null)
    {
        $this->setProperty('standardizedAssessmentAspect', $standardizedAssessmentAspect);
    }

    /**
     * @return Grade
     */
    public function getMarkGrade()
    {
        return $this->getProperty('markGrade');
    }

    /**
     * @param Grade $markGrade
     */
    public function setMarkGrade(Grade $markGrade = null)
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
    public function setMarkInteger($markInteger = null)
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
    public function setMarkDecimal($markDecimal = null)
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
    public function setMarkComment($markComment = null)
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
     * @return AssessmentImportItem
     */
    public function getAssessmentImportItem()
    {
        return $this->getProperty('assessmentImportItem');
    }

    /**
     * @param AssessmentImportItem $assessmentImportItem
     */
    public function setAssessmentImportItem(AssessmentImportItem $assessmentImportItem = null)
    {
        $this->setProperty('assessmentImportItem', $assessmentImportItem);
    }


}
