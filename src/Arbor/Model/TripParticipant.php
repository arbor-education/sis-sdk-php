<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TripParticipant extends ModelBase
{
    const TRIP = 'trip';

    const STUDENT = 'student';

    const CUSTOMER_INVOICE = 'customerInvoice';

    const CONSENT_RECEIVED = 'consentReceived';

    const STATUS = 'status';

    protected $_resourceType = ResourceType::TRIP_PARTICIPANT;

    /**
     * @param Query $query
     * @return TripParticipant[] | Collection
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

        $query->setResourceType(ResourceType::TRIP_PARTICIPANT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TripParticipant
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRIP_PARTICIPANT, $id);
    }

    /**
     * @return Trip
     */
    public function getTrip()
    {
        return $this->getProperty('trip');
    }

    /**
     * @param Trip $trip
     */
    public function setTrip(Trip $trip = null)
    {
        $this->setProperty('trip', $trip);
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
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty('status', $status);
    }
}
