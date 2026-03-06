<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CandidateEntryAudit extends ModelBase
{
    public const CANDIDATE_ENTRY = 'candidateEntry';

    public const TYPE = 'type';

    public const ACTION_DATETIME = 'actionDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_ENTRY_AUDIT;

    /**
     * @param Query $query
     * @return CandidateEntryAudit[] | Collection
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
     * @return \Arbor\Model\CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty('candidateEntry');
    }

    /**
     * @param \Arbor\Model\CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(\Arbor\Model\CandidateEntry $candidateEntry = null)
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
    public function setType(string $type = null)
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
