<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\MealSitting;

class MealSittingAutomaticAttendeeTarget extends ModelBase
{

    const MEAL_SITTING = 'mealSitting';

    const AUTOMATIC_ATTENDEE_TARGET = 'automaticAttendeeTarget';

    protected $_resourceType = ResourceType::MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return MealSittingAutomaticAttendeeTarget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("MealSittingAutomaticAttendeeTarget");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MealSittingAutomaticAttendeeTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET, $id);
    }

    /**
     * @return MealSitting
     */
    public function getMealSitting()
    {
        return $this->getProperty("mealSitting");
    }

    /**
     * @param MealSitting $mealSitting
     */
    public function setMealSitting(MealSitting $mealSitting = null)
    {
        $this->setProperty("mealSitting", $mealSitting);
    }

    /**
     * @return ModelBase
     */
    public function getAutomaticAttendeeTarget()
    {
        return $this->getProperty("automaticAttendeeTarget");
    }

    /**
     * @param ModelBase $automaticAttendeeTarget
     */
    public function setAutomaticAttendeeTarget(ModelBase $automaticAttendeeTarget = null)
    {
        $this->setProperty("automaticAttendeeTarget", $automaticAttendeeTarget);
    }


}
