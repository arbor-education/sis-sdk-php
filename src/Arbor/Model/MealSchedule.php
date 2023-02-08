<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MealSchedule extends ModelBase
{
    const NAME = 'name';

    const WEEK = 'week';

    const MEAL_ROTATION_MENU = 'mealRotationMenu';

    protected $_resourceType = ResourceType::MEAL_SCHEDULE;

    /**
     * @param Query $query
     * @return MealSchedule[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_SCHEDULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealSchedule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_SCHEDULE, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return int
     */
    public function getWeek()
    {
        return $this->getProperty('week');
    }

    /**
     * @param int $week
     */
    public function setWeek($week = null)
    {
        $this->setProperty('week', $week);
    }

    /**
     * @return MealRotationMenu
     */
    public function getMealRotationMenu()
    {
        return $this->getProperty('mealRotationMenu');
    }

    /**
     * @param MealRotationMenu $mealRotationMenu
     */
    public function setMealRotationMenu(MealRotationMenu $mealRotationMenu = null)
    {
        $this->setProperty('mealRotationMenu', $mealRotationMenu);
    }
}
