<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealSitting extends ModelBase
{
    public const MEAL = 'meal';

    public const MEAL_SITTING_NAME = 'mealSittingName';

    public const ROOM = 'room';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEAL_SITTING;

    /**
     * @param Query $query
     * @return MealSitting[] | Collection
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
     * @return string
     */
    public function getMealSittingName()
    {
        return $this->getProperty('mealSittingName');
    }

    /**
     * @param string $mealSittingName
     */
    public function setMealSittingName(string $mealSittingName = null)
    {
        $this->setProperty('mealSittingName', $mealSittingName);
    }

    /**
     * @return \Arbor\Model\Room
     */
    public function getRoom()
    {
        return $this->getProperty('room');
    }

    /**
     * @param \Arbor\Model\Room $room
     */
    public function setRoom(\Arbor\Model\Room $room = null)
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
