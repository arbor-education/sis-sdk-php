<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EventParticipant extends ModelBase
{
    public const EVENT = 'event';

    public const PARTICIPANT = 'participant';

    public const ATTENDANCE_REQUIREMENT = 'attendanceRequirement';

    protected $_resourceType = ResourceType::EVENT_PARTICIPANT;

    /**
     * @param Query $query
     * @return EventParticipant[] | Collection
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

        $query->setResourceType(ResourceType::EVENT_PARTICIPANT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EventParticipant
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EVENT_PARTICIPANT, $id);
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
     * @return ModelBase
     */
    public function getParticipant()
    {
        return $this->getProperty('participant');
    }

    /**
     * @param ModelBase $participant
     */
    public function setParticipant(\ModelBase $participant = null)
    {
        $this->setProperty('participant', $participant);
    }

    /**
     * @return string
     */
    public function getAttendanceRequirement()
    {
        return $this->getProperty('attendanceRequirement');
    }

    /**
     * @param string $attendanceRequirement
     */
    public function setAttendanceRequirement(string $attendanceRequirement = null)
    {
        $this->setProperty('attendanceRequirement', $attendanceRequirement);
    }
}
