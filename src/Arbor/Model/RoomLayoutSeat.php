<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class RoomLayoutSeat extends ModelBase
{
    public const ROOM_LAYOUT = 'roomLayout';

    public const X = 'x';

    public const Y = 'y';

    protected $_resourceType = ResourceType::ROOM_LAYOUT_SEAT;

    /**
     * @param Query $query
     * @return RoomLayoutSeat[] | Collection
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

        $query->setResourceType(ResourceType::ROOM_LAYOUT_SEAT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RoomLayoutSeat
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM_LAYOUT_SEAT, $id);
    }

    /**
     * @return \Arbor\Model\RoomLayout
     */
    public function getRoomLayout()
    {
        return $this->getProperty('roomLayout');
    }

    /**
     * @param \Arbor\Model\RoomLayout $roomLayout
     */
    public function setRoomLayout(\Arbor\Model\RoomLayout $roomLayout = null)
    {
        $this->setProperty('roomLayout', $roomLayout);
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->getProperty('x');
    }

    /**
     * @param int $x
     */
    public function setX(int $x = null)
    {
        $this->setProperty('x', $x);
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->getProperty('y');
    }

    /**
     * @param int $y
     */
    public function setY(int $y = null)
    {
        $this->setProperty('y', $y);
    }
}
