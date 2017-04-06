<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Meal;

class MealProvision extends ModelBase
{

    const MEAL = 'meal';

    const MEAL_PROVISION_NAME = 'mealProvisionName';

    const IS_ABSENT = 'isAbsent';

    const IS_SCHOOL_HOT_MEAL = 'isSchoolHotMeal';

    const IS_SCHOOL_LIGHT_MEAL = 'isSchoolLightMeal';

    const IS_SCHOOL_PACKED_MEAL = 'isSchoolPackedMeal';

    const IS_STUDENT_PACKED_MEAL = 'isStudentPackedMeal';

    const REQUIRES_MEAL = 'requiresMeal';

    protected $_resourceType = ResourceType::MEAL_PROVISION;

    /**
     * @param \Arbor\Query\Query $query
     * @return MealProvision[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("MealProvision");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MealProvision
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::MEAL_PROVISION, $id);
    }

    /**
     * @return Meal
     */
    public function getMeal()
    {
        return $this->getProperty("meal");
    }

    /**
     * @param Meal $meal
     */
    public function setMeal(Meal $meal = null)
    {
        $this->setProperty("meal", $meal);
    }

    /**
     * @return string
     */
    public function getMealProvisionName()
    {
        return $this->getProperty("mealProvisionName");
    }

    /**
     * @param string $mealProvisionName
     */
    public function setMealProvisionName($mealProvisionName = null)
    {
        $this->setProperty("mealProvisionName", $mealProvisionName);
    }

    /**
     * @return bool
     */
    public function getIsAbsent()
    {
        return $this->getProperty("isAbsent");
    }

    /**
     * @param bool $isAbsent
     */
    public function setIsAbsent($isAbsent = null)
    {
        $this->setProperty("isAbsent", $isAbsent);
    }

    /**
     * @return bool
     */
    public function getIsSchoolHotMeal()
    {
        return $this->getProperty("isSchoolHotMeal");
    }

    /**
     * @param bool $isSchoolHotMeal
     */
    public function setIsSchoolHotMeal($isSchoolHotMeal = null)
    {
        $this->setProperty("isSchoolHotMeal", $isSchoolHotMeal);
    }

    /**
     * @return bool
     */
    public function getIsSchoolLightMeal()
    {
        return $this->getProperty("isSchoolLightMeal");
    }

    /**
     * @param bool $isSchoolLightMeal
     */
    public function setIsSchoolLightMeal($isSchoolLightMeal = null)
    {
        $this->setProperty("isSchoolLightMeal", $isSchoolLightMeal);
    }

    /**
     * @return bool
     */
    public function getIsSchoolPackedMeal()
    {
        return $this->getProperty("isSchoolPackedMeal");
    }

    /**
     * @param bool $isSchoolPackedMeal
     */
    public function setIsSchoolPackedMeal($isSchoolPackedMeal = null)
    {
        $this->setProperty("isSchoolPackedMeal", $isSchoolPackedMeal);
    }

    /**
     * @return bool
     */
    public function getIsStudentPackedMeal()
    {
        return $this->getProperty("isStudentPackedMeal");
    }

    /**
     * @param bool $isStudentPackedMeal
     */
    public function setIsStudentPackedMeal($isStudentPackedMeal = null)
    {
        $this->setProperty("isStudentPackedMeal", $isStudentPackedMeal);
    }

    /**
     * @return bool
     */
    public function getRequiresMeal()
    {
        return $this->getProperty("requiresMeal");
    }

    /**
     * @param bool $requiresMeal
     */
    public function setRequiresMeal($requiresMeal = null)
    {
        $this->setProperty("requiresMeal", $requiresMeal);
    }


}
