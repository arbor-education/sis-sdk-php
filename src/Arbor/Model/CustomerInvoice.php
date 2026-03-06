<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerInvoice extends ModelBase
{
    public const PREVIOUS_CUSTOMER_INVOICE = 'previousCustomerInvoice';

    public const CUSTOMER_ACCOUNT = 'customerAccount';

    public const INVOICE_NUMBER = 'invoiceNumber';

    public const INVOICE_DATE = 'invoiceDate';

    public const INVOICE_ISSUED_DATE = 'invoiceIssuedDate';

    public const PAYMENT_DUE_DATE = 'paymentDueDate';

    public const FULLY_PAID_DATE = 'fullyPaidDate';

    public const NARRATIVE = 'narrative';

    public const TOTAL_AMOUNT_EX_VAT = 'totalAmountExVat';

    public const VAT_TOTAL = 'vatTotal';

    public const BALANCE = 'balance';

    public const CANCELLED_DATE = 'cancelledDate';

    public const REISSUED_DATE = 'reissuedDate';

    public const IS_LEGACY_VAT_CALCULATION = 'isLegacyVatCalculation';

    protected $_resourceType = ResourceType::CUSTOMER_INVOICE;

    /**
     * @param Query $query
     * @return CustomerInvoice[] | Collection
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
     * @return \Arbor\Model\CustomerInvoice
     */
    public function getPreviousCustomerInvoice()
    {
        return $this->getProperty('previousCustomerInvoice');
    }

    /**
     * @param \Arbor\Model\CustomerInvoice $previousCustomerInvoice
     */
    public function setPreviousCustomerInvoice(\Arbor\Model\CustomerInvoice $previousCustomerInvoice = null)
    {
        $this->setProperty('previousCustomerInvoice', $previousCustomerInvoice);
    }

    /**
     * @return \Arbor\Model\CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param \Arbor\Model\CustomerAccount $customerAccount
     */
    public function setCustomerAccount(\Arbor\Model\CustomerAccount $customerAccount = null)
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
    public function setInvoiceNumber(string $invoiceNumber = null)
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
    public function setNarrative(string $narrative = null)
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
    public function setTotalAmountExVat(string $totalAmountExVat = null)
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
    public function setVatTotal(string $vatTotal = null)
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
    public function setBalance(string $balance = null)
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

    /**
     * @return bool
     */
    public function getIsLegacyVatCalculation()
    {
        return $this->getProperty('isLegacyVatCalculation');
    }

    /**
     * @param bool $isLegacyVatCalculation
     */
    public function setIsLegacyVatCalculation(bool $isLegacyVatCalculation = null)
    {
        $this->setProperty('isLegacyVatCalculation', $isLegacyVatCalculation);
    }
}
