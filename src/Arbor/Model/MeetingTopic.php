<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MeetingTopic extends ModelBase
{
    public const MEETING = 'meeting';

    public const TOPIC = 'topic';

    protected $_resourceType = ResourceType::MEETING_TOPIC;

    /**
     * @param Query $query
     * @return MeetingTopic[] | Collection
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

        $query->setResourceType(ResourceType::MEETING_TOPIC);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MeetingTopic
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEETING_TOPIC, $id);
    }

    /**
     * @return \Arbor\Model\Meeting
     */
    public function getMeeting()
    {
        return $this->getProperty('meeting');
    }

    /**
     * @param \Arbor\Model\Meeting $meeting
     */
    public function setMeeting(\Arbor\Model\Meeting $meeting = null)
    {
        $this->setProperty('meeting', $meeting);
    }

    /**
     * @return ModelBase
     */
    public function getTopic()
    {
        return $this->getProperty('topic');
    }

    /**
     * @param ModelBase $topic
     */
    public function setTopic(\ModelBase $topic = null)
    {
        $this->setProperty('topic', $topic);
    }
}
