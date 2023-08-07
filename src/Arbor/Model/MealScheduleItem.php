<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MealScheduleItem extends \ModelBase
{
    public const MEAL_SCHEDULE = 'mealSchedule';

    public const MON_PROVISION = 'monProvision';

    public const MON_LABEL = 'monLabel';

    public const TUE_PROVISION = 'tueProvision';

    public const TUE_LABEL = 'tueLabel';

    public const WED_PROVISION = 'wedProvision';

    public const WED_LABEL = 'wedLabel';

    public const THU_PROVISION = 'thuProvision';

    public const THU_LABEL = 'thuLabel';

    public const FRI_PROVISION = 'friProvision';

    public const FRI_LABEL = 'friLabel';

    public const SAT_PROVISION = 'satProvision';

    public const SAT_LABEL = 'satLabel';

    public const SUN_PROVISION = 'sunProvision';

    public const SUN_LABEL = 'sunLabel';

    protected $_resourceType = ResourceType::MEAL_SCHEDULE_ITEM;

    /**
     * @param Query $query
     * @return MealScheduleItem[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::MEAL_SCHEDULE_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealScheduleItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_SCHEDULE_ITEM, $id);
    }

    /**
     * @return MealSchedule
     */
    public function getMealSchedule()
    {
        return $this->getProperty('mealSchedule');
    }

    /**
     * @param MealSchedule $mealSchedule
     */
    public function setMealSchedule(\MealSchedule $mealSchedule = null)
    {
        $this->setProperty('mealSchedule', $mealSchedule);
    }

    /**
     * @return MealProvision
     */
    public function getMonProvision()
    {
        return $this->getProperty('monProvision');
    }

    /**
     * @param MealProvision $monProvision
     */
    public function setMonProvision(\MealProvision $monProvision = null)
    {
        $this->setProperty('monProvision', $monProvision);
    }

    /**
     * @return string
     */
    public function getMonLabel()
    {
        return $this->getProperty('monLabel');
    }

    /**
     * @param string $monLabel
     */
    public function setMonLabel(string $monLabel = null)
    {
        $this->setProperty('monLabel', $monLabel);
    }

    /**
     * @return MealProvision
     */
    public function getTueProvision()
    {
        return $this->getProperty('tueProvision');
    }

    /**
     * @param MealProvision $tueProvision
     */
    public function setTueProvision(\MealProvision $tueProvision = null)
    {
        $this->setProperty('tueProvision', $tueProvision);
    }

    /**
     * @return string
     */
    public function getTueLabel()
    {
        return $this->getProperty('tueLabel');
    }

    /**
     * @param string $tueLabel
     */
    public function setTueLabel(string $tueLabel = null)
    {
        $this->setProperty('tueLabel', $tueLabel);
    }

    /**
     * @return MealProvision
     */
    public function getWedProvision()
    {
        return $this->getProperty('wedProvision');
    }

    /**
     * @param MealProvision $wedProvision
     */
    public function setWedProvision(\MealProvision $wedProvision = null)
    {
        $this->setProperty('wedProvision', $wedProvision);
    }

    /**
     * @return string
     */
    public function getWedLabel()
    {
        return $this->getProperty('wedLabel');
    }

    /**
     * @param string $wedLabel
     */
    public function setWedLabel(string $wedLabel = null)
    {
        $this->setProperty('wedLabel', $wedLabel);
    }

    /**
     * @return MealProvision
     */
    public function getThuProvision()
    {
        return $this->getProperty('thuProvision');
    }

    /**
     * @param MealProvision $thuProvision
     */
    public function setThuProvision(\MealProvision $thuProvision = null)
    {
        $this->setProperty('thuProvision', $thuProvision);
    }

    /**
     * @return string
     */
    public function getThuLabel()
    {
        return $this->getProperty('thuLabel');
    }

    /**
     * @param string $thuLabel
     */
    public function setThuLabel(string $thuLabel = null)
    {
        $this->setProperty('thuLabel', $thuLabel);
    }

    /**
     * @return MealProvision
     */
    public function getFriProvision()
    {
        return $this->getProperty('friProvision');
    }

    /**
     * @param MealProvision $friProvision
     */
    public function setFriProvision(\MealProvision $friProvision = null)
    {
        $this->setProperty('friProvision', $friProvision);
    }

    /**
     * @return string
     */
    public function getFriLabel()
    {
        return $this->getProperty('friLabel');
    }

    /**
     * @param string $friLabel
     */
    public function setFriLabel(string $friLabel = null)
    {
        $this->setProperty('friLabel', $friLabel);
    }

    /**
     * @return MealProvision
     */
    public function getSatProvision()
    {
        return $this->getProperty('satProvision');
    }

    /**
     * @param MealProvision $satProvision
     */
    public function setSatProvision(\MealProvision $satProvision = null)
    {
        $this->setProperty('satProvision', $satProvision);
    }

    /**
     * @return string
     */
    public function getSatLabel()
    {
        return $this->getProperty('satLabel');
    }

    /**
     * @param string $satLabel
     */
    public function setSatLabel(string $satLabel = null)
    {
        $this->setProperty('satLabel', $satLabel);
    }

    /**
     * @return MealProvision
     */
    public function getSunProvision()
    {
        return $this->getProperty('sunProvision');
    }

    /**
     * @param MealProvision $sunProvision
     */
    public function setSunProvision(\MealProvision $sunProvision = null)
    {
        $this->setProperty('sunProvision', $sunProvision);
    }

    /**
     * @return string
     */
    public function getSunLabel()
    {
        return $this->getProperty('sunLabel');
    }

    /**
     * @param string $sunLabel
     */
    public function setSunLabel(string $sunLabel = null)
    {
        $this->setProperty('sunLabel', $sunLabel);
    }
}
