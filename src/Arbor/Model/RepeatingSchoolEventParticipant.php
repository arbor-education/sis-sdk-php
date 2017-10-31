<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RepeatingSchoolEventParticipant extends ModelBase
{
    const REPEATING_SCHOOL_EVENT = 'repeatingSchoolEvent';

    const PARTICIPANT = 'participant';

    protected $_resourceType = ResourceType::REPEATING_SCHOOL_EVENT_PARTICIPANT;

    /**
     * @param Query $query
     * @return RepeatingSchoolEventParticipant[] | Collection
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

        $query->setResourceType(ResourceType::REPEATING_SCHOOL_EVENT_PARTICIPANT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RepeatingSchoolEventParticipant
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REPEATING_SCHOOL_EVENT_PARTICIPANT, $id);
    }

    /**
     * @return RepeatingSchoolEvent
     */
    public function getRepeatingSchoolEvent()
    {
        return $this->getProperty('repeatingSchoolEvent');
    }

    /**
     * @param RepeatingSchoolEvent $repeatingSchoolEvent
     */
    public function setRepeatingSchoolEvent(RepeatingSchoolEvent $repeatingSchoolEvent = null)
    {
        $this->setProperty('repeatingSchoolEvent', $repeatingSchoolEvent);
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
    public function setParticipant(ModelBase $participant = null)
    {
        $this->setProperty('participant', $participant);
    }
}
