<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TripParticipant extends ModelBase
{
    public const TRIP = 'trip';

    public const STUDENT = 'student';

    public const CUSTOMER_INVOICE = 'customerInvoice';

    public const CONSENT_RECEIVED = 'consentReceived';

    public const STATUS = 'status';

    protected $_resourceType = ResourceType::TRIP_PARTICIPANT;

    /**
     * @param Query $query
     * @return TripParticipant[] | Collection
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
     * @return \Arbor\Model\Trip
     */
    public function getTrip()
    {
        return $this->getProperty('trip');
    }

    /**
     * @param \Arbor\Model\Trip $trip
     */
    public function setTrip(\Arbor\Model\Trip $trip = null)
    {
        $this->setProperty('trip', $trip);
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
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }
}
