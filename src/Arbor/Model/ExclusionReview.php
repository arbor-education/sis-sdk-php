<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ExclusionReview extends ModelBase
{
    const COMMENT = 'comment';

    const EXCLUSION_REVIEW_OUTCOME = 'exclusionReviewOutcome';

    const PERMANENT_EXCLUSION = 'permanentExclusion';

    const REVIEW_DATE = 'reviewDate';

    const STUDENT = 'student';

    const STUDENT_REINSTATEMENT_DATE = 'studentReinstatementDate';

    const SEN_EXPERT_REQUESTED = 'senExpertRequested';

    protected $_resourceType = ResourceType::EXCLUSION_REVIEW;

    /**
     * @param Query $query
     * @return ExclusionReview[] | Collection
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

        $query->setResourceType(ResourceType::EXCLUSION_REVIEW);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ExclusionReview
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EXCLUSION_REVIEW, $id);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->getProperty('comment');
    }

    /**
     * @param string $comment
     */
    public function setComment($comment = null)
    {
        $this->setProperty('comment', $comment);
    }

    /**
     * @return ExclusionReviewOutcome
     */
    public function getExclusionReviewOutcome()
    {
        return $this->getProperty('exclusionReviewOutcome');
    }

    /**
     * @param ExclusionReviewOutcome $exclusionReviewOutcome
     */
    public function setExclusionReviewOutcome(ExclusionReviewOutcome $exclusionReviewOutcome = null)
    {
        $this->setProperty('exclusionReviewOutcome', $exclusionReviewOutcome);
    }

    /**
     * @return PermanentExclusion
     */
    public function getPermanentExclusion()
    {
        return $this->getProperty('permanentExclusion');
    }

    /**
     * @param PermanentExclusion $permanentExclusion
     */
    public function setPermanentExclusion(PermanentExclusion $permanentExclusion = null)
    {
        $this->setProperty('permanentExclusion', $permanentExclusion);
    }

    /**
     * @return \DateTime
     */
    public function getReviewDate()
    {
        return $this->getProperty('reviewDate');
    }

    /**
     * @param \DateTime $reviewDate
     */
    public function setReviewDate(\DateTime $reviewDate = null)
    {
        $this->setProperty('reviewDate', $reviewDate);
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
     * @return \DateTime
     */
    public function getStudentReinstatementDate()
    {
        return $this->getProperty('studentReinstatementDate');
    }

    /**
     * @param \DateTime $studentReinstatementDate
     */
    public function setStudentReinstatementDate(\DateTime $studentReinstatementDate = null)
    {
        $this->setProperty('studentReinstatementDate', $studentReinstatementDate);
    }

    /**
     * @return bool
     */
    public function getSenExpertRequested()
    {
        return $this->getProperty('senExpertRequested');
    }

    /**
     * @param bool $senExpertRequested
     */
    public function setSenExpertRequested($senExpertRequested = null)
    {
        $this->setProperty('senExpertRequested', $senExpertRequested);
    }
}
