<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealProvision extends ModelBase
{
    public const MEAL = 'meal';

    public const MEAL_PROVISION_NAME = 'mealProvisionName';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const IS_ABSENT = 'isAbsent';

    public const IS_SCHOOL_HOT_MEAL = 'isSchoolHotMeal';

    public const IS_SCHOOL_LIGHT_MEAL = 'isSchoolLightMeal';

    public const IS_SCHOOL_PACKED_MEAL = 'isSchoolPackedMeal';

    public const IS_STUDENT_PACKED_MEAL = 'isStudentPackedMeal';

    public const REQUIRES_MEAL = 'requiresMeal';

    public const COPIED_TO_MEAL_PROVISION = 'copiedToMealProvision';

    protected $_resourceType = ResourceType::MEAL_PROVISION;

    /**
     * @param Query $query
     * @return MealProvision[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_PROVISION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealProvision
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_PROVISION, $id);
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
    public function getMealProvisionName()
    {
        return $this->getProperty('mealProvisionName');
    }

    /**
     * @param string $mealProvisionName
     */
    public function setMealProvisionName(string $mealProvisionName = null)
    {
        $this->setProperty('mealProvisionName', $mealProvisionName);
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
    public function getIsAbsent()
    {
        return $this->getProperty('isAbsent');
    }

    /**
     * @param bool $isAbsent
     */
    public function setIsAbsent(bool $isAbsent = null)
    {
        $this->setProperty('isAbsent', $isAbsent);
    }

    /**
     * @return bool
     */
    public function getIsSchoolHotMeal()
    {
        return $this->getProperty('isSchoolHotMeal');
    }

    /**
     * @param bool $isSchoolHotMeal
     */
    public function setIsSchoolHotMeal(bool $isSchoolHotMeal = null)
    {
        $this->setProperty('isSchoolHotMeal', $isSchoolHotMeal);
    }

    /**
     * @return bool
     */
    public function getIsSchoolLightMeal()
    {
        return $this->getProperty('isSchoolLightMeal');
    }

    /**
     * @param bool $isSchoolLightMeal
     */
    public function setIsSchoolLightMeal(bool $isSchoolLightMeal = null)
    {
        $this->setProperty('isSchoolLightMeal', $isSchoolLightMeal);
    }

    /**
     * @return bool
     */
    public function getIsSchoolPackedMeal()
    {
        return $this->getProperty('isSchoolPackedMeal');
    }

    /**
     * @param bool $isSchoolPackedMeal
     */
    public function setIsSchoolPackedMeal(bool $isSchoolPackedMeal = null)
    {
        $this->setProperty('isSchoolPackedMeal', $isSchoolPackedMeal);
    }

    /**
     * @return bool
     */
    public function getIsStudentPackedMeal()
    {
        return $this->getProperty('isStudentPackedMeal');
    }

    /**
     * @param bool $isStudentPackedMeal
     */
    public function setIsStudentPackedMeal(bool $isStudentPackedMeal = null)
    {
        $this->setProperty('isStudentPackedMeal', $isStudentPackedMeal);
    }

    /**
     * @return bool
     */
    public function getRequiresMeal()
    {
        return $this->getProperty('requiresMeal');
    }

    /**
     * @param bool $requiresMeal
     */
    public function setRequiresMeal(bool $requiresMeal = null)
    {
        $this->setProperty('requiresMeal', $requiresMeal);
    }

    /**
     * @return \Arbor\Model\MealProvision
     */
    public function getCopiedToMealProvision()
    {
        return $this->getProperty('copiedToMealProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $copiedToMealProvision
     */
    public function setCopiedToMealProvision(\Arbor\Model\MealProvision $copiedToMealProvision = null)
    {
        $this->setProperty('copiedToMealProvision', $copiedToMealProvision);
    }
}
