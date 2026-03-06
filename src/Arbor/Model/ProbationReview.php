<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProbationReview extends ModelBase
{
    public const PROBATION = 'probation';

    public const REVIEW_DATE = 'reviewDate';

    public const REVIEW_OUTCOME = 'reviewOutcome';

    public const REVIEW_NOTES = 'reviewNotes';

    protected $_resourceType = ResourceType::PROBATION_REVIEW;

    /**
     * @param Query $query
     * @return ProbationReview[] | Collection
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
     * @return \Arbor\Model\Probation
     */
    public function getProbation()
    {
        return $this->getProperty('probation');
    }

    /**
     * @param \Arbor\Model\Probation $probation
     */
    public function setProbation(\Arbor\Model\Probation $probation = null)
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
    public function setReviewOutcome(string $reviewOutcome = null)
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
    public function setReviewNotes(string $reviewNotes = null)
    {
        $this->setProperty('reviewNotes', $reviewNotes);
    }
}
