<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CandidateAccessArrangement extends ModelBase
{
    public const CANDIDATE = 'candidate';

    public const ACCESS_ARRANGEMENT = 'accessArrangement';

    public const EXTRA_TIME_PERCENTAGE = 'extraTimePercentage';

    public const REASON = 'reason';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::CANDIDATE_ACCESS_ARRANGEMENT;

    /**
     * @param Query $query
     * @return CandidateAccessArrangement[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_ACCESS_ARRANGEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateAccessArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_ACCESS_ARRANGEMENT, $id);
    }

    /**
     * @return \Arbor\Model\Candidate
     */
    public function getCandidate()
    {
        return $this->getProperty('candidate');
    }

    /**
     * @param \Arbor\Model\Candidate $candidate
     */
    public function setCandidate(\Arbor\Model\Candidate $candidate = null)
    {
        $this->setProperty('candidate', $candidate);
    }

    /**
     * @return \Arbor\Model\AccessArrangement
     */
    public function getAccessArrangement()
    {
        return $this->getProperty('accessArrangement');
    }

    /**
     * @param \Arbor\Model\AccessArrangement $accessArrangement
     */
    public function setAccessArrangement(\Arbor\Model\AccessArrangement $accessArrangement = null)
    {
        $this->setProperty('accessArrangement', $accessArrangement);
    }

    /**
     * @return float
     */
    public function getExtraTimePercentage()
    {
        return $this->getProperty('extraTimePercentage');
    }

    /**
     * @param float $extraTimePercentage
     */
    public function setExtraTimePercentage(float $extraTimePercentage = null)
    {
        $this->setProperty('extraTimePercentage', $extraTimePercentage);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty('reason');
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason = null)
    {
        $this->setProperty('reason', $reason);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }
}
