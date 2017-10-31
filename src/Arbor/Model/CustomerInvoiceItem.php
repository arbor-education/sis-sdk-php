<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomerInvoiceItem extends ModelBase
{

    const CUSTOMER_INVOICE = 'customerInvoice';

    const ITEM_UNIT = 'itemUnit';

    const ITEM_DESCRIPTION = 'itemDescription';

    const ITEM_PRICE_EX_VAT = 'itemPriceExVat';

    const QUANTITY_INVOICED = 'quantityInvoiced';

    const VAT_RATE = 'vatRate';

    const ITEM_VAT_AMOUNT = 'itemVatAmount';

    const ITEM_TOTAL_AMOUNT = 'itemTotalAmount';

    const LINE_NUMBER = 'lineNumber';

    const FULLY_PAID_DATE = 'fullyPaidDate';

    protected $_resourceType = ResourceType::CUSTOMER_INVOICE_ITEM;

    /**
     * @param Query $query
     * @return CustomerInvoiceItem[] | Collection
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
     * @return ItemUnit
     */
    public function getItemUnit()
    {
        return $this->getProperty('itemUnit');
    }

    /**
     * @param ItemUnit $itemUnit
     */
    public function setItemUnit(ItemUnit $itemUnit = null)
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
    public function setItemDescription($itemDescription = null)
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
    public function setItemPriceExVat($itemPriceExVat = null)
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
    public function setQuantityInvoiced($quantityInvoiced = null)
    {
        $this->setProperty('quantityInvoiced', $quantityInvoiced);
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
     * @return string
     */
    public function getItemVatAmount()
    {
        return $this->getProperty('itemVatAmount');
    }

    /**
     * @param string $itemVatAmount
     */
    public function setItemVatAmount($itemVatAmount = null)
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
    public function setItemTotalAmount($itemTotalAmount = null)
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
    public function setLineNumber($lineNumber = null)
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


}
