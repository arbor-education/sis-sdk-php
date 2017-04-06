<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class CommunicationAction extends ModelBase
{

    const COMMUNICATION = 'communication';

    const ACTION_TAKEN = 'actionTaken';

    const REPLY = 'reply';

    const ACTION_DATETIME = 'actionDatetime';

    protected $_resourceType = ResourceType::COMMUNICATION_ACTION;

    /**
     * @param \Arbor\Query\Query $query
     * @return CommunicationAction[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CommunicationAction");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CommunicationAction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::COMMUNICATION_ACTION, $id);
    }

    /**
     * @return ModelBase
     */
    public function getCommunication()
    {
        return $this->getProperty("communication");
    }

    /**
     * @param ModelBase $communication
     */
    public function setCommunication(ModelBase $communication = null)
    {
        $this->setProperty("communication", $communication);
    }

    /**
     * @return string
     */
    public function getActionTaken()
    {
        return $this->getProperty("actionTaken");
    }

    /**
     * @param string $actionTaken
     */
    public function setActionTaken($actionTaken = null)
    {
        $this->setProperty("actionTaken", $actionTaken);
    }

    /**
     * @return ModelBase
     */
    public function getReply()
    {
        return $this->getProperty("reply");
    }

    /**
     * @param ModelBase $reply
     */
    public function setReply(ModelBase $reply = null)
    {
        $this->setProperty("reply", $reply);
    }

    /**
     * @return \DateTime
     */
    public function getActionDatetime()
    {
        return $this->getProperty("actionDatetime");
    }

    /**
     * @param \DateTime $actionDatetime
     */
    public function setActionDatetime(\DateTime $actionDatetime = null)
    {
        $this->setProperty("actionDatetime", $actionDatetime);
    }


}
