<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MealProvisionPriceCategoryGroup extends ModelBase
{

    const MEAL_PROVISION_PRICE_CATEGORY = 'mealProvisionPriceCategory';

    const GROUP = 'group';

    protected $_resourceType = ResourceType::MEAL_PROVISION_PRICE_CATEGORY_GROUP;

    /**
     * @param Query $query
     * @return MealProvisionPriceCategoryGroup[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_PROVISION_PRICE_CATEGORY_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealProvisionPriceCategoryGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_PROVISION_PRICE_CATEGORY_GROUP, $id);
    }

    /**
     * @return MealProvisionPriceCategory
     */
    public function getMealProvisionPriceCategory()
    {
        return $this->getProperty('mealProvisionPriceCategory');
    }

    /**
     * @param MealProvisionPriceCategory $mealProvisionPriceCategory
     */
    public function setMealProvisionPriceCategory(MealProvisionPriceCategory $mealProvisionPriceCategory = null)
    {
        $this->setProperty('mealProvisionPriceCategory', $mealProvisionPriceCategory);
    }

    /**
     * @return ModelBase
     */
    public function getGroup()
    {
        return $this->getProperty('group');
    }

    /**
     * @param ModelBase $group
     */
    public function setGroup(ModelBase $group = null)
    {
        $this->setProperty('group', $group);
    }


}
