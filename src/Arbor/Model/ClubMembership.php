<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Club;
use \Arbor\Model\ClubMembershipPeriod;
use \Arbor\Model\Student;
use \Arbor\Model\CustomerInvoice;

class ClubMembership extends ModelBase
{
    const CLUB = 'club';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const CLUB_MEMBERSHIP_PERIOD = 'clubMembershipPeriod';

    const STUDENT = 'student';

    const CONSENT_RECEIVED = 'consentReceived';

    const CUSTOMER_INVOICE = 'customerInvoice';

    protected $_resourceType = ResourceType::CLUB_MEMBERSHIP;

    /**
     * @param \Arbor\Query\Query $query
     * @return ClubMembership[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ClubMembership");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ClubMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CLUB_MEMBERSHIP, $id);
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->getProperty("club");
    }

    /**
     * @param Club $club
     */
    public function setClub(Club $club = null)
    {
        $this->setProperty("club", $club);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return ClubMembershipPeriod
     */
    public function getClubMembershipPeriod()
    {
        return $this->getProperty("clubMembershipPeriod");
    }

    /**
     * @param ClubMembershipPeriod $clubMembershipPeriod
     */
    public function setClubMembershipPeriod(ClubMembershipPeriod $clubMembershipPeriod = null)
    {
        $this->setProperty("clubMembershipPeriod", $clubMembershipPeriod);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return bool
     */
    public function getConsentReceived()
    {
        return $this->getProperty("consentReceived");
    }

    /**
     * @param bool $consentReceived
     */
    public function setConsentReceived($consentReceived = null)
    {
        $this->setProperty("consentReceived", $consentReceived);
    }

    /**
     * @return CustomerInvoice
     */
    public function getCustomerInvoice()
    {
        return $this->getProperty("customerInvoice");
    }

    /**
     * @param CustomerInvoice $customerInvoice
     */
    public function setCustomerInvoice(CustomerInvoice $customerInvoice = null)
    {
        $this->setProperty("customerInvoice", $customerInvoice);
    }
}
