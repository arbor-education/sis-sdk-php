<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SmsMessage extends ModelBase
{
    public const SMS_MESSAGE_DRAFT = 'smsMessageDraft';

    public const MESSAGE_TYPE = 'messageType';

    public const SENDER_NUMBER = 'senderNumber';

    public const SENDER = 'sender';

    public const RECIPIENT_NUMBER = 'recipientNumber';

    public const RECIPIENT = 'recipient';

    public const DRAFT_RECIPIENT = 'draftRecipient';

    public const MESSAGE_TEXT = 'messageText';

    public const SENT_DATETIME = 'sentDatetime';

    public const READ_DATETIME = 'readDatetime';

    public const RECEIVED_DATETIME = 'receivedDatetime';

    public const FAILED_DATETIME = 'failedDatetime';

    public const TOTAL_COST = 'totalCost';

    public const CREDITS_USED = 'creditsUsed';

    public const FREE = 'free';

    public const MESSAGE_PARTS = 'messageParts';

    public const RECIPIENT_NETWORK_CODE = 'recipientNetworkCode';

    public const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    protected $_resourceType = ResourceType::SMS_MESSAGE;

    /**
     * @param Query $query
     * @return SmsMessage[] | Collection
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

        $query->setResourceType(ResourceType::SMS_MESSAGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmsMessage
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMS_MESSAGE, $id);
    }

    /**
     * @return \Arbor\Model\SmsMessageDraft
     */
    public function getSmsMessageDraft()
    {
        return $this->getProperty('smsMessageDraft');
    }

    /**
     * @param \Arbor\Model\SmsMessageDraft $smsMessageDraft
     */
    public function setSmsMessageDraft(\Arbor\Model\SmsMessageDraft $smsMessageDraft = null)
    {
        $this->setProperty('smsMessageDraft', $smsMessageDraft);
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
     * @return ModelBase
     */
    public function getRecipient()
    {
        return $this->getProperty('recipient');
    }

    /**
     * @param ModelBase $recipient
     */
    public function setRecipient(\ModelBase $recipient = null)
    {
        $this->setProperty('recipient', $recipient);
    }

    /**
     * @return \Arbor\Model\MessageDraftRecipient
     */
    public function getDraftRecipient()
    {
        return $this->getProperty('draftRecipient');
    }

    /**
     * @param \Arbor\Model\MessageDraftRecipient $draftRecipient
     */
    public function setDraftRecipient(\Arbor\Model\MessageDraftRecipient $draftRecipient = null)
    {
        $this->setProperty('draftRecipient', $draftRecipient);
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
     * @return \DateTime
     */
    public function getSentDatetime()
    {
        return $this->getProperty('sentDatetime');
    }

    /**
     * @param \DateTime $sentDatetime
     */
    public function setSentDatetime(\DateTime $sentDatetime = null)
    {
        $this->setProperty('sentDatetime', $sentDatetime);
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
    public function getFailedDatetime()
    {
        return $this->getProperty('failedDatetime');
    }

    /**
     * @param \DateTime $failedDatetime
     */
    public function setFailedDatetime(\DateTime $failedDatetime = null)
    {
        $this->setProperty('failedDatetime', $failedDatetime);
    }

    /**
     * @return string
     */
    public function getTotalCost()
    {
        return $this->getProperty('totalCost');
    }

    /**
     * @param string $totalCost
     */
    public function setTotalCost(string $totalCost = null)
    {
        $this->setProperty('totalCost', $totalCost);
    }

    /**
     * @return float
     */
    public function getCreditsUsed()
    {
        return $this->getProperty('creditsUsed');
    }

    /**
     * @param float $creditsUsed
     */
    public function setCreditsUsed(float $creditsUsed = null)
    {
        $this->setProperty('creditsUsed', $creditsUsed);
    }

    /**
     * @return bool
     */
    public function getFree()
    {
        return $this->getProperty('free');
    }

    /**
     * @param bool $free
     */
    public function setFree(bool $free = null)
    {
        $this->setProperty('free', $free);
    }

    /**
     * @return int
     */
    public function getMessageParts()
    {
        return $this->getProperty('messageParts');
    }

    /**
     * @param int $messageParts
     */
    public function setMessageParts(int $messageParts = null)
    {
        $this->setProperty('messageParts', $messageParts);
    }

    /**
     * @return string
     */
    public function getRecipientNetworkCode()
    {
        return $this->getProperty('recipientNetworkCode');
    }

    /**
     * @param string $recipientNetworkCode
     */
    public function setRecipientNetworkCode(string $recipientNetworkCode = null)
    {
        $this->setProperty('recipientNetworkCode', $recipientNetworkCode);
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
