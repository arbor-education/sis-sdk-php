<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmergencyAlert extends ModelBase
{

    const DATETIME = 'datetime';

    const TRIGGERED_BY_STAFF = 'triggeredByStaff';

    const LOCATION = 'location';

    const EVENT = 'event';

    const COMMENT = 'comment';

    const EMERGENCY_ALERT_TYPE = 'emergencyAlertType';

    const STATUS = 'status';

    const STATUS_MODIFIED_STAFF = 'statusModifiedStaff';

    const STATUS_MODIFIED_DATETIME = 'statusModifiedDatetime';

    protected $_resourceType = ResourceType::EMERGENCY_ALERT;

    /**
     * @param Query $query
     * @return EmergencyAlert[] | Collection
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

        $query->setResourceType(ResourceType::EMERGENCY_ALERT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmergencyAlert
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMERGENCY_ALERT, $id);
    }

    /**
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->getProperty('datetime');
    }

    /**
     * @param \DateTime $datetime
     */
    public function setDatetime(\DateTime $datetime = null)
    {
        $this->setProperty('datetime', $datetime);
    }

    /**
     * @return Staff
     */
    public function getTriggeredByStaff()
    {
        return $this->getProperty('triggeredByStaff');
    }

    /**
     * @param Staff $triggeredByStaff
     */
    public function setTriggeredByStaff(Staff $triggeredByStaff = null)
    {
        $this->setProperty('triggeredByStaff', $triggeredByStaff);
    }

    /**
     * @return Room
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param Room $location
     */
    public function setLocation(Room $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(ModelBase $event = null)
    {
        $this->setProperty('event', $event);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->getProperty('comment');
    }

    /**
     * @param string $comment
     */
    public function setComment($comment = null)
    {
        $this->setProperty('comment', $comment);
    }

    /**
     * @return EmergencyAlertType
     */
    public function getEmergencyAlertType()
    {
        return $this->getProperty('emergencyAlertType');
    }

    /**
     * @param EmergencyAlertType $emergencyAlertType
     */
    public function setEmergencyAlertType(EmergencyAlertType $emergencyAlertType = null)
    {
        $this->setProperty('emergencyAlertType', $emergencyAlertType);
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

    /**
     * @return Staff
     */
    public function getStatusModifiedStaff()
    {
        return $this->getProperty('statusModifiedStaff');
    }

    /**
     * @param Staff $statusModifiedStaff
     */
    public function setStatusModifiedStaff(Staff $statusModifiedStaff = null)
    {
        $this->setProperty('statusModifiedStaff', $statusModifiedStaff);
    }

    /**
     * @return \DateTime
     */
    public function getStatusModifiedDatetime()
    {
        return $this->getProperty('statusModifiedDatetime');
    }

    /**
     * @param \DateTime $statusModifiedDatetime
     */
    public function setStatusModifiedDatetime(\DateTime $statusModifiedDatetime = null)
    {
        $this->setProperty('statusModifiedDatetime', $statusModifiedDatetime);
    }


}
