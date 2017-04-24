<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomerAccountType;

class Meal extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const MEAL_NAME = 'mealName';

    const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    protected $_resourceType = ResourceType::MEAL;

    /**
     * @param \Arbor\Query\Query $query
     * @return Meal[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Meal");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Meal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MEAL, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getMealName()
    {
        return $this->getProperty("mealName");
    }

    /**
     * @param string $mealName
     */
    public function setMealName($mealName = null)
    {
        $this->setProperty("mealName", $mealName);
    }

    /**
     * @return CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty("customerAccountType");
    }

    /**
     * @param CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(CustomerAccountType $customerAccountType = null)
    {
        $this->setProperty("customerAccountType", $customerAccountType);
    }
}
