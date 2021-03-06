<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClubMembership extends ModelBase
{
    const CLUB = 'club';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const CLUB_MEMBERSHIP_PERIOD = 'clubMembershipPeriod';

    const STUDENT = 'student';

    const CONSENT_RECEIVED = 'consentReceived';

    const ACTIVATED_DATETIME = 'activatedDatetime';

    const CUSTOMER_INVOICE = 'customerInvoice';

    const CUSTOMER_INVOICE_ITEM = 'customerInvoiceItem';

    const CANCELLED_DATETIME = 'cancelledDatetime';

    const DISABLED_DATETIME = 'disabledDatetime';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP;

    /**
     * @param Query $query
     * @return ClubMembership[] | Collection
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

        $query->setResourceType(ResourceType::CLUB_MEMBERSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClubMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB_MEMBERSHIP, $id);
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->getProperty('club');
    }

    /**
     * @param Club $club
     */
    public function setClub(Club $club = null)
    {
        $this->setProperty('club', $club);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return ClubMembershipPeriod
     */
    public function getClubMembershipPeriod()
    {
        return $this->getProperty('clubMembershipPeriod');
    }

    /**
     * @param ClubMembershipPeriod $clubMembershipPeriod
     */
    public function setClubMembershipPeriod(ClubMembershipPeriod $clubMembershipPeriod = null)
    {
        $this->setProperty('clubMembershipPeriod', $clubMembershipPeriod);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return bool
     */
    public function getConsentReceived()
    {
        return $this->getProperty('consentReceived');
    }

    /**
     * @param bool $consentReceived
     */
    public function setConsentReceived($consentReceived = null)
    {
        $this->setProperty('consentReceived', $consentReceived);
    }

    /**
     * @return \DateTime
     */
    public function getActivatedDatetime()
    {
        return $this->getProperty('activatedDatetime');
    }

    /**
     * @param \DateTime $activatedDatetime
     */
    public function setActivatedDatetime(\DateTime $activatedDatetime = null)
    {
        $this->setProperty('activatedDatetime', $activatedDatetime);
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
     * @return \DateTime
     */
    public function getCancelledDatetime()
    {
        return $this->getProperty('cancelledDatetime');
    }

    /**
     * @param \DateTime $cancelledDatetime
     */
    public function setCancelledDatetime(\DateTime $cancelledDatetime = null)
    {
        $this->setProperty('cancelledDatetime', $cancelledDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getDisabledDatetime()
    {
        return $this->getProperty('disabledDatetime');
    }

    /**
     * @param \DateTime $disabledDatetime
     */
    public function setDisabledDatetime(\DateTime $disabledDatetime = null)
    {
        $this->setProperty('disabledDatetime', $disabledDatetime);
    }
}
