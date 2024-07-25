<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PinnedItem extends ModelBase
{
    public const PINNED = 'pinned';

    public const TARGET = 'target';

    public const PINNED_UNTIL_DATETIME = 'pinnedUntilDatetime';

    protected $_resourceType = ResourceType::PINNED_ITEM;

    /**
     * @param Query $query
     * @return PinnedItem[] | Collection
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

        $query->setResourceType(ResourceType::PINNED_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PinnedItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PINNED_ITEM, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPinned()
    {
        return $this->getProperty('pinned');
    }

    /**
     * @param ModelBase $pinned
     */
    public function setPinned(\ModelBase $pinned = null)
    {
        $this->setProperty('pinned', $pinned);
    }

    /**
     * @return ModelBase
     */
    public function getTarget()
    {
        return $this->getProperty('target');
    }

    /**
     * @param ModelBase $target
     */
    public function setTarget(\ModelBase $target = null)
    {
        $this->setProperty('target', $target);
    }

    /**
     * @return \DateTime
     */
    public function getPinnedUntilDatetime()
    {
        return $this->getProperty('pinnedUntilDatetime');
    }

    /**
     * @param \DateTime $pinnedUntilDatetime
     */
    public function setPinnedUntilDatetime(\DateTime $pinnedUntilDatetime = null)
    {
        $this->setProperty('pinnedUntilDatetime', $pinnedUntilDatetime);
    }
}
