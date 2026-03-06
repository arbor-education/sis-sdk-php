<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealSittingAutomaticAttendeeTarget extends ModelBase
{
    public const MEAL_SITTING = 'mealSitting';

    public const AUTOMATIC_ATTENDEE_TARGET = 'automaticAttendeeTarget';

    protected $_resourceType = ResourceType::MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET;

    /**
     * @param Query $query
     * @return MealSittingAutomaticAttendeeTarget[] | Collection
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
     * @return \Arbor\Model\MealSitting
     */
    public function getMealSitting()
    {
        return $this->getProperty('mealSitting');
    }

    /**
     * @param \Arbor\Model\MealSitting $mealSitting
     */
    public function setMealSitting(\Arbor\Model\MealSitting $mealSitting = null)
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
    public function setAutomaticAttendeeTarget(\ModelBase $automaticAttendeeTarget = null)
    {
        $this->setProperty('automaticAttendeeTarget', $automaticAttendeeTarget);
    }
}
