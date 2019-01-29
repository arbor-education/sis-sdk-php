<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\InHouseCandidate;
use \Arbor\Model\AccessArrangement;

class InHouseCandidateAccessArrangement extends ModelBase
{

    protected $_resourceType = ResourceType::IN_HOUSE_CANDIDATE_ACCESS_ARRANGEMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\InHouseCandidateAccessArrangement[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("InHouseCandidateAccessArrangement");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\InHouseCandidateAccessArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("InHouseCandidateAccessArrangement", $id);
    }

    /**
     * @return InHouseCandidate
     */
    public function getInHouseCandidate()
    {
        return $this->getProperty("inHouseCandidate");
    }

    /**
     * @param InHouseCandidate $inHouseCandidate
     */
    public function setInHouseCandidate(InHouseCandidate $inHouseCandidate = null)
    {
        $this->setProperty("inHouseCandidate", $inHouseCandidate);
    }

    /**
     * @return AccessArrangement
     */
    public function getAccessArrangement()
    {
        return $this->getProperty("accessArrangement");
    }

    /**
     * @param AccessArrangement $accessArrangement
     */
    public function setAccessArrangement(AccessArrangement $accessArrangement = null)
    {
        $this->setProperty("accessArrangement", $accessArrangement);
    }

    /**
     * @return float
     */
    public function getExtraTimePercentage()
    {
        return $this->getProperty("extraTimePercentage");
    }

    /**
     * @param float $extraTimePercentage
     */
    public function setExtraTimePercentage($extraTimePercentage = null)
    {
        $this->setProperty("extraTimePercentage", $extraTimePercentage);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty("reason");
    }

    /**
     * @param string $reason
     */
    public function setReason($reason = null)
    {
        $this->setProperty("reason", $reason);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }


}