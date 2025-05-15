<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealSessionRegisterRecord extends ModelBase
{
    public const MEAL_SESSION = 'mealSession';

    public const PERSON = 'person';

    public const MEAL_PROVISION = 'mealProvision';

    public const CUSTOMER_INVOICE = 'customerInvoice';

    public const MEAL_PROVISION_PRICE_CATEGORY = 'mealProvisionPriceCategory';

    public const SOURCE = 'source';

    protected $_resourceType = ResourceType::MEAL_SESSION_REGISTER_RECORD;

    /**
     * @param Query $query
     * @return MealSessionRegisterRecord[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_SESSION_REGISTER_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealSessionRegisterRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_SESSION_REGISTER_RECORD, $id);
    }

    /**
     * @return \Arbor\Model\MealSession
     */
    public function getMealSession()
    {
        return $this->getProperty('mealSession');
    }

    /**
     * @param \Arbor\Model\MealSession $mealSession
     */
    public function setMealSession(\Arbor\Model\MealSession $mealSession = null)
    {
        $this->setProperty('mealSession', $mealSession);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
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
     * @return \Arbor\Model\CustomerInvoice
     */
    public function getCustomerInvoice()
    {
        return $this->getProperty('customerInvoice');
    }

    /**
     * @param \Arbor\Model\CustomerInvoice $customerInvoice
     */
    public function setCustomerInvoice(\Arbor\Model\CustomerInvoice $customerInvoice = null)
    {
        $this->setProperty('customerInvoice', $customerInvoice);
    }

    /**
     * @return \Arbor\Model\MealProvisionPriceCategory
     */
    public function getMealProvisionPriceCategory()
    {
        return $this->getProperty('mealProvisionPriceCategory');
    }

    /**
     * @param \Arbor\Model\MealProvisionPriceCategory $mealProvisionPriceCategory
     */
    public function setMealProvisionPriceCategory(\Arbor\Model\MealProvisionPriceCategory $mealProvisionPriceCategory = null)
    {
        $this->setProperty('mealProvisionPriceCategory', $mealProvisionPriceCategory);
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param string $source
     */
    public function setSource(string $source = null)
    {
        $this->setProperty('source', $source);
    }
}
