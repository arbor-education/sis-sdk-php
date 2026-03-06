<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ClubMembership extends ModelBase
{
    public const CLUB = 'club';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const CLUB_MEMBERSHIP_PERIOD = 'clubMembershipPeriod';

    public const STUDENT = 'student';

    public const CONSENT_RECEIVED = 'consentReceived';

    public const ACTIVATED_DATETIME = 'activatedDatetime';

    public const CUSTOMER_INVOICE = 'customerInvoice';

    public const CUSTOMER_INVOICE_ITEM = 'customerInvoiceItem';

    public const CANCELLED_DATETIME = 'cancelledDatetime';

    public const DISABLED_DATETIME = 'disabledDatetime';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP;

    /**
     * @param Query $query
     * @return ClubMembership[] | Collection
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
     * @return \Arbor\Model\Club
     */
    public function getClub()
    {
        return $this->getProperty('club');
    }

    /**
     * @param \Arbor\Model\Club $club
     */
    public function setClub(\Arbor\Model\Club $club = null)
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
     * @return \Arbor\Model\ClubMembershipPeriod
     */
    public function getClubMembershipPeriod()
    {
        return $this->getProperty('clubMembershipPeriod');
    }

    /**
     * @param \Arbor\Model\ClubMembershipPeriod $clubMembershipPeriod
     */
    public function setClubMembershipPeriod(\Arbor\Model\ClubMembershipPeriod $clubMembershipPeriod = null)
    {
        $this->setProperty('clubMembershipPeriod', $clubMembershipPeriod);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
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
    public function setConsentReceived(bool $consentReceived = null)
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
