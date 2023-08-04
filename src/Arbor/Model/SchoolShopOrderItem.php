<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SchoolShopOrderItem extends \ModelBase
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
    public static function query(\Query $query = null)
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
     * @return SchoolShopProduct
     */
    public function getSchoolShopProduct()
    {
        return $this->getProperty('schoolShopProduct');
    }

    /**
     * @param SchoolShopProduct $schoolShopProduct
     */
    public function setSchoolShopProduct(\SchoolShopProduct $schoolShopProduct = null)
    {
        $this->setProperty('schoolShopProduct', $schoolShopProduct);
    }

    /**
     * @return CustomerInvoiceItem
     */
    public function getCustomerInvoiceItem()
    {
        return $this->getProperty('customerInvoiceItem');
    }

    /**
     * @param CustomerInvoiceItem $customerInvoiceItem
     */
    public function setCustomerInvoiceItem(\CustomerInvoiceItem $customerInvoiceItem = null)
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
