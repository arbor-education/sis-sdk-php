<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SchoolShopProduct extends ModelBase
{
    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const QUANTITY = 'quantity';

    public const MAX_ITEMS_PER_STUDENT = 'maxItemsPerStudent';

    public const IS_PUBLISHED = 'isPublished';

    public const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    public const ACCOUNTING_CODE = 'accountingCode';

    protected $_resourceType = ResourceType::SCHOOL_SHOP_PRODUCT;

    /**
     * @param Query $query
     * @return SchoolShopProduct[] | Collection
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
    public function setName(string $name = null)
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
    public function setDescription(string $description = null)
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
    public function setQuantity(int $quantity = null)
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
    public function setMaxItemsPerStudent(int $maxItemsPerStudent = null)
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
    public function setIsPublished(bool $isPublished = null)
    {
        $this->setProperty('isPublished', $isPublished);
    }

    /**
     * @return \Arbor\Model\CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty('customerAccountType');
    }

    /**
     * @param \Arbor\Model\CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(\Arbor\Model\CustomerAccountType $customerAccountType = null)
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
    public function setAccountingCode(string $accountingCode = null)
    {
        $this->setProperty('accountingCode', $accountingCode);
    }
}
