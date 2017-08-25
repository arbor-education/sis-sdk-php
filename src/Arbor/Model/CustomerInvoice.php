<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomerInvoice extends ModelBase
{
    const PREVIOUS_CUSTOMER_INVOICE = 'previousCustomerInvoice';

    const CUSTOMER_ACCOUNT = 'customerAccount';

    const INVOICE_NUMBER = 'invoiceNumber';

    const INVOICE_DATE = 'invoiceDate';

    const INVOICE_ISSUED_DATE = 'invoiceIssuedDate';

    const PAYMENT_DUE_DATE = 'paymentDueDate';

    const FULLY_PAID_DATE = 'fullyPaidDate';

    const NARRATIVE = 'narrative';

    const TOTAL_AMOUNT_EX_VAT = 'totalAmountExVat';

    const VAT_TOTAL = 'vatTotal';

    const BALANCE = 'balance';

    const CANCELLED_DATE = 'cancelledDate';

    const REISSUED_DATE = 'reissuedDate';

    protected $_resourceType = ResourceType::CUSTOMER_INVOICE;

    /**
     * @param Query $query
     * @return CustomerInvoice[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_INVOICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerInvoice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_INVOICE, $id);
    }

    /**
     * @return CustomerInvoice
     */
    public function getPreviousCustomerInvoice()
    {
        return $this->getProperty('previousCustomerInvoice');
    }

    /**
     * @param CustomerInvoice $previousCustomerInvoice
     */
    public function setPreviousCustomerInvoice(CustomerInvoice $previousCustomerInvoice = null)
    {
        $this->setProperty('previousCustomerInvoice', $previousCustomerInvoice);
    }

    /**
     * @return CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param CustomerAccount $customerAccount
     */
    public function setCustomerAccount(CustomerAccount $customerAccount = null)
    {
        $this->setProperty('customerAccount', $customerAccount);
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->getProperty('invoiceNumber');
    }

    /**
     * @param string $invoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        $this->setProperty('invoiceNumber', $invoiceNumber);
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->getProperty('invoiceDate');
    }

    /**
     * @param \DateTime $invoiceDate
     */
    public function setInvoiceDate(\DateTime $invoiceDate = null)
    {
        $this->setProperty('invoiceDate', $invoiceDate);
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceIssuedDate()
    {
        return $this->getProperty('invoiceIssuedDate');
    }

    /**
     * @param \DateTime $invoiceIssuedDate
     */
    public function setInvoiceIssuedDate(\DateTime $invoiceIssuedDate = null)
    {
        $this->setProperty('invoiceIssuedDate', $invoiceIssuedDate);
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->getProperty('paymentDueDate');
    }

    /**
     * @param \DateTime $paymentDueDate
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate = null)
    {
        $this->setProperty('paymentDueDate', $paymentDueDate);
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

    /**
     * @return string
     */
    public function getTotalAmountExVat()
    {
        return $this->getProperty('totalAmountExVat');
    }

    /**
     * @param string $totalAmountExVat
     */
    public function setTotalAmountExVat($totalAmountExVat = null)
    {
        $this->setProperty('totalAmountExVat', $totalAmountExVat);
    }

    /**
     * @return string
     */
    public function getVatTotal()
    {
        return $this->getProperty('vatTotal');
    }

    /**
     * @param string $vatTotal
     */
    public function setVatTotal($vatTotal = null)
    {
        $this->setProperty('vatTotal', $vatTotal);
    }

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->getProperty('balance');
    }

    /**
     * @param string $balance
     */
    public function setBalance($balance = null)
    {
        $this->setProperty('balance', $balance);
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDate()
    {
        return $this->getProperty('cancelledDate');
    }

    /**
     * @param \DateTime $cancelledDate
     */
    public function setCancelledDate(\DateTime $cancelledDate = null)
    {
        $this->setProperty('cancelledDate', $cancelledDate);
    }

    /**
     * @return \DateTime
     */
    public function getReissuedDate()
    {
        return $this->getProperty('reissuedDate');
    }

    /**
     * @param \DateTime $reissuedDate
     */
    public function setReissuedDate(\DateTime $reissuedDate = null)
    {
        $this->setProperty('reissuedDate', $reissuedDate);
    }
}
