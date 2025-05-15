<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealChoice extends ModelBase
{
    public const ATTENDEE = 'attendee';

    public const MEAL = 'meal';

    public const MEAL_PROVISION = 'mealProvision';

    public const APPLIES_MONDAY = 'appliesMonday';

    public const APPLIES_TUESDAY = 'appliesTuesday';

    public const APPLIES_WEDNESDAY = 'appliesWednesday';

    public const APPLIES_THURSDAY = 'appliesThursday';

    public const APPLIES_FRIDAY = 'appliesFriday';

    public const APPLIES_SATURDAY = 'appliesSaturday';

    public const APPLIES_SUNDAY = 'appliesSunday';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEAL_CHOICE;

    /**
     * @param Query $query
     * @return MealChoice[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_CHOICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealChoice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_CHOICE, $id);
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
     * @return \Arbor\Model\MealProvision
     */
    public function getMealProvision()
    {
        return $this->getProperty('mealProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $mealProvision
     */
    public function setMealProvision(\Arbor\Model\MealProvision $mealProvision = null)
    {
        $this->setProperty('mealProvision', $mealProvision);
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
}
