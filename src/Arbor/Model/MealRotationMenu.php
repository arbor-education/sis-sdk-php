<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealRotationMenu extends ModelBase
{
    public const NAME = 'name';

    public const MEAL = 'meal';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const IS_ENABLED = 'isEnabled';

    public const CUT_OFF_TIME_PERIOD = 'cutOffTimePeriod';

    public const CUT_OFF_TIME_VALUE = 'cutOffTimeValue';

    public const ALLOW_MEAL_CHARGES_WHEN_NOT_ENOUGH_BALANCE = 'allowMealChargesWhenNotEnoughBalance';

    protected $_resourceType = ResourceType::MEAL_ROTATION_MENU;

    /**
     * @param Query $query
     * @return MealRotationMenu[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_ROTATION_MENU);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealRotationMenu
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_ROTATION_MENU, $id);
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

    /**
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->getProperty('isEnabled');
    }

    /**
     * @param bool $isEnabled
     */
    public function setIsEnabled(bool $isEnabled = null)
    {
        $this->setProperty('isEnabled', $isEnabled);
    }

    /**
     * @return string
     */
    public function getCutOffTimePeriod()
    {
        return $this->getProperty('cutOffTimePeriod');
    }

    /**
     * @param string $cutOffTimePeriod
     */
    public function setCutOffTimePeriod(string $cutOffTimePeriod = null)
    {
        $this->setProperty('cutOffTimePeriod', $cutOffTimePeriod);
    }

    /**
     * @return string
     */
    public function getCutOffTimeValue()
    {
        return $this->getProperty('cutOffTimeValue');
    }

    /**
     * @param string $cutOffTimeValue
     */
    public function setCutOffTimeValue(string $cutOffTimeValue = null)
    {
        $this->setProperty('cutOffTimeValue', $cutOffTimeValue);
    }

    /**
     * @return bool
     */
    public function getAllowMealChargesWhenNotEnoughBalance()
    {
        return $this->getProperty('allowMealChargesWhenNotEnoughBalance');
    }

    /**
     * @param bool $allowMealChargesWhenNotEnoughBalance
     */
    public function setAllowMealChargesWhenNotEnoughBalance(bool $allowMealChargesWhenNotEnoughBalance = null)
    {
        $this->setProperty('allowMealChargesWhenNotEnoughBalance', $allowMealChargesWhenNotEnoughBalance);
    }
}
