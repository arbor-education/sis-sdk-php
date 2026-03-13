<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentAssessmentMark extends ModelBase
{
    public const STUDENT = 'student';

    public const ASSESSMENT_SUBJECT = 'assessmentSubject';

    public const ASSESSMENT_COMPONENT = 'assessmentComponent';

    public const ASSESSMENT_DATA_DROP = 'assessmentDataDrop';

    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const ASSESSMENT_GRADE = 'assessmentGrade';

    public const GRADE_VALUE = 'gradeValue';

    public const POINT_VALUE = 'pointValue';

    public const ASSESSMENT_DATE = 'assessmentDate';

    public const MARKING_STAFF = 'markingStaff';

    public const APPROVAL_STAFF = 'approvalStaff';

    public const APPROVAL_DATE = 'approvalDate';

    protected $_resourceType = ResourceType::STUDENT_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return StudentAssessmentMark[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_ASSESSMENT_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentAssessmentMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_ASSESSMENT_MARK, $id);
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
     * @return \Arbor\Model\AssessmentGrade
     */
    public function getAssessmentGrade()
    {
        return $this->getProperty('assessmentGrade');
    }

    /**
     * @param \Arbor\Model\AssessmentGrade $assessmentGrade
     */
    public function setAssessmentGrade(\Arbor\Model\AssessmentGrade $assessmentGrade = null)
    {
        $this->setProperty('assessmentGrade', $assessmentGrade);
    }

    /**
     * @return string
     */
    public function getGradeValue()
    {
        return $this->getProperty('gradeValue');
    }

    /**
     * @param string $gradeValue
     */
    public function setGradeValue(string $gradeValue = null)
    {
        $this->setProperty('gradeValue', $gradeValue);
    }

    /**
     * @return int
     */
    public function getPointValue()
    {
        return $this->getProperty('pointValue');
    }

    /**
     * @param int $pointValue
     */
    public function setPointValue(int $pointValue = null)
    {
        $this->setProperty('pointValue', $pointValue);
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
     * @return \Arbor\Model\Staff
     */
    public function getMarkingStaff()
    {
        return $this->getProperty('markingStaff');
    }

    /**
     * @param \Arbor\Model\Staff $markingStaff
     */
    public function setMarkingStaff(\Arbor\Model\Staff $markingStaff = null)
    {
        $this->setProperty('markingStaff', $markingStaff);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getApprovalStaff()
    {
        return $this->getProperty('approvalStaff');
    }

    /**
     * @param \Arbor\Model\Staff $approvalStaff
     */
    public function setApprovalStaff(\Arbor\Model\Staff $approvalStaff = null)
    {
        $this->setProperty('approvalStaff', $approvalStaff);
    }

    /**
     * @return \DateTime
     */
    public function getApprovalDate()
    {
        return $this->getProperty('approvalDate');
    }

    /**
     * @param \DateTime $approvalDate
     */
    public function setApprovalDate(\DateTime $approvalDate = null)
    {
        $this->setProperty('approvalDate', $approvalDate);
    }
}
