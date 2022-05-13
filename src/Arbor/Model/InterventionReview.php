<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InterventionReview extends ModelBase
{
    const INTERVENTION = 'intervention';

    const REVIEW_DUE_DATE = 'reviewDueDate';

    const REVIEW_COMPLETED_DATE = 'reviewCompletedDate';

    const REVIEW = 'review';

    const RECOMMENDATIONS = 'recommendations';

    protected $_resourceType = ResourceType::INTERVENTION_REVIEW;

    /**
     * @param Query $query
     * @return InterventionReview[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_REVIEW);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionReview
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_REVIEW, $id);
    }

    /**
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
    }

    /**
     * @return \DateTime
     */
    public function getReviewDueDate()
    {
        return $this->getProperty('reviewDueDate');
    }

    /**
     * @param \DateTime $reviewDueDate
     */
    public function setReviewDueDate(\DateTime $reviewDueDate = null)
    {
        $this->setProperty('reviewDueDate', $reviewDueDate);
    }

    /**
     * @return \DateTime
     */
    public function getReviewCompletedDate()
    {
        return $this->getProperty('reviewCompletedDate');
    }

    /**
     * @param \DateTime $reviewCompletedDate
     */
    public function setReviewCompletedDate(\DateTime $reviewCompletedDate = null)
    {
        $this->setProperty('reviewCompletedDate', $reviewCompletedDate);
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
    public function setReview($review = null)
    {
        $this->setProperty('review', $review);
    }

    /**
     * @return string
     */
    public function getRecommendations()
    {
        return $this->getProperty('recommendations');
    }

    /**
     * @param string $recommendations
     */
    public function setRecommendations($recommendations = null)
    {
        $this->setProperty('recommendations', $recommendations);
    }
}
