<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EntityPushdown extends ModelBase
{
    public const CONTROLLER_APPLICATION = 'controllerApplication';

    public const CONTROLLER_ENTITY_PUSHDOWN_ID = 'controllerEntityPushdownId';

    public const TITLE = 'title';

    public const CONTROLLER_PARENT_ENTITY = 'controllerParentEntity';

    public const CONTROLLER_PARENT_ENTITY_OBJECT_TYPE_ID = 'controllerParentEntityObjectTypeId';

    public const SYNC_MODE = 'syncMode';

    public const DEFAULT_SUBSCRIBE_MODE = 'defaultSubscribeMode';

    public const DEFAULT_ALLOW_EDIT = 'defaultAllowEdit';

    public const DEFAULT_ALLOW_DELETE = 'defaultAllowDelete';

    protected $_resourceType = ResourceType::ENTITY_PUSHDOWN;

    /**
     * @param Query $query
     * @return EntityPushdown[] | Collection
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

        $query->setResourceType(ResourceType::ENTITY_PUSHDOWN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EntityPushdown
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ENTITY_PUSHDOWN, $id);
    }

    /**
     * @return string
     */
    public function getControllerApplication()
    {
        return $this->getProperty('controllerApplication');
    }

    /**
     * @param string $controllerApplication
     */
    public function setControllerApplication(string $controllerApplication = null)
    {
        $this->setProperty('controllerApplication', $controllerApplication);
    }

    /**
     * @return int
     */
    public function getControllerEntityPushdownId()
    {
        return $this->getProperty('controllerEntityPushdownId');
    }

    /**
     * @param int $controllerEntityPushdownId
     */
    public function setControllerEntityPushdownId(int $controllerEntityPushdownId = null)
    {
        $this->setProperty('controllerEntityPushdownId', $controllerEntityPushdownId);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return ModelBase
     */
    public function getControllerParentEntity()
    {
        return $this->getProperty('controllerParentEntity');
    }

    /**
     * @param ModelBase $controllerParentEntity
     */
    public function setControllerParentEntity(\ModelBase $controllerParentEntity = null)
    {
        $this->setProperty('controllerParentEntity', $controllerParentEntity);
    }

    /**
     * @return int
     */
    public function getControllerParentEntityObjectTypeId()
    {
        return $this->getProperty('controllerParentEntityObjectTypeId');
    }

    /**
     * @param int $controllerParentEntityObjectTypeId
     */
    public function setControllerParentEntityObjectTypeId(int $controllerParentEntityObjectTypeId = null)
    {
        $this->setProperty('controllerParentEntityObjectTypeId', $controllerParentEntityObjectTypeId);
    }

    /**
     * @return string
     */
    public function getSyncMode()
    {
        return $this->getProperty('syncMode');
    }

    /**
     * @param string $syncMode
     */
    public function setSyncMode(string $syncMode = null)
    {
        $this->setProperty('syncMode', $syncMode);
    }

    /**
     * @return string
     */
    public function getDefaultSubscribeMode()
    {
        return $this->getProperty('defaultSubscribeMode');
    }

    /**
     * @param string $defaultSubscribeMode
     */
    public function setDefaultSubscribeMode(string $defaultSubscribeMode = null)
    {
        $this->setProperty('defaultSubscribeMode', $defaultSubscribeMode);
    }

    /**
     * @return bool
     */
    public function getDefaultAllowEdit()
    {
        return $this->getProperty('defaultAllowEdit');
    }

    /**
     * @param bool $defaultAllowEdit
     */
    public function setDefaultAllowEdit(bool $defaultAllowEdit = null)
    {
        $this->setProperty('defaultAllowEdit', $defaultAllowEdit);
    }

    /**
     * @return bool
     */
    public function getDefaultAllowDelete()
    {
        return $this->getProperty('defaultAllowDelete');
    }

    /**
     * @param bool $defaultAllowDelete
     */
    public function setDefaultAllowDelete(bool $defaultAllowDelete = null)
    {
        $this->setProperty('defaultAllowDelete', $defaultAllowDelete);
    }
}
