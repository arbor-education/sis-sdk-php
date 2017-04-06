<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CandidateEntry;
use \Arbor\Model\AccessArrangement;

class CandidateAccessArrangement extends ModelBase
{

    const CANDIDATE_ENTRY = 'candidateEntry';

    const ACCESS_ARRANGEMENT = 'accessArrangement';

    protected $_resourceType = ResourceType::CANDIDATE_ACCESS_ARRANGEMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CandidateAccessArrangement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CandidateAccessArrangement");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CandidateAccessArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CANDIDATE_ACCESS_ARRANGEMENT, $id);
    }

    /**
     * @return CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty("candidateEntry");
    }

    /**
     * @param CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(CandidateEntry $candidateEntry = null)
    {
        $this->setProperty("candidateEntry", $candidateEntry);
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


}
