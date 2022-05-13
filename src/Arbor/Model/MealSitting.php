<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MealSitting extends ModelBase
{
    const MEAL = 'meal';

    const MEAL_SITTING_NAME = 'mealSittingName';

    const ROOM = 'room';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEAL_SITTING;

    /**
     * @param Query $query
     * @return MealSitting[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_SITTING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealSitting
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_SITTING, $id);
    }

    /**
     * @return Meal
     */
    public function getMeal()
    {
        return $this->getProperty('meal');
    }

    /**
     * @param Meal $meal
     */
    public function setMeal(Meal $meal = null)
    {
        $this->setProperty('meal', $meal);
    }

    /**
     * @return string
     */
    public function getMealSittingName()
    {
        return $this->getProperty('mealSittingName');
    }

    /**
     * @param string $mealSittingName
     */
    public function setMealSittingName($mealSittingName = null)
    {
        $this->setProperty('mealSittingName', $mealSittingName);
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->getProperty('room');
    }

    /**
     * @param Room $room
     */
    public function setRoom(Room $room = null)
    {
        $this->setProperty('room', $room);
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
