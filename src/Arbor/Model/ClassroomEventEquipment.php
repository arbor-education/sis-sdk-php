<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClassroomEventEquipment extends ModelBase
{

    const CLASSROOM_SEATING_PLAN_EVENT = 'classroomSeatingPlanEvent';

    const CLASSROOM_LAYOUT_EQUIPMENT = 'classroomLayoutEquipment';

    const X = 'x';

    const Y = 'y';

    protected $_resourceType = ResourceType::CLASSROOM_EVENT_EQUIPMENT;

    /**
     * @param Query $query
     * @return ClassroomEventEquipment[] | Collection
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

        $query->setResourceType(ResourceType::CLASSROOM_EVENT_EQUIPMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClassroomEventEquipment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLASSROOM_EVENT_EQUIPMENT, $id);
    }

    /**
     * @return ClassroomSeatingPlanEvent
     */
    public function getClassroomSeatingPlanEvent()
    {
        return $this->getProperty('classroomSeatingPlanEvent');
    }

    /**
     * @param ClassroomSeatingPlanEvent $classroomSeatingPlanEvent
     */
    public function setClassroomSeatingPlanEvent(ClassroomSeatingPlanEvent $classroomSeatingPlanEvent = null)
    {
        $this->setProperty('classroomSeatingPlanEvent', $classroomSeatingPlanEvent);
    }

    /**
     * @return ClassroomLayoutEquipment
     */
    public function getClassroomLayoutEquipment()
    {
        return $this->getProperty('classroomLayoutEquipment');
    }

    /**
     * @param ClassroomLayoutEquipment $classroomLayoutEquipment
     */
    public function setClassroomLayoutEquipment(ClassroomLayoutEquipment $classroomLayoutEquipment = null)
    {
        $this->setProperty('classroomLayoutEquipment', $classroomLayoutEquipment);
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
