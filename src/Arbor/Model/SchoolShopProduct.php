<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SchoolShopProduct extends ModelBase
{
    const NAME = 'name';

    const DESCRIPTION = 'description';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const QUANTITY = 'quantity';

    const MAX_ITEMS_PER_STUDENT = 'maxItemsPerStudent';

    const IS_PUBLISHED = 'isPublished';

    const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    const ACCOUNTING_CODE = 'accountingCode';

    protected $_resourceType = ResourceType::SCHOOL_SHOP_PRODUCT;

    /**
     * @param Query $query
     * @return SchoolShopProduct[] | Collection
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

        $query->setResourceType(ResourceType::SCHOOL_SHOP_PRODUCT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolShopProduct
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SCHOOL_SHOP_PRODUCT, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
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

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->getProperty('quantity');
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity = null)
    {
        $this->setProperty('quantity', $quantity);
    }

    /**
     * @return int
     */
    public function getMaxItemsPerStudent()
    {
        return $this->getProperty('maxItemsPerStudent');
    }

    /**
     * @param int $maxItemsPerStudent
     */
    public function setMaxItemsPerStudent($maxItemsPerStudent = null)
    {
        $this->setProperty('maxItemsPerStudent', $maxItemsPerStudent);
    }

    /**
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->getProperty('isPublished');
    }

    /**
     * @param bool $isPublished
     */
    public function setIsPublished($isPublished = null)
    {
        $this->setProperty('isPublished', $isPublished);
    }

    /**
     * @return CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty('customerAccountType');
    }

    /**
     * @param CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(CustomerAccountType $customerAccountType = null)
    {
        $this->setProperty('customerAccountType', $customerAccountType);
    }

    /**
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->getProperty('accountingCode');
    }

    /**
     * @param string $accountingCode
     */
    public function setAccountingCode($accountingCode = null)
    {
        $this->setProperty('accountingCode', $accountingCode);
    }
}
