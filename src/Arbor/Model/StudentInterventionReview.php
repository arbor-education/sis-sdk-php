<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentInterventionReview extends \ModelBase
{
    public const STUDENT_INTERVENTION = 'studentIntervention';

    public const INTERVENTION_REVIEW = 'interventionReview';

    public const REVIEW = 'review';

    public const REVIEW_DATE = 'reviewDate';

    protected $_resourceType = ResourceType::STUDENT_INTERVENTION_REVIEW;

    /**
     * @param Query $query
     * @return StudentInterventionReview[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::STUDENT_INTERVENTION_REVIEW);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentInterventionReview
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_INTERVENTION_REVIEW, $id);
    }

    /**
     * @return StudentIntervention
     */
    public function getStudentIntervention()
    {
        return $this->getProperty('studentIntervention');
    }

    /**
     * @param StudentIntervention $studentIntervention
     */
    public function setStudentIntervention(\StudentIntervention $studentIntervention = null)
    {
        $this->setProperty('studentIntervention', $studentIntervention);
    }

    /**
     * @return InterventionReview
     */
    public function getInterventionReview()
    {
        return $this->getProperty('interventionReview');
    }

    /**
     * @param InterventionReview $interventionReview
     */
    public function setInterventionReview(\InterventionReview $interventionReview = null)
    {
        $this->setProperty('interventionReview', $interventionReview);
    }

    /**
     * @return string
     */
    public function getReview()
    {
        return $this->getProperty('review');
    }

    /**
     * @param string $review
     */
    public function setReview(string $review = null)
    {
        $this->setProperty('review', $review);
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
}
