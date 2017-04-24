<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class EventParticipant extends ModelBase
{
    const EVENT = 'event';

    const PARTICIPANT = 'participant';

    const ATTENDANCE_REQUIREMENT = 'attendanceRequirement';

    protected $_resourceType = ResourceType::EVENT_PARTICIPANT;

    /**
     * @param \Arbor\Query\Query $query
     * @return EventParticipant[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("EventParticipant");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EventParticipant
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::EVENT_PARTICIPANT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty("event");
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(ModelBase $event = null)
    {
        $this->setProperty("event", $event);
    }

    /**
     * @return ModelBase
     */
    public function getParticipant()
    {
        return $this->getProperty("participant");
    }

    /**
     * @param ModelBase $participant
     */
    public function setParticipant(ModelBase $participant = null)
    {
        $this->setProperty("participant", $participant);
    }

    /**
     * @return string
     */
    public function getAttendanceRequirement()
    {
        return $this->getProperty("attendanceRequirement");
    }

    /**
     * @param string $attendanceRequirement
     */
    public function setAttendanceRequirement($attendanceRequirement = null)
    {
        $this->setProperty("attendanceRequirement", $attendanceRequirement);
    }
}
