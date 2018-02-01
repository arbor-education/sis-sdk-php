<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CandidateEntryAudit extends ModelBase
{

    const CANDIDATE_ENTRY = 'candidateEntry';

    const TYPE = 'type';

    const ACTION_DATETIME = 'actionDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_ENTRY_AUDIT;

    /**
     * @param Query $query
     * @return CandidateEntryAudit[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_ENTRY_AUDIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateEntryAudit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_ENTRY_AUDIT, $id);
    }

    /**
     * @return CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty('candidateEntry');
    }

    /**
     * @param CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(CandidateEntry $candidateEntry = null)
    {
        $this->setProperty('candidateEntry', $candidateEntry);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return \DateTime
     */
    public function getActionDatetime()
    {
        return $this->getProperty('actionDatetime');
    }

    /**
     * @param \DateTime $actionDatetime
     */
    public function setActionDatetime(\DateTime $actionDatetime = null)
    {
        $this->setProperty('actionDatetime', $actionDatetime);
    }


}
