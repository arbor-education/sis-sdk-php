<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RoomLayoutSeat extends ModelBase
{
    const ROOM_LAYOUT = 'roomLayout';

    const X = 'x';

    const Y = 'y';

    const SEQUENCE_NUMBER = 'sequenceNumber';

    protected $_resourceType = ResourceType::ROOM_LAYOUT_SEAT;

    /**
     * @param Query $query
     * @return RoomLayoutSeat[] | Collection
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
     * @return RoomLayout
     */
    public function getRoomLayout()
    {
        return $this->getProperty('roomLayout');
    }

    /**
     * @param RoomLayout $roomLayout
     */
    public function setRoomLayout(RoomLayout $roomLayout = null)
    {
        $this->setProperty('roomLayout', $roomLayout);
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->getProperty('x');
    }

    /**
     * @param float $x
     */
    public function setX($x = null)
    {
        $this->setProperty('x', $x);
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->getProperty('y');
    }

    /**
     * @param float $y
     */
    public function setY($y = null)
    {
        $this->setProperty('y', $y);
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->getProperty('sequenceNumber');
    }

    /**
     * @param int $sequenceNumber
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        $this->setProperty('sequenceNumber', $sequenceNumber);
    }
}
