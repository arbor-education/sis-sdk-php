<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EntityPushdownSyncedEntity extends ModelBase
{
    public const ENTITY_PUSHDOWN = 'entityPushdown';

    public const SYNCED_ENTITY = 'syncedEntity';

    public const SYNCED_ENTITY_OBJECT_TYPE_ID = 'syncedEntityObjectTypeId';

    public const GLOBAL_IDENTIFIER = 'globalIdentifier';

    public const IS_TEMPLATE = 'isTemplate';

    public const ALLOW_EDIT = 'allowEdit';

    protected $_resourceType = ResourceType::ENTITY_PUSHDOWN_SYNCED_ENTITY;

    /**
     * @param Query $query
     * @return EntityPushdownSyncedEntity[] | Collection
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

        $query->setResourceType(ResourceType::ENTITY_PUSHDOWN_SYNCED_ENTITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EntityPushdownSyncedEntity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ENTITY_PUSHDOWN_SYNCED_ENTITY, $id);
    }

    /**
     * @return \Arbor\Model\EntityPushdown
     */
    public function getEntityPushdown()
    {
        return $this->getProperty('entityPushdown');
    }

    /**
     * @param \Arbor\Model\EntityPushdown $entityPushdown
     */
    public function setEntityPushdown(\Arbor\Model\EntityPushdown $entityPushdown = null)
    {
        $this->setProperty('entityPushdown', $entityPushdown);
    }

    /**
     * @return ModelBase
     */
    public function getSyncedEntity()
    {
        return $this->getProperty('syncedEntity');
    }

    /**
     * @param ModelBase $syncedEntity
     */
    public function setSyncedEntity(\ModelBase $syncedEntity = null)
    {
        $this->setProperty('syncedEntity', $syncedEntity);
    }

    /**
     * @return int
     */
    public function getSyncedEntityObjectTypeId()
    {
        return $this->getProperty('syncedEntityObjectTypeId');
    }

    /**
     * @param int $syncedEntityObjectTypeId
     */
    public function setSyncedEntityObjectTypeId(int $syncedEntityObjectTypeId = null)
    {
        $this->setProperty('syncedEntityObjectTypeId', $syncedEntityObjectTypeId);
    }

    /**
     * @return string
     */
    public function getGlobalIdentifier()
    {
        return $this->getProperty('globalIdentifier');
    }

    /**
     * @param string $globalIdentifier
     */
    public function setGlobalIdentifier(string $globalIdentifier = null)
    {
        $this->setProperty('globalIdentifier', $globalIdentifier);
    }

    /**
     * @return bool
     */
    public function getIsTemplate()
    {
        return $this->getProperty('isTemplate');
    }

    /**
     * @param bool $isTemplate
     */
    public function setIsTemplate(bool $isTemplate = null)
    {
        $this->setProperty('isTemplate', $isTemplate);
    }

    /**
     * @return bool
     */
    public function getAllowEdit()
    {
        return $this->getProperty('allowEdit');
    }

    /**
     * @param bool $allowEdit
     */
    public function setAllowEdit(bool $allowEdit = null)
    {
        $this->setProperty('allowEdit', $allowEdit);
    }
}
