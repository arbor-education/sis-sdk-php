<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CandidateAccessArrangement extends ModelBase
{

    const CANDIDATE = 'candidate';

    const ACCESS_ARRANGEMENT = 'accessArrangement';

    const EXTRA_TIME_PERCENTAGE = 'extraTimePercentage';

    const REASON = 'reason';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::CANDIDATE_ACCESS_ARRANGEMENT;

    /**
     * @param Query $query
     * @return CandidateAccessArrangement[] | Collection
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
     * @return Candidate
     */
    public function getCandidate()
    {
        return $this->getProperty('candidate');
    }

    /**
     * @param Candidate $candidate
     */
    public function setCandidate(Candidate $candidate = null)
    {
        $this->setProperty('candidate', $candidate);
    }

    /**
     * @return AccessArrangement
     */
    public function getAccessArrangement()
    {
        return $this->getProperty('accessArrangement');
    }

    /**
     * @param AccessArrangement $accessArrangement
     */
    public function setAccessArrangement(AccessArrangement $accessArrangement = null)
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
    public function setExtraTimePercentage($extraTimePercentage = null)
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
    public function setReason($reason = null)
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
