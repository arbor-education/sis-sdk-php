<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Room;
use \Arbor\Model\RoomAsset;

class RoomRoomAsset extends ModelBase
{
    const ROOM = 'room';

    const ROOM_ASSET = 'roomAsset';

    const QUANTITY = 'quantity';

    protected $_resourceType = ResourceType::ROOM_ROOM_ASSET;

    /**
     * @param \Arbor\Query\Query $query
     * @return RoomRoomAsset[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("RoomRoomAsset");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return RoomRoomAsset
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ROOM_ROOM_ASSET, $id);
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->getProperty("room");
    }

    /**
     * @param Room $room
     */
    public function setRoom(Room $room = null)
    {
        $this->setProperty("room", $room);
    }

    /**
     * @return RoomAsset
     */
    public function getRoomAsset()
    {
        return $this->getProperty("roomAsset");
    }

    /**
     * @param RoomAsset $roomAsset
     */
    public function setRoomAsset(RoomAsset $roomAsset = null)
    {
        $this->setProperty("roomAsset", $roomAsset);
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->getProperty("quantity");
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity = null)
    {
        $this->setProperty("quantity", $quantity);
    }
}
