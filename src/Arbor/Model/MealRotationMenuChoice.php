<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealRotationMenuChoice extends ModelBase
{
    public const ATTENDEE = 'attendee';

    public const MEAL_PROVISION = 'mealProvision';

    public const MEAL_CHOICE_DATE = 'mealChoiceDate';

    protected $_resourceType = ResourceType::MEAL_ROTATION_MENU_CHOICE;

    /**
     * @param Query $query
     * @return MealRotationMenuChoice[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_ROTATION_MENU_CHOICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealRotationMenuChoice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_ROTATION_MENU_CHOICE, $id);
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
     * @return \DateTime
     */
    public function getMealChoiceDate()
    {
        return $this->getProperty('mealChoiceDate');
    }

    /**
     * @param \DateTime $mealChoiceDate
     */
    public function setMealChoiceDate(\DateTime $mealChoiceDate = null)
    {
        $this->setProperty('mealChoiceDate', $mealChoiceDate);
    }
}
