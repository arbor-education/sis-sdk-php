<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InboundSmsMessage extends ModelBase
{
    public const MESSAGE_TYPE = 'messageType';

    public const SENDER_NUMBER = 'senderNumber';

    public const SENDER = 'sender';

    public const RECIPIENT_NUMBER = 'recipientNumber';

    public const RECIPIENT = 'recipient';

    public const MESSAGE_TEXT = 'messageText';

    public const MESSAGE_IDENTIFIER = 'messageIdentifier';

    public const RECEIVED_DATETIME = 'receivedDatetime';

    public const READ_DATETIME = 'readDatetime';

    public const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    protected $_resourceType = ResourceType::INBOUND_SMS_MESSAGE;

    /**
     * @param Query $query
     * @return InboundSmsMessage[] | Collection
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

        $query->setResourceType(ResourceType::INBOUND_SMS_MESSAGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InboundSmsMessage
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INBOUND_SMS_MESSAGE, $id);
    }

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->getProperty('messageType');
    }

    /**
     * @param string $messageType
     */
    public function setMessageType(string $messageType = null)
    {
        $this->setProperty('messageType', $messageType);
    }

    /**
     * @return string
     */
    public function getSenderNumber()
    {
        return $this->getProperty('senderNumber');
    }

    /**
     * @param string $senderNumber
     */
    public function setSenderNumber(string $senderNumber = null)
    {
        $this->setProperty('senderNumber', $senderNumber);
    }

    /**
     * @return ModelBase
     */
    public function getSender()
    {
        return $this->getProperty('sender');
    }

    /**
     * @param ModelBase $sender
     */
    public function setSender(\ModelBase $sender = null)
    {
        $this->setProperty('sender', $sender);
    }

    /**
     * @return string
     */
    public function getRecipientNumber()
    {
        return $this->getProperty('recipientNumber');
    }

    /**
     * @param string $recipientNumber
     */
    public function setRecipientNumber(string $recipientNumber = null)
    {
        $this->setProperty('recipientNumber', $recipientNumber);
    }

    /**
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getRecipient()
    {
        return $this->getProperty('recipient');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $recipient
     */
    public function setRecipient(\Arbor\Model\EducationalInstitution $recipient = null)
    {
        $this->setProperty('recipient', $recipient);
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->getProperty('messageText');
    }

    /**
     * @param string $messageText
     */
    public function setMessageText(string $messageText = null)
    {
        $this->setProperty('messageText', $messageText);
    }

    /**
     * @return string
     */
    public function getMessageIdentifier()
    {
        return $this->getProperty('messageIdentifier');
    }

    /**
     * @param string $messageIdentifier
     */
    public function setMessageIdentifier(string $messageIdentifier = null)
    {
        $this->setProperty('messageIdentifier', $messageIdentifier);
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDatetime()
    {
        return $this->getProperty('receivedDatetime');
    }

    /**
     * @param \DateTime $receivedDatetime
     */
    public function setReceivedDatetime(\DateTime $receivedDatetime = null)
    {
        $this->setProperty('receivedDatetime', $receivedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getReadDatetime()
    {
        return $this->getProperty('readDatetime');
    }

    /**
     * @param \DateTime $readDatetime
     */
    public function setReadDatetime(\DateTime $readDatetime = null)
    {
        $this->setProperty('readDatetime', $readDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getActionRequiredByDatetime()
    {
        return $this->getProperty('actionRequiredByDatetime');
    }

    /**
     * @param \DateTime $actionRequiredByDatetime
     */
    public function setActionRequiredByDatetime(\DateTime $actionRequiredByDatetime = null)
    {
        $this->setProperty('actionRequiredByDatetime', $actionRequiredByDatetime);
    }
}
