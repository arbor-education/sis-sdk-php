<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealProvisionPriceCategory extends ModelBase
{
    public const CATEGORY_NAME = 'categoryName';

    public const MEAL_PROVISION = 'mealProvision';

    public const APPLIES_TO = 'appliesTo';

    public const GROUP = 'group';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEAL_PROVISION_PRICE_CATEGORY;

    /**
     * @param Query $query
     * @return MealProvisionPriceCategory[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_PROVISION_PRICE_CATEGORY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealProvisionPriceCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_PROVISION_PRICE_CATEGORY, $id);
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->getProperty('categoryName');
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName(string $categoryName = null)
    {
        $this->setProperty('categoryName', $categoryName);
    }

    /**
     * @return \Arbor\Model\MealProvision
     */
    public function getMealProvision()
    {
        return $this->getProperty('mealProvision');
    }

    /**
     * @param \Arbor\Model\MealProvision $mealProvision
     */
    public function setMealProvision(\Arbor\Model\MealProvision $mealProvision = null)
    {
        $this->setProperty('mealProvision', $mealProvision);
    }

    /**
     * @return string
     */
    public function getAppliesTo()
    {
        return $this->getProperty('appliesTo');
    }

    /**
     * @param string $appliesTo
     */
    public function setAppliesTo(string $appliesTo = null)
    {
        $this->setProperty('appliesTo', $appliesTo);
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
    public function setGroup(\ModelBase $group = null)
    {
        $this->setProperty('group', $group);
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
}
