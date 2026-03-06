<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealSchedule extends ModelBase
{
    public const NAME = 'name';

    public const WEEK = 'week';

    public const MEAL_ROTATION_MENU = 'mealRotationMenu';

    protected $_resourceType = ResourceType::MEAL_SCHEDULE;

    /**
     * @param Query $query
     * @return MealSchedule[] | Collection
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
    public function setName(string $name = null)
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
    public function setWeek(int $week = null)
    {
        $this->setProperty('week', $week);
    }

    /**
     * @return \Arbor\Model\MealRotationMenu
     */
    public function getMealRotationMenu()
    {
        return $this->getProperty('mealRotationMenu');
    }

    /**
     * @param \Arbor\Model\MealRotationMenu $mealRotationMenu
     */
    public function setMealRotationMenu(\Arbor\Model\MealRotationMenu $mealRotationMenu = null)
    {
        $this->setProperty('mealRotationMenu', $mealRotationMenu);
    }
}
