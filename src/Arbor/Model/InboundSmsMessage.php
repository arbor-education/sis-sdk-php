<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InboundSmsMessage extends ModelBase
{

    const MESSAGE_TYPE = 'messageType';

    const SENDER_NUMBER = 'senderNumber';

    const SENDER = 'sender';

    const RECIPIENT_NUMBER = 'recipientNumber';

    const RECIPIENT = 'recipient';

    const MESSAGE_TEXT = 'messageText';

    const MESSAGE_IDENTIFIER = 'messageIdentifier';

    const RECEIVED_DATETIME = 'receivedDatetime';

    const READ_DATETIME = 'readDatetime';

    const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    protected $_resourceType = ResourceType::INBOUND_SMS_MESSAGE;

    /**
     * @param Query $query
     * @return InboundSmsMessage[] | Collection
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
    public function setMessageType($messageType = null)
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
    public function setSenderNumber($senderNumber = null)
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
    public function setSender(ModelBase $sender = null)
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
    public function setRecipientNumber($recipientNumber = null)
    {
        $this->setProperty('recipientNumber', $recipientNumber);
    }

    /**
     * @return EducationalInstitution
     */
    public function getRecipient()
    {
        return $this->getProperty('recipient');
    }

    /**
     * @param EducationalInstitution $recipient
     */
    public function setRecipient(EducationalInstitution $recipient = null)
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
    public function setMessageText($messageText = null)
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
    public function setMessageIdentifier($messageIdentifier = null)
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
