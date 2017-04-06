<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Meeting;

class MeetingNote extends ModelBase
{

    const MEETING = 'meeting';

    const NOTE_TEXT = 'noteText';

    const NOTE_CREATED_DATETIME = 'noteCreatedDatetime';

    const IS_SHARED_WITH_GUARDIANS = 'isSharedWithGuardians';

    protected $_resourceType = ResourceType::MEETING_NOTE;

    /**
     * @param \Arbor\Query\Query $query
     * @return MeetingNote[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("MeetingNote");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MeetingNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::MEETING_NOTE, $id);
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
     * @return string
     */
    public function getNoteText()
    {
        return $this->getProperty("noteText");
    }

    /**
     * @param string $noteText
     */
    public function setNoteText($noteText = null)
    {
        $this->setProperty("noteText", $noteText);
    }

    /**
     * @return \DateTime
     */
    public function getNoteCreatedDatetime()
    {
        return $this->getProperty("noteCreatedDatetime");
    }

    /**
     * @param \DateTime $noteCreatedDatetime
     */
    public function setNoteCreatedDatetime(\DateTime $noteCreatedDatetime = null)
    {
        $this->setProperty("noteCreatedDatetime", $noteCreatedDatetime);
    }

    /**
     * @return bool
     */
    public function getIsSharedWithGuardians()
    {
        return $this->getProperty("isSharedWithGuardians");
    }

    /**
     * @param bool $isSharedWithGuardians
     */
    public function setIsSharedWithGuardians($isSharedWithGuardians = null)
    {
        $this->setProperty("isSharedWithGuardians", $isSharedWithGuardians);
    }


}
