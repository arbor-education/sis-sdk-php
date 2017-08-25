<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentStandardizedAssessmentMark extends ModelBase
{
    const STUDENT = 'student';

    const ASSESSMENT = 'assessment';

    const STUDENT_STANDARDIZED_ASSESSMENT = 'studentStandardizedAssessment';

    const MARK_INTEGER = 'markInteger';

    const MARK_DECIMAL = 'markDecimal';

    const MARK_COMMENT = 'markComment';

    const MARK_GRADE = 'markGrade';

    const ASSESSMENT_DATE = 'assessmentDate';

    protected $_resourceType = ResourceType::STUDENT_STANDARDIZED_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return StudentStandardizedAssessmentMark[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_STANDARDIZED_ASSESSMENT_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentStandardizedAssessmentMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_STANDARDIZED_ASSESSMENT_MARK, $id);
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
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return StudentStandardizedAssessment
     */
    public function getStudentStandardizedAssessment()
    {
        return $this->getProperty('studentStandardizedAssessment');
    }

    /**
     * @param StudentStandardizedAssessment $studentStandardizedAssessment
     */
    public function setStudentStandardizedAssessment(StudentStandardizedAssessment $studentStandardizedAssessment = null)
    {
        $this->setProperty('studentStandardizedAssessment', $studentStandardizedAssessment);
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
}
