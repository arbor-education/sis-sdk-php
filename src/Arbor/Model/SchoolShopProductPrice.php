<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SchoolShopProductPrice extends ModelBase
{
    public const SCHOOL_SHOP_PRODUCT = 'schoolShopProduct';

    public const ELIGIBLE = 'eligible';

    public const PRICE_EX_VAT = 'priceExVat';

    public const VAT_RATE = 'vatRate';

    protected $_resourceType = ResourceType::SCHOOL_SHOP_PRODUCT_PRICE;

    /**
     * @param Query $query
     * @return SchoolShopProductPrice[] | Collection
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

        $query->setResourceType(ResourceType::SCHOOL_SHOP_PRODUCT_PRICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolShopProductPrice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SCHOOL_SHOP_PRODUCT_PRICE, $id);
    }

    /**
     * @return \Arbor\Model\SchoolShopProduct
     */
    public function getSchoolShopProduct()
    {
        return $this->getProperty('schoolShopProduct');
    }

    /**
     * @param \Arbor\Model\SchoolShopProduct $schoolShopProduct
     */
    public function setSchoolShopProduct(\Arbor\Model\SchoolShopProduct $schoolShopProduct = null)
    {
        $this->setProperty('schoolShopProduct', $schoolShopProduct);
    }

    /**
     * @return ModelBase
     */
    public function getEligible()
    {
        return $this->getProperty('eligible');
    }

    /**
     * @param ModelBase $eligible
     */
    public function setEligible(\ModelBase $eligible = null)
    {
        $this->setProperty('eligible', $eligible);
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
    public function setPriceExVat(string $priceExVat = null)
    {
        $this->setProperty('priceExVat', $priceExVat);
    }

    /**
     * @return \Arbor\Model\VatRate
     */
    public function getVatRate()
    {
        return $this->getProperty('vatRate');
    }

    /**
     * @param \Arbor\Model\VatRate $vatRate
     */
    public function setVatRate(\Arbor\Model\VatRate $vatRate = null)
    {
        $this->setProperty('vatRate', $vatRate);
    }
}
