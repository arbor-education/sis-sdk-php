<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RoomRoomFeature extends ModelBase
{

    const ROOM = 'room';

    const ROOM_FEATURE = 'roomFeature';

    protected $_resourceType = ResourceType::ROOM_ROOM_FEATURE;

    /**
     * @param Query $query
     * @return RoomRoomFeature[] | Collection
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

        $query->setResourceType(ResourceType::ROOM_ROOM_FEATURE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RoomRoomFeature
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM_ROOM_FEATURE, $id);
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
     * @return RoomFeature
     */
    public function getRoomFeature()
    {
        return $this->getProperty('roomFeature');
    }

    /**
     * @param RoomFeature $roomFeature
     */
    public function setRoomFeature(RoomFeature $roomFeature = null)
    {
        $this->setProperty('roomFeature', $roomFeature);
    }


}
