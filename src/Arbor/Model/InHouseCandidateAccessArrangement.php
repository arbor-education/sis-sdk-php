<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InHouseCandidateAccessArrangement extends ModelBase
{

    const IN_HOUSE_CANDIDATE = 'inHouseCandidate';

    const ACCESS_ARRANGEMENT = 'accessArrangement';

    const EXTRA_TIME_PERCENTAGE = 'extraTimePercentage';

    const REASON = 'reason';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::IN_HOUSE_CANDIDATE_ACCESS_ARRANGEMENT;

    /**
     * @param Query $query
     * @return InHouseCandidateAccessArrangement[] | Collection
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

        $query->setResourceType(ResourceType::IN_HOUSE_CANDIDATE_ACCESS_ARRANGEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InHouseCandidateAccessArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_HOUSE_CANDIDATE_ACCESS_ARRANGEMENT, $id);
    }

    /**
     * @return InHouseCandidate
     */
    public function getInHouseCandidate()
    {
        return $this->getProperty('inHouseCandidate');
    }

    /**
     * @param InHouseCandidate $inHouseCandidate
     */
    public function setInHouseCandidate(InHouseCandidate $inHouseCandidate = null)
    {
        $this->setProperty('inHouseCandidate', $inHouseCandidate);
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
