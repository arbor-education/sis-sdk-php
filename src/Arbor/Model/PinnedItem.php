<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class PinnedItem extends ModelBase
{
    const PINNED = 'pinned';

    const TARGET = 'target';

    protected $_resourceType = ResourceType::PINNED_ITEM;

    /**
     * @param \Arbor\Query\Query $query
     * @return PinnedItem[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PinnedItem");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PinnedItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PINNED_ITEM, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPinned()
    {
        return $this->getProperty("pinned");
    }

    /**
     * @param ModelBase $pinned
     */
    public function setPinned(ModelBase $pinned = null)
    {
        $this->setProperty("pinned", $pinned);
    }

    /**
     * @return ModelBase
     */
    public function getTarget()
    {
        return $this->getProperty("target");
    }

    /**
     * @param ModelBase $target
     */
    public function setTarget(ModelBase $target = null)
    {
        $this->setProperty("target", $target);
    }
}
