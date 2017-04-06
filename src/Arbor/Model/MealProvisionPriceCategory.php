<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\MealProvision;

class MealProvisionPriceCategory extends ModelBase
{

    const CATEGORY_NAME = 'categoryName';

    const MEAL_PROVISION = 'mealProvision';

    const APPLIES_TO = 'appliesTo';

    const GROUP = 'group';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEAL_PROVISION_PRICE_CATEGORY;

    /**
     * @param \Arbor\Query\Query $query
     * @return MealProvisionPriceCategory[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("MealProvisionPriceCategory");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MealProvisionPriceCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::MEAL_PROVISION_PRICE_CATEGORY, $id);
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->getProperty("categoryName");
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName($categoryName = null)
    {
        $this->setProperty("categoryName", $categoryName);
    }

    /**
     * @return MealProvision
     */
    public function getMealProvision()
    {
        return $this->getProperty("mealProvision");
    }

    /**
     * @param MealProvision $mealProvision
     */
    public function setMealProvision(MealProvision $mealProvision = null)
    {
        $this->setProperty("mealProvision", $mealProvision);
    }

    /**
     * @return string
     */
    public function getAppliesTo()
    {
        return $this->getProperty("appliesTo");
    }

    /**
     * @param string $appliesTo
     */
    public function setAppliesTo($appliesTo = null)
    {
        $this->setProperty("appliesTo", $appliesTo);
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

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }


}
