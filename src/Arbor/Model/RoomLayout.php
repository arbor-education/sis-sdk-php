<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RoomLayout extends ModelBase
{
    const ROOM = 'room';

    const STAFF = 'staff';

    const NAME = 'name';

    const MAIN_ENTRANCE_LOCATION = 'mainEntranceLocation';

    protected $_resourceType = ResourceType::ROOM_LAYOUT;

    /**
     * @param Query $query
     * @return RoomLayout[] | Collection
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

        $query->setResourceType(ResourceType::ROOM_LAYOUT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RoomLayout
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM_LAYOUT, $id);
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
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getMainEntranceLocation()
    {
        return $this->getProperty('mainEntranceLocation');
    }

    /**
     * @param string $mainEntranceLocation
     */
    public function setMainEntranceLocation($mainEntranceLocation = null)
    {
        $this->setProperty('mainEntranceLocation', $mainEntranceLocation);
    }
}
