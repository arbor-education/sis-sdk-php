<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class RoomUnavailability extends ModelBase
{
    public const ROOM = 'room';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const REASON = 'reason';

    protected $_resourceType = ResourceType::ROOM_UNAVAILABILITY;

    /**
     * @param Query $query
     * @return RoomUnavailability[] | Collection
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

        $query->setResourceType(ResourceType::ROOM_UNAVAILABILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RoomUnavailability
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM_UNAVAILABILITY, $id);
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
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty('reason');
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason = null)
    {
        $this->setProperty('reason', $reason);
    }
}
