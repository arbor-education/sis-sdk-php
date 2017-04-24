<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\RepeatingSchoolEvent;

class RepeatingSchoolEventParticipant extends ModelBase
{
    const REPEATING_SCHOOL_EVENT = 'repeatingSchoolEvent';

    const PARTICIPANT = 'participant';

    protected $_resourceType = ResourceType::REPEATING_SCHOOL_EVENT_PARTICIPANT;

    /**
     * @param \Arbor\Query\Query $query
     * @return RepeatingSchoolEventParticipant[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("RepeatingSchoolEventParticipant");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return RepeatingSchoolEventParticipant
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::REPEATING_SCHOOL_EVENT_PARTICIPANT, $id);
    }

    /**
     * @return RepeatingSchoolEvent
     */
    public function getRepeatingSchoolEvent()
    {
        return $this->getProperty("repeatingSchoolEvent");
    }

    /**
     * @param RepeatingSchoolEvent $repeatingSchoolEvent
     */
    public function setRepeatingSchoolEvent(RepeatingSchoolEvent $repeatingSchoolEvent = null)
    {
        $this->setProperty("repeatingSchoolEvent", $repeatingSchoolEvent);
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
}
