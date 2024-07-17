<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealPattern extends ModelBase
{
    public const ATTENDEE = 'attendee';

    public const MEAL = 'meal';

    public const MEAL_SITTING = 'mealSitting';

    public const APPLIES_MONDAY = 'appliesMonday';

    public const APPLIES_TUESDAY = 'appliesTuesday';

    public const APPLIES_WEDNESDAY = 'appliesWednesday';

    public const APPLIES_THURSDAY = 'appliesThursday';

    public const APPLIES_FRIDAY = 'appliesFriday';

    public const APPLIES_SATURDAY = 'appliesSaturday';

    public const APPLIES_SUNDAY = 'appliesSunday';

    public const DAY_OF_CYCLE = 'dayOfCycle';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET = 'mealSittingAutomaticAttendeeTarget';

    public const GROUP_MEMBERSHIP = 'groupMembership';

    protected $_resourceType = ResourceType::MEAL_PATTERN;

    /**
     * @param Query $query
     * @return MealPattern[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_PATTERN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealPattern
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_PATTERN, $id);
    }

    /**
     * @return ModelBase
     */
    public function getAttendee()
    {
        return $this->getProperty('attendee');
    }

    /**
     * @param ModelBase $attendee
     */
    public function setAttendee(\ModelBase $attendee = null)
    {
        $this->setProperty('attendee', $attendee);
    }

    /**
     * @return \Arbor\Model\Meal
     */
    public function getMeal()
    {
        return $this->getProperty('meal');
    }

    /**
     * @param \Arbor\Model\Meal $meal
     */
    public function setMeal(\Arbor\Model\Meal $meal = null)
    {
        $this->setProperty('meal', $meal);
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
     * @return bool
     */
    public function getAppliesMonday()
    {
        return $this->getProperty('appliesMonday');
    }

    /**
     * @param bool $appliesMonday
     */
    public function setAppliesMonday(bool $appliesMonday = null)
    {
        $this->setProperty('appliesMonday', $appliesMonday);
    }

    /**
     * @return bool
     */
    public function getAppliesTuesday()
    {
        return $this->getProperty('appliesTuesday');
    }

    /**
     * @param bool $appliesTuesday
     */
    public function setAppliesTuesday(bool $appliesTuesday = null)
    {
        $this->setProperty('appliesTuesday', $appliesTuesday);
    }

    /**
     * @return bool
     */
    public function getAppliesWednesday()
    {
        return $this->getProperty('appliesWednesday');
    }

    /**
     * @param bool $appliesWednesday
     */
    public function setAppliesWednesday(bool $appliesWednesday = null)
    {
        $this->setProperty('appliesWednesday', $appliesWednesday);
    }

    /**
     * @return bool
     */
    public function getAppliesThursday()
    {
        return $this->getProperty('appliesThursday');
    }

    /**
     * @param bool $appliesThursday
     */
    public function setAppliesThursday(bool $appliesThursday = null)
    {
        $this->setProperty('appliesThursday', $appliesThursday);
    }

    /**
     * @return bool
     */
    public function getAppliesFriday()
    {
        return $this->getProperty('appliesFriday');
    }

    /**
     * @param bool $appliesFriday
     */
    public function setAppliesFriday(bool $appliesFriday = null)
    {
        $this->setProperty('appliesFriday', $appliesFriday);
    }

    /**
     * @return bool
     */
    public function getAppliesSaturday()
    {
        return $this->getProperty('appliesSaturday');
    }

    /**
     * @param bool $appliesSaturday
     */
    public function setAppliesSaturday(bool $appliesSaturday = null)
    {
        $this->setProperty('appliesSaturday', $appliesSaturday);
    }

    /**
     * @return bool
     */
    public function getAppliesSunday()
    {
        return $this->getProperty('appliesSunday');
    }

    /**
     * @param bool $appliesSunday
     */
    public function setAppliesSunday(bool $appliesSunday = null)
    {
        $this->setProperty('appliesSunday', $appliesSunday);
    }

    /**
     * @return int
     */
    public function getDayOfCycle()
    {
        return $this->getProperty('dayOfCycle');
    }

    /**
     * @param int $dayOfCycle
     */
    public function setDayOfCycle(int $dayOfCycle = null)
    {
        $this->setProperty('dayOfCycle', $dayOfCycle);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return \Arbor\Model\MealSittingAutomaticAttendeeTarget
     */
    public function getMealSittingAutomaticAttendeeTarget()
    {
        return $this->getProperty('mealSittingAutomaticAttendeeTarget');
    }

    /**
     * @param \Arbor\Model\MealSittingAutomaticAttendeeTarget
     * $mealSittingAutomaticAttendeeTarget
     */
    public function setMealSittingAutomaticAttendeeTarget(\Arbor\Model\MealSittingAutomaticAttendeeTarget $mealSittingAutomaticAttendeeTarget = null)
    {
        $this->setProperty('mealSittingAutomaticAttendeeTarget', $mealSittingAutomaticAttendeeTarget);
    }

    /**
     * @return ModelBase
     */
    public function getGroupMembership()
    {
        return $this->getProperty('groupMembership');
    }

    /**
     * @param ModelBase $groupMembership
     */
    public function setGroupMembership(\ModelBase $groupMembership = null)
    {
        $this->setProperty('groupMembership', $groupMembership);
    }
}
