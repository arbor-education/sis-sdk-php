<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerInvoiceItem extends ModelBase
{
    public const CUSTOMER_INVOICE = 'customerInvoice';

    public const ITEM_UNIT = 'itemUnit';

    public const ITEM_DESCRIPTION = 'itemDescription';

    public const ITEM_PRICE_EX_VAT = 'itemPriceExVat';

    public const QUANTITY_INVOICED = 'quantityInvoiced';

    public const VAT_RATE = 'vatRate';

    public const ITEM_VAT_AMOUNT = 'itemVatAmount';

    public const ITEM_TOTAL_AMOUNT = 'itemTotalAmount';

    public const LINE_NUMBER = 'lineNumber';

    public const FULLY_PAID_DATE = 'fullyPaidDate';

    public const ITEM_STATUS = 'itemStatus';

    protected $_resourceType = ResourceType::CUSTOMER_INVOICE_ITEM;

    /**
     * @param Query $query
     * @return CustomerInvoiceItem[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_INVOICE_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerInvoiceItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_INVOICE_ITEM, $id);
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
     * @return \Arbor\Model\ItemUnit
     */
    public function getItemUnit()
    {
        return $this->getProperty('itemUnit');
    }

    /**
     * @param \Arbor\Model\ItemUnit $itemUnit
     */
    public function setItemUnit(\Arbor\Model\ItemUnit $itemUnit = null)
    {
        $this->setProperty('itemUnit', $itemUnit);
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
        return $this->getProperty('itemDescription');
    }

    /**
     * @param string $itemDescription
     */
    public function setItemDescription(string $itemDescription = null)
    {
        $this->setProperty('itemDescription', $itemDescription);
    }

    /**
     * @return string
     */
    public function getItemPriceExVat()
    {
        return $this->getProperty('itemPriceExVat');
    }

    /**
     * @param string $itemPriceExVat
     */
    public function setItemPriceExVat(string $itemPriceExVat = null)
    {
        $this->setProperty('itemPriceExVat', $itemPriceExVat);
    }

    /**
     * @return int
     */
    public function getQuantityInvoiced()
    {
        return $this->getProperty('quantityInvoiced');
    }

    /**
     * @param int $quantityInvoiced
     */
    public function setQuantityInvoiced(int $quantityInvoiced = null)
    {
        $this->setProperty('quantityInvoiced', $quantityInvoiced);
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

    /**
     * @return string
     */
    public function getItemVatAmount()
    {
        return $this->getProperty('itemVatAmount');
    }

    /**
     * @param string $itemVatAmount
     */
    public function setItemVatAmount(string $itemVatAmount = null)
    {
        $this->setProperty('itemVatAmount', $itemVatAmount);
    }

    /**
     * @return string
     */
    public function getItemTotalAmount()
    {
        return $this->getProperty('itemTotalAmount');
    }

    /**
     * @param string $itemTotalAmount
     */
    public function setItemTotalAmount(string $itemTotalAmount = null)
    {
        $this->setProperty('itemTotalAmount', $itemTotalAmount);
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
        return $this->getProperty('lineNumber');
    }

    /**
     * @param int $lineNumber
     */
    public function setLineNumber(int $lineNumber = null)
    {
        $this->setProperty('lineNumber', $lineNumber);
    }

    /**
     * @return \DateTime
     */
    public function getFullyPaidDate()
    {
        return $this->getProperty('fullyPaidDate');
    }

    /**
     * @param \DateTime $fullyPaidDate
     */
    public function setFullyPaidDate(\DateTime $fullyPaidDate = null)
    {
        $this->setProperty('fullyPaidDate', $fullyPaidDate);
    }

    /**
     * @return string
     */
    public function getItemStatus()
    {
        return $this->getProperty('itemStatus');
    }

    /**
     * @param string $itemStatus
     */
    public function setItemStatus(string $itemStatus = null)
    {
        $this->setProperty('itemStatus', $itemStatus);
    }
}
