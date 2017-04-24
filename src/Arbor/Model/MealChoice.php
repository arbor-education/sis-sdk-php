<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Meal;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\MealProvision;

class MealChoice extends ModelBase
{
    const ATTENDEE = 'attendee';

    const MEAL = 'meal';

    const ACADEMIC_YEAR = 'academicYear';

    const MEAL_PROVISION = 'mealProvision';

    const APPLIES_MONDAY = 'appliesMonday';

    const APPLIES_TUESDAY = 'appliesTuesday';

    const APPLIES_WEDNESDAY = 'appliesWednesday';

    const APPLIES_THURSDAY = 'appliesThursday';

    const APPLIES_FRIDAY = 'appliesFriday';

    const APPLIES_SATURDAY = 'appliesSaturday';

    const APPLIES_SUNDAY = 'appliesSunday';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEAL_CHOICE;

    /**
     * @param \Arbor\Query\Query $query
     * @return MealChoice[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("MealChoice");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MealChoice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MEAL_CHOICE, $id);
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
     * @return MealProvision
     */
    public function getMealProvision()
    {
        return $this->getProperty("mealProvision");
    }

    /**
     * @param MealProvision $mealProvision
     */
    public function setMealProvision(MealProvision $mealProvision = null)
    {
        $this->setProperty("mealProvision", $mealProvision);
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
}
