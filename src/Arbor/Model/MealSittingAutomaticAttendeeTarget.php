<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MealSittingAutomaticAttendeeTarget extends ModelBase
{

    const MEAL_SITTING = 'mealSitting';

    const AUTOMATIC_ATTENDEE_TARGET = 'automaticAttendeeTarget';

    protected $_resourceType = ResourceType::MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET;

    /**
     * @param Query $query
     * @return MealSittingAutomaticAttendeeTarget[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealSittingAutomaticAttendeeTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET, $id);
    }

    /**
     * @return MealSitting
     */
    public function getMealSitting()
    {
        return $this->getProperty('mealSitting');
    }

    /**
     * @param MealSitting $mealSitting
     */
    public function setMealSitting(MealSitting $mealSitting = null)
    {
        $this->setProperty('mealSitting', $mealSitting);
    }

    /**
     * @return ModelBase
     */
    public function getAutomaticAttendeeTarget()
    {
        return $this->getProperty('automaticAttendeeTarget');
    }

    /**
     * @param ModelBase $automaticAttendeeTarget
     */
    public function setAutomaticAttendeeTarget(ModelBase $automaticAttendeeTarget = null)
    {
        $this->setProperty('automaticAttendeeTarget', $automaticAttendeeTarget);
    }


}
