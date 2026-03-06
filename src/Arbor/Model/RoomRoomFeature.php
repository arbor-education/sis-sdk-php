<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class RoomRoomFeature extends ModelBase
{
    public const ROOM = 'room';

    public const ROOM_FEATURE = 'roomFeature';

    protected $_resourceType = ResourceType::ROOM_ROOM_FEATURE;

    /**
     * @param Query $query
     * @return RoomRoomFeature[] | Collection
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
     * @return \Arbor\Model\RoomFeature
     */
    public function getRoomFeature()
    {
        return $this->getProperty('roomFeature');
    }

    /**
     * @param \Arbor\Model\RoomFeature $roomFeature
     */
    public function setRoomFeature(\Arbor\Model\RoomFeature $roomFeature = null)
    {
        $this->setProperty('roomFeature', $roomFeature);
    }
}
