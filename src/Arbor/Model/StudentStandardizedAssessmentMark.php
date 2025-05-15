<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentStandardizedAssessmentMark extends ModelBase
{
    public const STUDENT = 'student';

    public const STANDARDIZED_ASSESSMENT = 'standardizedAssessment';

    public const STUDENT_STANDARDIZED_ASSESSMENT = 'studentStandardizedAssessment';

    public const MARK_INTEGER = 'markInteger';

    public const MARK_DECIMAL = 'markDecimal';

    public const MARK_COMMENT = 'markComment';

    public const MARK_GRADE = 'markGrade';

    public const ASSESSMENT_DATE = 'assessmentDate';

    public const COMPLETED_DATETIME = 'completedDatetime';

    public const COMPLETED_STAFF = 'completedStaff';

    protected $_resourceType = ResourceType::STUDENT_STANDARDIZED_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return StudentStandardizedAssessmentMark[] | Collection
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
     * @return \Arbor\Model\StandardizedAssessment
     */
    public function getStandardizedAssessment()
    {
        return $this->getProperty('standardizedAssessment');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessment $standardizedAssessment
     */
    public function setStandardizedAssessment(\Arbor\Model\StandardizedAssessment $standardizedAssessment = null)
    {
        $this->setProperty('standardizedAssessment', $standardizedAssessment);
    }

    /**
     * @return \Arbor\Model\StudentStandardizedAssessment
     */
    public function getStudentStandardizedAssessment()
    {
        return $this->getProperty('studentStandardizedAssessment');
    }

    /**
     * @param \Arbor\Model\StudentStandardizedAssessment $studentStandardizedAssessment
     */
    public function setStudentStandardizedAssessment(\Arbor\Model\StudentStandardizedAssessment $studentStandardizedAssessment = null)
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
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getCompletedStaff()
    {
        return $this->getProperty('completedStaff');
    }

    /**
     * @param \Arbor\Model\Staff $completedStaff
     */
    public function setCompletedStaff(\Arbor\Model\Staff $completedStaff = null)
    {
        $this->setProperty('completedStaff', $completedStaff);
    }
}
