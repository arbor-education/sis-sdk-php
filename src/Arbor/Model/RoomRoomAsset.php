<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RoomRoomAsset extends ModelBase
{
    const ROOM = 'room';

    const ROOM_ASSET = 'roomAsset';

    const QUANTITY = 'quantity';

    protected $_resourceType = ResourceType::ROOM_ROOM_ASSET;

    /**
     * @param Query $query
     * @return RoomRoomAsset[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ROOM_ROOM_ASSET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RoomRoomAsset
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM_ROOM_ASSET, $id);
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->getProperty('room');
    }

    /**
     * @param Room $room
     */
    public function setRoom(Room $room = null)
    {
        $this->setProperty('room', $room);
    }

    /**
     * @return RoomAsset
     */
    public function getRoomAsset()
    {
        return $this->getProperty('roomAsset');
    }

    /**
     * @param RoomAsset $roomAsset
     */
    public function setRoomAsset(RoomAsset $roomAsset = null)
    {
        $this->setProperty('roomAsset', $roomAsset);
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->getProperty('quantity');
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity = null)
    {
        $this->setProperty('quantity', $quantity);
    }
}
