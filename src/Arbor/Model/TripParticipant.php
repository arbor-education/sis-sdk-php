<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Trip;
use \Arbor\Model\Student;
use \Arbor\Model\CustomerInvoice;

class TripParticipant extends ModelBase
{
    const TRIP = 'trip';

    const STUDENT = 'student';

    const CUSTOMER_INVOICE = 'customerInvoice';

    const CONSENT_RECEIVED = 'consentReceived';

    protected $_resourceType = ResourceType::TRIP_PARTICIPANT;

    /**
     * @param \Arbor\Query\Query $query
     * @return TripParticipant[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("TripParticipant");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TripParticipant
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TRIP_PARTICIPANT, $id);
    }

    /**
     * @return Trip
     */
    public function getTrip()
    {
        return $this->getProperty("trip");
    }

    /**
     * @param Trip $trip
     */
    public function setTrip(Trip $trip = null)
    {
        $this->setProperty("trip", $trip);
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
}
