<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Room;

class RoomChangeRequirement extends ModelBase
{
    const EVENT = 'event';

    const UNAVAILABLE_ROOM = 'unavailableRoom';

    const REASON = 'reason';

    const ROOM_CHANGED_DATETIME = 'roomChangedDatetime';

    protected $_resourceType = ResourceType::ROOM_CHANGE_REQUIREMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return RoomChangeRequirement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("RoomChangeRequirement");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return RoomChangeRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ROOM_CHANGE_REQUIREMENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty("event");
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(ModelBase $event = null)
    {
        $this->setProperty("event", $event);
    }

    /**
     * @return Room
     */
    public function getUnavailableRoom()
    {
        return $this->getProperty("unavailableRoom");
    }

    /**
     * @param Room $unavailableRoom
     */
    public function setUnavailableRoom(Room $unavailableRoom = null)
    {
        $this->setProperty("unavailableRoom", $unavailableRoom);
    }

    /**
     * @return ModelBase
     */
    public function getReason()
    {
        return $this->getProperty("reason");
    }

    /**
     * @param ModelBase $reason
     */
    public function setReason(ModelBase $reason = null)
    {
        $this->setProperty("reason", $reason);
    }

    /**
     * @return \DateTime
     */
    public function getRoomChangedDatetime()
    {
        return $this->getProperty("roomChangedDatetime");
    }

    /**
     * @param \DateTime $roomChangedDatetime
     */
    public function setRoomChangedDatetime(\DateTime $roomChangedDatetime = null)
    {
        $this->setProperty("roomChangedDatetime", $roomChangedDatetime);
    }
}
