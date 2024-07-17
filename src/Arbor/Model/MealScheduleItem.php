<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealScheduleItem extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\MealSchedule
     */
    public function getMealSchedule()
    {
        return $this->getProperty('mealSchedule');
    }

    /**
     * @param \Arbor\Model\MealSchedule $mealSchedule
     */
    public function setMealSchedule(\Arbor\Model\MealSchedule $mealSchedule = null)
    {
        $this->setProperty('mealSchedule', $mealSchedule);
    }

    /**
     * @return \Arbor\Model\MealProvision
     */
    public function getMonProvision()
    {
        return $this->getProperty('monProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $monProvision
     */
    public function setMonProvision(\Arbor\Model\MealProvision $monProvision = null)
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
     * @return \Arbor\Model\MealProvision
     */
    public function getTueProvision()
    {
        return $this->getProperty('tueProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $tueProvision
     */
    public function setTueProvision(\Arbor\Model\MealProvision $tueProvision = null)
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
     * @return \Arbor\Model\MealProvision
     */
    public function getWedProvision()
    {
        return $this->getProperty('wedProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $wedProvision
     */
    public function setWedProvision(\Arbor\Model\MealProvision $wedProvision = null)
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
     * @return \Arbor\Model\MealProvision
     */
    public function getThuProvision()
    {
        return $this->getProperty('thuProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $thuProvision
     */
    public function setThuProvision(\Arbor\Model\MealProvision $thuProvision = null)
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
     * @return \Arbor\Model\MealProvision
     */
    public function getFriProvision()
    {
        return $this->getProperty('friProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $friProvision
     */
    public function setFriProvision(\Arbor\Model\MealProvision $friProvision = null)
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
     * @return \Arbor\Model\MealProvision
     */
    public function getSatProvision()
    {
        return $this->getProperty('satProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $satProvision
     */
    public function setSatProvision(\Arbor\Model\MealProvision $satProvision = null)
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
     * @return \Arbor\Model\MealProvision
     */
    public function getSunProvision()
    {
        return $this->getProperty('sunProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $sunProvision
     */
    public function setSunProvision(\Arbor\Model\MealProvision $sunProvision = null)
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
