<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class RoomChangeRequirement extends ModelBase
{
    public const EVENT = 'event';

    public const UNAVAILABLE_ROOM = 'unavailableRoom';

    public const NEW_ROOM = 'newRoom';

    public const UNAVAILABILITY_EVENT = 'unavailabilityEvent';

    public const ROOM_CHANGED_DATETIME = 'roomChangedDatetime';

    public const IGNORED_DATETIME = 'ignoredDatetime';

    protected $_resourceType = ResourceType::ROOM_CHANGE_REQUIREMENT;

    /**
     * @param Query $query
     * @return RoomChangeRequirement[] | Collection
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
    public function setEvent(\ModelBase $event = null)
    {
        $this->setProperty('event', $event);
    }

    /**
     * @return \Arbor\Model\Room
     */
    public function getUnavailableRoom()
    {
        return $this->getProperty('unavailableRoom');
    }

    /**
     * @param \Arbor\Model\Room $unavailableRoom
     */
    public function setUnavailableRoom(\Arbor\Model\Room $unavailableRoom = null)
    {
        $this->setProperty('unavailableRoom', $unavailableRoom);
    }

    /**
     * @return \Arbor\Model\Room
     */
    public function getNewRoom()
    {
        return $this->getProperty('newRoom');
    }

    /**
     * @param \Arbor\Model\Room $newRoom
     */
    public function setNewRoom(\Arbor\Model\Room $newRoom = null)
    {
        $this->setProperty('newRoom', $newRoom);
    }

    /**
     * @return \Arbor\Model\RoomUnavailability
     */
    public function getUnavailabilityEvent()
    {
        return $this->getProperty('unavailabilityEvent');
    }

    /**
     * @param \Arbor\Model\RoomUnavailability $unavailabilityEvent
     */
    public function setUnavailabilityEvent(\Arbor\Model\RoomUnavailability $unavailabilityEvent = null)
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
