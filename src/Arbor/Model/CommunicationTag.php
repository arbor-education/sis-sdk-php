<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CommunicationTag extends ModelBase
{
    public const COMMUNICATION = 'communication';

    public const TAGGED_ENTITY = 'taggedEntity';

    public const IS_SHARED = 'isShared';

    protected $_resourceType = ResourceType::COMMUNICATION_TAG;

    /**
     * @param Query $query
     * @return CommunicationTag[] | Collection
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

        $query->setResourceType(ResourceType::COMMUNICATION_TAG);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CommunicationTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COMMUNICATION_TAG, $id);
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
     * @return ModelBase
     */
    public function getTaggedEntity()
    {
        return $this->getProperty('taggedEntity');
    }

    /**
     * @param ModelBase $taggedEntity
     */
    public function setTaggedEntity(\ModelBase $taggedEntity = null)
    {
        $this->setProperty('taggedEntity', $taggedEntity);
    }

    /**
     * @return bool
     */
    public function getIsShared()
    {
        return $this->getProperty('isShared');
    }

    /**
     * @param bool $isShared
     */
    public function setIsShared(bool $isShared = null)
    {
        $this->setProperty('isShared', $isShared);
    }
}
