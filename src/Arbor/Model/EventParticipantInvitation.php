<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EventParticipantInvitation extends ModelBase
{
    public const EVENT_PARTICIPANT = 'eventParticipant';

    public const INVITEE = 'invitee';

    public const INVITATION_DATETIME = 'invitationDatetime';

    public const INVITATION_STATUS = 'invitationStatus';

    public const STATUS_CHANGED_DATETIME = 'statusChangedDatetime';

    public const INVITATION_MESSAGE = 'invitationMessage';

    public const INVITATION_REPLY = 'invitationReply';

    protected $_resourceType = ResourceType::EVENT_PARTICIPANT_INVITATION;

    /**
     * @param Query $query
     * @return EventParticipantInvitation[] | Collection
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

        $query->setResourceType(ResourceType::EVENT_PARTICIPANT_INVITATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EventParticipantInvitation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EVENT_PARTICIPANT_INVITATION, $id);
    }

    /**
     * @return \Arbor\Model\EventParticipant
     */
    public function getEventParticipant()
    {
        return $this->getProperty('eventParticipant');
    }

    /**
     * @param \Arbor\Model\EventParticipant $eventParticipant
     */
    public function setEventParticipant(\Arbor\Model\EventParticipant $eventParticipant = null)
    {
        $this->setProperty('eventParticipant', $eventParticipant);
    }

    /**
     * @return ModelBase
     */
    public function getInvitee()
    {
        return $this->getProperty('invitee');
    }

    /**
     * @param ModelBase $invitee
     */
    public function setInvitee(\ModelBase $invitee = null)
    {
        $this->setProperty('invitee', $invitee);
    }

    /**
     * @return \DateTime
     */
    public function getInvitationDatetime()
    {
        return $this->getProperty('invitationDatetime');
    }

    /**
     * @param \DateTime $invitationDatetime
     */
    public function setInvitationDatetime(\DateTime $invitationDatetime = null)
    {
        $this->setProperty('invitationDatetime', $invitationDatetime);
    }

    /**
     * @return string
     */
    public function getInvitationStatus()
    {
        return $this->getProperty('invitationStatus');
    }

    /**
     * @param string $invitationStatus
     */
    public function setInvitationStatus(string $invitationStatus = null)
    {
        $this->setProperty('invitationStatus', $invitationStatus);
    }

    /**
     * @return \DateTime
     */
    public function getStatusChangedDatetime()
    {
        return $this->getProperty('statusChangedDatetime');
    }

    /**
     * @param \DateTime $statusChangedDatetime
     */
    public function setStatusChangedDatetime(\DateTime $statusChangedDatetime = null)
    {
        $this->setProperty('statusChangedDatetime', $statusChangedDatetime);
    }

    /**
     * @return string
     */
    public function getInvitationMessage()
    {
        return $this->getProperty('invitationMessage');
    }

    /**
     * @param string $invitationMessage
     */
    public function setInvitationMessage(string $invitationMessage = null)
    {
        $this->setProperty('invitationMessage', $invitationMessage);
    }

    /**
     * @return string
     */
    public function getInvitationReply()
    {
        return $this->getProperty('invitationReply');
    }

    /**
     * @param string $invitationReply
     */
    public function setInvitationReply(string $invitationReply = null)
    {
        $this->setProperty('invitationReply', $invitationReply);
    }
}
