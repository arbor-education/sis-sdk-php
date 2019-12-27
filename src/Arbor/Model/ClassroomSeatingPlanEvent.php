<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClassroomSeatingPlanEvent extends ModelBase
{

    const EVENT = 'event';

    const CLASSROOM_SEATING_PLAN = 'classroomSeatingPlan';

    protected $_resourceType = ResourceType::CLASSROOM_SEATING_PLAN_EVENT;

    /**
     * @param Query $query
     * @return ClassroomSeatingPlanEvent[] | Collection
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

        $query->setResourceType(ResourceType::CLASSROOM_SEATING_PLAN_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClassroomSeatingPlanEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLASSROOM_SEATING_PLAN_EVENT, $id);
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
     * @return ClassroomSeatingPlan
     */
    public function getClassroomSeatingPlan()
    {
        return $this->getProperty('classroomSeatingPlan');
    }

    /**
     * @param ClassroomSeatingPlan $classroomSeatingPlan
     */
    public function setClassroomSeatingPlan(ClassroomSeatingPlan $classroomSeatingPlan = null)
    {
        $this->setProperty('classroomSeatingPlan', $classroomSeatingPlan);
    }


}
