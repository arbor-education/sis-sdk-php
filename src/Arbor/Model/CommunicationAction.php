<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CommunicationAction extends ModelBase
{
    public const COMMUNICATION = 'communication';

    public const ACTION_TAKEN = 'actionTaken';

    public const REPLY = 'reply';

    public const ACTION_DATETIME = 'actionDatetime';

    protected $_resourceType = ResourceType::COMMUNICATION_ACTION;

    /**
     * @param Query $query
     * @return CommunicationAction[] | Collection
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

        $query->setResourceType(ResourceType::COMMUNICATION_ACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CommunicationAction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COMMUNICATION_ACTION, $id);
    }

    /**
     * @return ModelBase
     */
    public function getCommunication()
    {
        return $this->getProperty('communication');
    }

    /**
     * @param ModelBase $communication
     */
    public function setCommunication(\ModelBase $communication = null)
    {
        $this->setProperty('communication', $communication);
    }

    /**
     * @return string
     */
    public function getActionTaken()
    {
        return $this->getProperty('actionTaken');
    }

    /**
     * @param string $actionTaken
     */
    public function setActionTaken(string $actionTaken = null)
    {
        $this->setProperty('actionTaken', $actionTaken);
    }

    /**
     * @return ModelBase
     */
    public function getReply()
    {
        return $this->getProperty('reply');
    }

    /**
     * @param ModelBase $reply
     */
    public function setReply(\ModelBase $reply = null)
    {
        $this->setProperty('reply', $reply);
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
