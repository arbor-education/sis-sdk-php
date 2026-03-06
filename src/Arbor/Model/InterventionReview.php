<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InterventionReview extends ModelBase
{
    public const INTERVENTION = 'intervention';

    public const REVIEW_DUE_DATE = 'reviewDueDate';

    public const REVIEW_COMPLETED_DATE = 'reviewCompletedDate';

    public const REVIEW = 'review';

    public const RECOMMENDATIONS = 'recommendations';

    protected $_resourceType = ResourceType::INTERVENTION_REVIEW;

    /**
     * @param Query $query
     * @return InterventionReview[] | Collection
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
     * @return \Arbor\Model\Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param \Arbor\Model\Intervention $intervention
     */
    public function setIntervention(\Arbor\Model\Intervention $intervention = null)
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
    public function setReview(string $review = null)
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
    public function setRecommendations(string $recommendations = null)
    {
        $this->setProperty('recommendations', $recommendations);
    }
}
