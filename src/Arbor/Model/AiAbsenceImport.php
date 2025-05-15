<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AiAbsenceImport extends ModelBase
{
    public const SOURCE = 'source';

    public const STATUS = 'status';

    public const AI_AGENT_RESPONSE_IDENTIFIER = 'aiAgentResponseIdentifier';

    protected $_resourceType = ResourceType::AI_ABSENCE_IMPORT;

    /**
     * @param Query $query
     * @return AiAbsenceImport[] | Collection
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

        $query->setResourceType(ResourceType::AI_ABSENCE_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AiAbsenceImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AI_ABSENCE_IMPORT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param ModelBase $source
     */
    public function setSource(\ModelBase $source = null)
    {
        $this->setProperty('source', $source);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return string
     */
    public function getAiAgentResponseIdentifier()
    {
        return $this->getProperty('aiAgentResponseIdentifier');
    }

    /**
     * @param string $aiAgentResponseIdentifier
     */
    public function setAiAgentResponseIdentifier(string $aiAgentResponseIdentifier = null)
    {
        $this->setProperty('aiAgentResponseIdentifier', $aiAgentResponseIdentifier);
    }
}
