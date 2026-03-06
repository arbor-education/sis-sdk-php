<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SchoolShopOrderItem extends ModelBase
{
    public const SCHOOL_SHOP_PRODUCT = 'schoolShopProduct';

    public const CUSTOMER_INVOICE_ITEM = 'customerInvoiceItem';

    public const STATUS = 'status';

    public const COMMENT = 'comment';

    protected $_resourceType = ResourceType::SCHOOL_SHOP_ORDER_ITEM;

    /**
     * @param Query $query
     * @return SchoolShopOrderItem[] | Collection
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

        $query->setResourceType(ResourceType::SCHOOL_SHOP_ORDER_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolShopOrderItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SCHOOL_SHOP_ORDER_ITEM, $id);
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
     * @return \Arbor\Model\CustomerInvoiceItem
     */
    public function getCustomerInvoiceItem()
    {
        return $this->getProperty('customerInvoiceItem');
    }

    /**
     * @param \Arbor\Model\CustomerInvoiceItem $customerInvoiceItem
     */
    public function setCustomerInvoiceItem(\Arbor\Model\CustomerInvoiceItem $customerInvoiceItem = null)
    {
        $this->setProperty('customerInvoiceItem', $customerInvoiceItem);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->getProperty('comment');
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment = null)
    {
        $this->setProperty('comment', $comment);
    }
}
