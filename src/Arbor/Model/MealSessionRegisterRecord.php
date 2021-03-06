<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MealSessionRegisterRecord extends ModelBase
{
    const MEAL_SESSION = 'mealSession';

    const PERSON = 'person';

    const MEAL_PROVISION = 'mealProvision';

    const CUSTOMER_INVOICE = 'customerInvoice';

    const MEAL_PROVISION_PRICE_CATEGORY = 'mealProvisionPriceCategory';

    const SOURCE = 'source';

    protected $_resourceType = ResourceType::MEAL_SESSION_REGISTER_RECORD;

    /**
     * @param Query $query
     * @return MealSessionRegisterRecord[] | Collection
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
     * @return MealSession
     */
    public function getMealSession()
    {
        return $this->getProperty('mealSession');
    }

    /**
     * @param MealSession $mealSession
     */
    public function setMealSession(MealSession $mealSession = null)
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
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return MealProvision
     */
    public function getMealProvision()
    {
        return $this->getProperty('mealProvision');
    }

    /**
     * @param MealProvision $mealProvision
     */
    public function setMealProvision(MealProvision $mealProvision = null)
    {
        $this->setProperty('mealProvision', $mealProvision);
    }

    /**
     * @return CustomerInvoice
     */
    public function getCustomerInvoice()
    {
        return $this->getProperty('customerInvoice');
    }

    /**
     * @param CustomerInvoice $customerInvoice
     */
    public function setCustomerInvoice(CustomerInvoice $customerInvoice = null)
    {
        $this->setProperty('customerInvoice', $customerInvoice);
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
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param string $source
     */
    public function setSource($source = null)
    {
        $this->setProperty('source', $source);
    }
}
