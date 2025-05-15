<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerCreditNote extends ModelBase
{
    public const CUSTOMER_ACCOUNT = 'customerAccount';

    public const BILL_PAYER = 'billPayer';

    public const CREDIT_NOTE_DATE = 'creditNoteDate';

    public const TOTAL_AMOUNT_CREDITED = 'totalAmountCredited';

    public const CREDIT_NOTE_NUMBER = 'creditNoteNumber';

    public const LEGACY_CREDIT_NOTE_NUMBER = 'legacyCreditNoteNumber';

    public const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::CUSTOMER_CREDIT_NOTE;

    /**
     * @param Query $query
     * @return CustomerCreditNote[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_CREDIT_NOTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerCreditNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_CREDIT_NOTE, $id);
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
     * @return \Arbor\Model\BillPayer
     */
    public function getBillPayer()
    {
        return $this->getProperty('billPayer');
    }

    /**
     * @param \Arbor\Model\BillPayer $billPayer
     */
    public function setBillPayer(\Arbor\Model\BillPayer $billPayer = null)
    {
        $this->setProperty('billPayer', $billPayer);
    }

    /**
     * @return \DateTime
     */
    public function getCreditNoteDate()
    {
        return $this->getProperty('creditNoteDate');
    }

    /**
     * @param \DateTime $creditNoteDate
     */
    public function setCreditNoteDate(\DateTime $creditNoteDate = null)
    {
        $this->setProperty('creditNoteDate', $creditNoteDate);
    }

    /**
     * @return string
     */
    public function getTotalAmountCredited()
    {
        return $this->getProperty('totalAmountCredited');
    }

    /**
     * @param string $totalAmountCredited
     */
    public function setTotalAmountCredited(string $totalAmountCredited = null)
    {
        $this->setProperty('totalAmountCredited', $totalAmountCredited);
    }

    /**
     * @return string
     */
    public function getCreditNoteNumber()
    {
        return $this->getProperty('creditNoteNumber');
    }

    /**
     * @param string $creditNoteNumber
     */
    public function setCreditNoteNumber(string $creditNoteNumber = null)
    {
        $this->setProperty('creditNoteNumber', $creditNoteNumber);
    }

    /**
     * @return string
     */
    public function getLegacyCreditNoteNumber()
    {
        return $this->getProperty('legacyCreditNoteNumber');
    }

    /**
     * @param string $legacyCreditNoteNumber
     */
    public function setLegacyCreditNoteNumber(string $legacyCreditNoteNumber = null)
    {
        $this->setProperty('legacyCreditNoteNumber', $legacyCreditNoteNumber);
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
