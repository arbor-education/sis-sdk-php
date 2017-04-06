<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Meeting;

class MeetingTopic extends ModelBase
{

    const MEETING = 'meeting';

    const TOPIC = 'topic';

    protected $_resourceType = ResourceType::MEETING_TOPIC;

    /**
     * @param \Arbor\Query\Query $query
     * @return MeetingTopic[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("MeetingTopic");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MeetingTopic
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::MEETING_TOPIC, $id);
    }

    /**
     * @return Meeting
     */
    public function getMeeting()
    {
        return $this->getProperty("meeting");
    }

    /**
     * @param Meeting $meeting
     */
    public function setMeeting(Meeting $meeting = null)
    {
        $this->setProperty("meeting", $meeting);
    }

    /**
     * @return ModelBase
     */
    public function getTopic()
    {
        return $this->getProperty("topic");
    }

    /**
     * @param ModelBase $topic
     */
    public function setTopic(ModelBase $topic = null)
    {
        $this->setProperty("topic", $topic);
    }


}
