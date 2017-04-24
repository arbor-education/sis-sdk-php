<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\Meal;
use \Arbor\Model\MealSitting;
use \Arbor\Model\MealSittingAutomaticAttendeeTarget;

class MealPattern extends ModelBase
{
    const ATTENDEE = 'attendee';

    const ACADEMIC_YEAR = 'academicYear';

    const MEAL = 'meal';

    const MEAL_SITTING = 'mealSitting';

    const APPLIES_MONDAY = 'appliesMonday';

    const APPLIES_TUESDAY = 'appliesTuesday';

    const APPLIES_WEDNESDAY = 'appliesWednesday';

    const APPLIES_THURSDAY = 'appliesThursday';

    const APPLIES_FRIDAY = 'appliesFriday';

    const APPLIES_SATURDAY = 'appliesSaturday';

    const APPLIES_SUNDAY = 'appliesSunday';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET = 'mealSittingAutomaticAttendeeTarget';

    const GROUP_MEMBERSHIP = 'groupMembership';

    protected $_resourceType = ResourceType::MEAL_PATTERN;

    /**
     * @param \Arbor\Query\Query $query
     * @return MealPattern[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("MealPattern");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MealPattern
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MEAL_PATTERN, $id);
    }

    /**
     * @return ModelBase
     */
    public function getAttendee()
    {
        return $this->getProperty("attendee");
    }

    /**
     * @param ModelBase $attendee
     */
    public function setAttendee(ModelBase $attendee = null)
    {
        $this->setProperty("attendee", $attendee);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
    }

    /**
     * @return Meal
     */
    public function getMeal()
    {
        return $this->getProperty("meal");
    }

    /**
     * @param Meal $meal
     */
    public function setMeal(Meal $meal = null)
    {
        $this->setProperty("meal", $meal);
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
     * @return bool
     */
    public function getAppliesMonday()
    {
        return $this->getProperty("appliesMonday");
    }

    /**
     * @param bool $appliesMonday
     */
    public function setAppliesMonday($appliesMonday = null)
    {
        $this->setProperty("appliesMonday", $appliesMonday);
    }

    /**
     * @return bool
     */
    public function getAppliesTuesday()
    {
        return $this->getProperty("appliesTuesday");
    }

    /**
     * @param bool $appliesTuesday
     */
    public function setAppliesTuesday($appliesTuesday = null)
    {
        $this->setProperty("appliesTuesday", $appliesTuesday);
    }

    /**
     * @return bool
     */
    public function getAppliesWednesday()
    {
        return $this->getProperty("appliesWednesday");
    }

    /**
     * @param bool $appliesWednesday
     */
    public function setAppliesWednesday($appliesWednesday = null)
    {
        $this->setProperty("appliesWednesday", $appliesWednesday);
    }

    /**
     * @return bool
     */
    public function getAppliesThursday()
    {
        return $this->getProperty("appliesThursday");
    }

    /**
     * @param bool $appliesThursday
     */
    public function setAppliesThursday($appliesThursday = null)
    {
        $this->setProperty("appliesThursday", $appliesThursday);
    }

    /**
     * @return bool
     */
    public function getAppliesFriday()
    {
        return $this->getProperty("appliesFriday");
    }

    /**
     * @param bool $appliesFriday
     */
    public function setAppliesFriday($appliesFriday = null)
    {
        $this->setProperty("appliesFriday", $appliesFriday);
    }

    /**
     * @return bool
     */
    public function getAppliesSaturday()
    {
        return $this->getProperty("appliesSaturday");
    }

    /**
     * @param bool $appliesSaturday
     */
    public function setAppliesSaturday($appliesSaturday = null)
    {
        $this->setProperty("appliesSaturday", $appliesSaturday);
    }

    /**
     * @return bool
     */
    public function getAppliesSunday()
    {
        return $this->getProperty("appliesSunday");
    }

    /**
     * @param bool $appliesSunday
     */
    public function setAppliesSunday($appliesSunday = null)
    {
        $this->setProperty("appliesSunday", $appliesSunday);
    }

    /**
     * @return int
     */
    public function getDayOfCycle()
    {
        return $this->getProperty("dayOfCycle");
    }

    /**
     * @param int $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle = null)
    {
        $this->setProperty("dayOfCycle", $dayOfCycle);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return MealSittingAutomaticAttendeeTarget
     */
    public function getMealSittingAutomaticAttendeeTarget()
    {
        return $this->getProperty("mealSittingAutomaticAttendeeTarget");
    }

    /**
     * @param MealSittingAutomaticAttendeeTarget $mealSittingAutomaticAttendeeTarget
     */
    public function setMealSittingAutomaticAttendeeTarget(MealSittingAutomaticAttendeeTarget $mealSittingAutomaticAttendeeTarget = null)
    {
        $this->setProperty("mealSittingAutomaticAttendeeTarget", $mealSittingAutomaticAttendeeTarget);
    }

    /**
     * @return ModelBase
     */
    public function getGroupMembership()
    {
        return $this->getProperty("groupMembership");
    }

    /**
     * @param ModelBase $groupMembership
     */
    public function setGroupMembership(ModelBase $groupMembership = null)
    {
        $this->setProperty("groupMembership", $groupMembership);
    }
}
