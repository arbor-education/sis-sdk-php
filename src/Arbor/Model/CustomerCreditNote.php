<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomerCreditNote extends ModelBase
{
    const CUSTOMER_ACCOUNT = 'customerAccount';

    const BILL_PAYER = 'billPayer';

    const CREDIT_NOTE_DATE = 'creditNoteDate';

    const TOTAL_AMOUNT_CREDITED = 'totalAmountCredited';

    const CREDIT_NOTE_NUMBER = 'creditNoteNumber';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::CUSTOMER_CREDIT_NOTE;

    /**
     * @param Query $query
     * @return CustomerCreditNote[] | Collection
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
     * @return BillPayer
     */
    public function getBillPayer()
    {
        return $this->getProperty('billPayer');
    }

    /**
     * @param BillPayer $billPayer
     */
    public function setBillPayer(BillPayer $billPayer = null)
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
    public function setTotalAmountCredited($totalAmountCredited = null)
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
    public function setCreditNoteNumber($creditNoteNumber = null)
    {
        $this->setProperty('creditNoteNumber', $creditNoteNumber);
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
