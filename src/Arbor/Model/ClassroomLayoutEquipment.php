<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClassroomLayoutEquipment extends ModelBase
{

    const CLASSROOM_EQUIPMENT = 'classroomEquipment';

    const ROOM_LAYOUT = 'roomLayout';

    const X = 'x';

    const Y = 'y';

    protected $_resourceType = ResourceType::CLASSROOM_LAYOUT_EQUIPMENT;

    /**
     * @param Query $query
     * @return ClassroomLayoutEquipment[] | Collection
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

        $query->setResourceType(ResourceType::CLASSROOM_LAYOUT_EQUIPMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClassroomLayoutEquipment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLASSROOM_LAYOUT_EQUIPMENT, $id);
    }

    /**
     * @return ClassroomEquipment
     */
    public function getClassroomEquipment()
    {
        return $this->getProperty('classroomEquipment');
    }

    /**
     * @param ClassroomEquipment $classroomEquipment
     */
    public function setClassroomEquipment(ClassroomEquipment $classroomEquipment = null)
    {
        $this->setProperty('classroomEquipment', $classroomEquipment);
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


}
