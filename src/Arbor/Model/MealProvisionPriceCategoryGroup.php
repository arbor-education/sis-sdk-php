<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\MealProvisionPriceCategory;

class MealProvisionPriceCategoryGroup extends ModelBase
{

    protected $_resourceType = ResourceType::MEAL_PROVISION_PRICE_CATEGORY_GROUP;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\MealProvisionPriceCategoryGroup[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("MealProvisionPriceCategoryGroup");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\MealProvisionPriceCategoryGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("MealProvisionPriceCategoryGroup", $id);
    }

    /**
     * @return MealProvisionPriceCategory
     */
    public function getMealProvisionPriceCategory()
    {
        return $this->getProperty("mealProvisionPriceCategory");
    }

    /**
     * @param MealProvisionPriceCategory $mealProvisionPriceCategory
     */
    public function setMealProvisionPriceCategory(MealProvisionPriceCategory $mealProvisionPriceCategory = null)
    {
        $this->setProperty("mealProvisionPriceCategory", $mealProvisionPriceCategory);
    }

    /**
     * @return ModelBase
     */
    public function getGroup()
    {
        return $this->getProperty("group");
    }

    /**
     * @param ModelBase $group
     */
    public function setGroup(ModelBase $group = null)
    {
        $this->setProperty("group", $group);
    }


}
