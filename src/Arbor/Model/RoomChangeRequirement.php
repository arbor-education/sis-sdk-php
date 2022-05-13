<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RoomChangeRequirement extends ModelBase
{
    const EVENT = 'event';

    const UNAVAILABLE_ROOM = 'unavailableRoom';

    const NEW_ROOM = 'newRoom';

    const UNAVAILABILITY_EVENT = 'unavailabilityEvent';

    const ROOM_CHANGED_DATETIME = 'roomChangedDatetime';

    const IGNORED_DATETIME = 'ignoredDatetime';

    protected $_resourceType = ResourceType::ROOM_CHANGE_REQUIREMENT;

    /**
     * @param Query $query
     * @return RoomChangeRequirement[] | Collection
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

        $query->setResourceType(ResourceType::ROOM_CHANGE_REQUIREMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RoomChangeRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM_CHANGE_REQUIREMENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(ModelBase $event = null)
    {
        $this->setProperty('event', $event);
    }

    /**
     * @return Room
     */
    public function getUnavailableRoom()
    {
        return $this->getProperty('unavailableRoom');
    }

    /**
     * @param Room $unavailableRoom
     */
    public function setUnavailableRoom(Room $unavailableRoom = null)
    {
        $this->setProperty('unavailableRoom', $unavailableRoom);
    }

    /**
     * @return Room
     */
    public function getNewRoom()
    {
        return $this->getProperty('newRoom');
    }

    /**
     * @param Room $newRoom
     */
    public function setNewRoom(Room $newRoom = null)
    {
        $this->setProperty('newRoom', $newRoom);
    }

    /**
     * @return RoomUnavailability
     */
    public function getUnavailabilityEvent()
    {
        return $this->getProperty('unavailabilityEvent');
    }

    /**
     * @param RoomUnavailability $unavailabilityEvent
     */
    public function setUnavailabilityEvent(RoomUnavailability $unavailabilityEvent = null)
    {
        $this->setProperty('unavailabilityEvent', $unavailabilityEvent);
    }

    /**
     * @return \DateTime
     */
    public function getRoomChangedDatetime()
    {
        return $this->getProperty('roomChangedDatetime');
    }

    /**
     * @param \DateTime $roomChangedDatetime
     */
    public function setRoomChangedDatetime(\DateTime $roomChangedDatetime = null)
    {
        $this->setProperty('roomChangedDatetime', $roomChangedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getIgnoredDatetime()
    {
        return $this->getProperty('ignoredDatetime');
    }

    /**
     * @param \DateTime $ignoredDatetime
     */
    public function setIgnoredDatetime(\DateTime $ignoredDatetime = null)
    {
        $this->setProperty('ignoredDatetime', $ignoredDatetime);
    }
}
