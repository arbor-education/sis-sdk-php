<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ExclusionReview extends ModelBase
{
    public const COMMENT = 'comment';

    public const EXCLUSION_REVIEW_OUTCOME = 'exclusionReviewOutcome';

    public const PERMANENT_EXCLUSION = 'permanentExclusion';

    public const REVIEW_DATE = 'reviewDate';

    public const STUDENT = 'student';

    public const STUDENT_REINSTATEMENT_DATE = 'studentReinstatementDate';

    public const SEN_EXPERT_REQUESTED = 'senExpertRequested';

    protected $_resourceType = ResourceType::EXCLUSION_REVIEW;

    /**
     * @param Query $query
     * @return ExclusionReview[] | Collection
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
    public function setComment(string $comment = null)
    {
        $this->setProperty('comment', $comment);
    }

    /**
     * @return \Arbor\Model\ExclusionReviewOutcome
     */
    public function getExclusionReviewOutcome()
    {
        return $this->getProperty('exclusionReviewOutcome');
    }

    /**
     * @param \Arbor\Model\ExclusionReviewOutcome $exclusionReviewOutcome
     */
    public function setExclusionReviewOutcome(\Arbor\Model\ExclusionReviewOutcome $exclusionReviewOutcome = null)
    {
        $this->setProperty('exclusionReviewOutcome', $exclusionReviewOutcome);
    }

    /**
     * @return \Arbor\Model\PermanentExclusion
     */
    public function getPermanentExclusion()
    {
        return $this->getProperty('permanentExclusion');
    }

    /**
     * @param \Arbor\Model\PermanentExclusion $permanentExclusion
     */
    public function setPermanentExclusion(\Arbor\Model\PermanentExclusion $permanentExclusion = null)
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
    public function setSenExpertRequested(bool $senExpertRequested = null)
    {
        $this->setProperty('senExpertRequested', $senExpertRequested);
    }
}
