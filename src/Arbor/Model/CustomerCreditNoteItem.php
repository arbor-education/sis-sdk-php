<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerCreditNoteItem extends ModelBase
{
    public const CUSTOMER_CREDIT_NOTE = 'customerCreditNote';

    public const CUSTOMER_INVOICE = 'customerInvoice';

    public const CUSTOMER_INVOICE_ITEM = 'customerInvoiceItem';

    public const CREDIT_AMOUNT = 'creditAmount';

    public const QUANTITY_CREDITED = 'quantityCredited';

    public const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::CUSTOMER_CREDIT_NOTE_ITEM;

    /**
     * @param Query $query
     * @return CustomerCreditNoteItem[] | Collection
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
     * @return \Arbor\Model\CustomerCreditNote
     */
    public function getCustomerCreditNote()
    {
        return $this->getProperty('customerCreditNote');
    }

    /**
     * @param \Arbor\Model\CustomerCreditNote $customerCreditNote
     */
    public function setCustomerCreditNote(\Arbor\Model\CustomerCreditNote $customerCreditNote = null)
    {
        $this->setProperty('customerCreditNote', $customerCreditNote);
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
    public function getCreditAmount()
    {
        return $this->getProperty('creditAmount');
    }

    /**
     * @param string $creditAmount
     */
    public function setCreditAmount(string $creditAmount = null)
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
    public function setQuantityCredited(int $quantityCredited = null)
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
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
