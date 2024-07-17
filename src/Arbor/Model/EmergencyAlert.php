<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmergencyAlert extends ModelBase
{
    public const DATETIME = 'datetime';

    public const TRIGGERED_BY_STAFF = 'triggeredByStaff';

    public const LOCATION = 'location';

    public const EVENT = 'event';

    public const COMMENT = 'comment';

    public const EMERGENCY_ALERT_TYPE = 'emergencyAlertType';

    public const STATUS = 'status';

    public const STATUS_MODIFIED_STAFF = 'statusModifiedStaff';

    public const STATUS_MODIFIED_DATETIME = 'statusModifiedDatetime';

    protected $_resourceType = ResourceType::EMERGENCY_ALERT;

    /**
     * @param Query $query
     * @return EmergencyAlert[] | Collection
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
     * @return \Arbor\Model\Staff
     */
    public function getTriggeredByStaff()
    {
        return $this->getProperty('triggeredByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $triggeredByStaff
     */
    public function setTriggeredByStaff(\Arbor\Model\Staff $triggeredByStaff = null)
    {
        $this->setProperty('triggeredByStaff', $triggeredByStaff);
    }

    /**
     * @return \Arbor\Model\Room
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param \Arbor\Model\Room $location
     */
    public function setLocation(\Arbor\Model\Room $location = null)
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
    public function setEvent(\ModelBase $event = null)
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
    public function setComment(string $comment = null)
    {
        $this->setProperty('comment', $comment);
    }

    /**
     * @return \Arbor\Model\EmergencyAlertType
     */
    public function getEmergencyAlertType()
    {
        return $this->getProperty('emergencyAlertType');
    }

    /**
     * @param \Arbor\Model\EmergencyAlertType $emergencyAlertType
     */
    public function setEmergencyAlertType(\Arbor\Model\EmergencyAlertType $emergencyAlertType = null)
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
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStatusModifiedStaff()
    {
        return $this->getProperty('statusModifiedStaff');
    }

    /**
     * @param \Arbor\Model\Staff $statusModifiedStaff
     */
    public function setStatusModifiedStaff(\Arbor\Model\Staff $statusModifiedStaff = null)
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
