<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProbationReview extends ModelBase
{
    const PROBATION = 'probation';

    const REVIEW_DATE = 'reviewDate';

    const REVIEW_OUTCOME = 'reviewOutcome';

    const REVIEW_NOTES = 'reviewNotes';

    protected $_resourceType = ResourceType::PROBATION_REVIEW;

    /**
     * @param Query $query
     * @return ProbationReview[] | Collection
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

        $query->setResourceType(ResourceType::PROBATION_REVIEW);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProbationReview
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROBATION_REVIEW, $id);
    }

    /**
     * @return Probation
     */
    public function getProbation()
    {
        return $this->getProperty('probation');
    }

    /**
     * @param Probation $probation
     */
    public function setProbation(Probation $probation = null)
    {
        $this->setProperty('probation', $probation);
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
     * @return string
     */
    public function getReviewOutcome()
    {
        return $this->getProperty('reviewOutcome');
    }

    /**
     * @param string $reviewOutcome
     */
    public function setReviewOutcome($reviewOutcome = null)
    {
        $this->setProperty('reviewOutcome', $reviewOutcome);
    }

    /**
     * @return string
     */
    public function getReviewNotes()
    {
        return $this->getProperty('reviewNotes');
    }

    /**
     * @param string $reviewNotes
     */
    public function setReviewNotes($reviewNotes = null)
    {
        $this->setProperty('reviewNotes', $reviewNotes);
    }
}
