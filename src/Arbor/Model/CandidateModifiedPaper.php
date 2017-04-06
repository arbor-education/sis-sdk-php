<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CandidateEntry;
use \Arbor\Model\ModifiedPaper;

class CandidateModifiedPaper extends ModelBase
{

    const CANDIDATE_ENTRY = 'candidateEntry';

    const MODIFIED_PAPER = 'modifiedPaper';

    protected $_resourceType = ResourceType::CANDIDATE_MODIFIED_PAPER;

    /**
     * @param \Arbor\Query\Query $query
     * @return CandidateModifiedPaper[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CandidateModifiedPaper");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CandidateModifiedPaper
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CANDIDATE_MODIFIED_PAPER, $id);
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
     * @return ModifiedPaper
     */
    public function getModifiedPaper()
    {
        return $this->getProperty("modifiedPaper");
    }

    /**
     * @param ModifiedPaper $modifiedPaper
     */
    public function setModifiedPaper(ModifiedPaper $modifiedPaper = null)
    {
        $this->setProperty("modifiedPaper", $modifiedPaper);
    }


}
