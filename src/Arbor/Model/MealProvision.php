<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MealProvision extends ModelBase
{

    const MEAL = 'meal';

    const MEAL_PROVISION_NAME = 'mealProvisionName';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const IS_ABSENT = 'isAbsent';

    const IS_SCHOOL_HOT_MEAL = 'isSchoolHotMeal';

    const IS_SCHOOL_LIGHT_MEAL = 'isSchoolLightMeal';

    const IS_SCHOOL_PACKED_MEAL = 'isSchoolPackedMeal';

    const IS_STUDENT_PACKED_MEAL = 'isStudentPackedMeal';

    const REQUIRES_MEAL = 'requiresMeal';

    const COPIED_TO_MEAL_PROVISION = 'copiedToMealProvision';

    protected $_resourceType = ResourceType::MEAL_PROVISION;

    /**
     * @param Query $query
     * @return MealProvision[] | Collection
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
    public function getMealProvisionName()
    {
        return $this->getProperty('mealProvisionName');
    }

    /**
     * @param string $mealProvisionName
     */
    public function setMealProvisionName($mealProvisionName = null)
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
    public function setIsAbsent($isAbsent = null)
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
    public function setIsSchoolHotMeal($isSchoolHotMeal = null)
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
    public function setIsSchoolLightMeal($isSchoolLightMeal = null)
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
    public function setIsSchoolPackedMeal($isSchoolPackedMeal = null)
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
    public function setIsStudentPackedMeal($isStudentPackedMeal = null)
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
    public function setRequiresMeal($requiresMeal = null)
    {
        $this->setProperty('requiresMeal', $requiresMeal);
    }

    /**
     * @return MealProvision
     */
    public function getCopiedToMealProvision()
    {
        return $this->getProperty('copiedToMealProvision');
    }

    /**
     * @param MealProvision $copiedToMealProvision
     */
    public function setCopiedToMealProvision(MealProvision $copiedToMealProvision = null)
    {
        $this->setProperty('copiedToMealProvision', $copiedToMealProvision);
    }


}
