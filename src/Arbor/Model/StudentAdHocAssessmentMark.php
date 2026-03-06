<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentAdHocAssessmentMark extends ModelBase
{
    public const AD_HOC_ASSESSMENT_BATCH = 'adHocAssessmentBatch';

    public const STUDENT = 'student';

    public const AD_HOC_ASSESSMENT = 'adHocAssessment';

    public const ASSESSMENT_REFERENCE_DATE = 'assessmentReferenceDate';

    public const SCOPE_ENTITY = 'scopeEntity';

    public const GRADE = 'grade';

    public const NUMBER = 'number';

    public const ASSESSMENT_MARK_NON_SUBMISSION_REASON = 'assessmentMarkNonSubmissionReason';

    public const MARKING_STAFF = 'markingStaff';

    public const COMPLETED_DATETIME = 'completedDatetime';

    public const COMPLETED_STAFF = 'completedStaff';

    public const APPROVED_DATETIME = 'approvedDatetime';

    public const APPROVED_STAFF = 'approvedStaff';

    protected $_resourceType = ResourceType::STUDENT_AD_HOC_ASSESSMENT_MARK;

    /**
     * @param Query $query
     * @return StudentAdHocAssessmentMark[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_AD_HOC_ASSESSMENT_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentAdHocAssessmentMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_AD_HOC_ASSESSMENT_MARK, $id);
    }

    /**
     * @return \Arbor\Model\AdHocAssessmentBatch
     */
    public function getAdHocAssessmentBatch()
    {
        return $this->getProperty('adHocAssessmentBatch');
    }

    /**
     * @param \Arbor\Model\AdHocAssessmentBatch $adHocAssessmentBatch
     */
    public function setAdHocAssessmentBatch(\Arbor\Model\AdHocAssessmentBatch $adHocAssessmentBatch = null)
    {
        $this->setProperty('adHocAssessmentBatch', $adHocAssessmentBatch);
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
     * @return \Arbor\Model\AdHocAssessment
     */
    public function getAdHocAssessment()
    {
        return $this->getProperty('adHocAssessment');
    }

    /**
     * @param \Arbor\Model\AdHocAssessment $adHocAssessment
     */
    public function setAdHocAssessment(\Arbor\Model\AdHocAssessment $adHocAssessment = null)
    {
        $this->setProperty('adHocAssessment', $adHocAssessment);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentReferenceDate()
    {
        return $this->getProperty('assessmentReferenceDate');
    }

    /**
     * @param \DateTime $assessmentReferenceDate
     */
    public function setAssessmentReferenceDate(\DateTime $assessmentReferenceDate = null)
    {
        $this->setProperty('assessmentReferenceDate', $assessmentReferenceDate);
    }

    /**
     * @return ModelBase
     */
    public function getScopeEntity()
    {
        return $this->getProperty('scopeEntity');
    }

    /**
     * @param ModelBase $scopeEntity
     */
    public function setScopeEntity(\ModelBase $scopeEntity = null)
    {
        $this->setProperty('scopeEntity', $scopeEntity);
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
    public function getNumber()
    {
        return $this->getProperty('number');
    }

    /**
     * @param float $number
     */
    public function setNumber(float $number = null)
    {
        $this->setProperty('number', $number);
    }

    /**
     * @return \Arbor\Model\AssessmentMarkNonSubmissionReason
     */
    public function getAssessmentMarkNonSubmissionReason()
    {
        return $this->getProperty('assessmentMarkNonSubmissionReason');
    }

    /**
     * @param \Arbor\Model\AssessmentMarkNonSubmissionReason
     * $assessmentMarkNonSubmissionReason
     */
    public function setAssessmentMarkNonSubmissionReason(\Arbor\Model\AssessmentMarkNonSubmissionReason $assessmentMarkNonSubmissionReason = null)
    {
        $this->setProperty('assessmentMarkNonSubmissionReason', $assessmentMarkNonSubmissionReason);
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

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty('approvedDatetime');
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty('approvedDatetime', $approvedDatetime);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getApprovedStaff()
    {
        return $this->getProperty('approvedStaff');
    }

    /**
     * @param \Arbor\Model\Staff $approvedStaff
     */
    public function setApprovedStaff(\Arbor\Model\Staff $approvedStaff = null)
    {
        $this->setProperty('approvedStaff', $approvedStaff);
    }
}
