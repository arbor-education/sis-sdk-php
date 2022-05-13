<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomerCreditNoteItem extends ModelBase
{
    const CUSTOMER_CREDIT_NOTE = 'customerCreditNote';

    const CUSTOMER_INVOICE = 'customerInvoice';

    const CUSTOMER_INVOICE_ITEM = 'customerInvoiceItem';

    const CREDIT_AMOUNT = 'creditAmount';

    const QUANTITY_CREDITED = 'quantityCredited';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::CUSTOMER_CREDIT_NOTE_ITEM;

    /**
     * @param Query $query
     * @return CustomerCreditNoteItem[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_CREDIT_NOTE_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerCreditNoteItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_CREDIT_NOTE_ITEM, $id);
    }

    /**
     * @return CustomerCreditNote
     */
    public function getCustomerCreditNote()
    {
        return $this->getProperty('customerCreditNote');
    }

    /**
     * @param CustomerCreditNote $customerCreditNote
     */
    public function setCustomerCreditNote(CustomerCreditNote $customerCreditNote = null)
    {
        $this->setProperty('customerCreditNote', $customerCreditNote);
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
     * @return CustomerInvoiceItem
     */
    public function getCustomerInvoiceItem()
    {
        return $this->getProperty('customerInvoiceItem');
    }

    /**
     * @param CustomerInvoiceItem $customerInvoiceItem
     */
    public function setCustomerInvoiceItem(CustomerInvoiceItem $customerInvoiceItem = null)
    {
        $this->setProperty('customerInvoiceItem', $customerInvoiceItem);
    }

    /**
     * @return string
     */
    public function getCreditAmount()
    {
        return $this->getProperty('creditAmount');
    }

    /**
     * @param string $creditAmount
     */
    public function setCreditAmount($creditAmount = null)
    {
        $this->setProperty('creditAmount', $creditAmount);
    }

    /**
     * @return int
     */
    public function getQuantityCredited()
    {
        return $this->getProperty('quantityCredited');
    }

    /**
     * @param int $quantityCredited
     */
    public function setQuantityCredited($quantityCredited = null)
    {
        $this->setProperty('quantityCredited', $quantityCredited);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
