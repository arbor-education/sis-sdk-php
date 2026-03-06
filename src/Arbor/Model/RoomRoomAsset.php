<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class RoomRoomAsset extends ModelBase
{
    public const ROOM = 'room';

    public const ROOM_ASSET = 'roomAsset';

    public const QUANTITY = 'quantity';

    protected $_resourceType = ResourceType::ROOM_ROOM_ASSET;

    /**
     * @param Query $query
     * @return RoomRoomAsset[] | Collection
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
     * @return \Arbor\Model\Room
     */
    public function getRoom()
    {
        return $this->getProperty('room');
    }

    /**
     * @param \Arbor\Model\Room $room
     */
    public function setRoom(\Arbor\Model\Room $room = null)
    {
        $this->setProperty('room', $room);
    }

    /**
     * @return \Arbor\Model\RoomAsset
     */
    public function getRoomAsset()
    {
        return $this->getProperty('roomAsset');
    }

    /**
     * @param \Arbor\Model\RoomAsset $roomAsset
     */
    public function setRoomAsset(\Arbor\Model\RoomAsset $roomAsset = null)
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
    public function setQuantity(int $quantity = null)
    {
        $this->setProperty('quantity', $quantity);
    }
}
