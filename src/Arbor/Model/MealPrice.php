<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MealPrice extends ModelBase
{
    const MEAL_PROVISION_PRICE_CATEGORY = 'mealProvisionPriceCategory';

    const PRICE_EX_VAT = 'priceExVat';

    const VAT_AMOUNT = 'vatAmount';

    const VAT_RATE = 'vatRate';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEAL_PRICE;

    /**
     * @param Query $query
     * @return MealPrice[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_PRICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealPrice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_PRICE, $id);
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
    public function getPriceExVat()
    {
        return $this->getProperty('priceExVat');
    }

    /**
     * @param string $priceExVat
     */
    public function setPriceExVat($priceExVat = null)
    {
        $this->setProperty('priceExVat', $priceExVat);
    }

    /**
     * @return string
     */
    public function getVatAmount()
    {
        return $this->getProperty('vatAmount');
    }

    /**
     * @param string $vatAmount
     */
    public function setVatAmount($vatAmount = null)
    {
        $this->setProperty('vatAmount', $vatAmount);
    }

    /**
     * @return VatRate
     */
    public function getVatRate()
    {
        return $this->getProperty('vatRate');
    }

    /**
     * @param VatRate $vatRate
     */
    public function setVatRate(VatRate $vatRate = null)
    {
        $this->setProperty('vatRate', $vatRate);
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
