<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class CommunicationTag extends ModelBase
{
    const COMMUNICATION = 'communication';

    const TAGGED_ENTITY = 'taggedEntity';

    const IS_SHARED = 'isShared';

    protected $_resourceType = ResourceType::COMMUNICATION_TAG;

    /**
     * @param \Arbor\Query\Query $query
     * @return CommunicationTag[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CommunicationTag");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CommunicationTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::COMMUNICATION_TAG, $id);
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
     * @return ModelBase
     */
    public function getTaggedEntity()
    {
        return $this->getProperty("taggedEntity");
    }

    /**
     * @param ModelBase $taggedEntity
     */
    public function setTaggedEntity(ModelBase $taggedEntity = null)
    {
        $this->setProperty("taggedEntity", $taggedEntity);
    }

    /**
     * @return bool
     */
    public function getIsShared()
    {
        return $this->getProperty("isShared");
    }

    /**
     * @param bool $isShared
     */
    public function setIsShared($isShared = null)
    {
        $this->setProperty("isShared", $isShared);
    }
}
