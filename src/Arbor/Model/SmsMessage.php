<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\SmsMessageDraft;
use \Arbor\Model\MessageDraftRecipient;

class SmsMessage extends ModelBase
{

    const SMS_MESSAGE_DRAFT = 'smsMessageDraft';

    const MESSAGE_TYPE = 'messageType';

    const SENDER_NUMBER = 'senderNumber';

    const SENDER = 'sender';

    const RECIPIENT_NUMBER = 'recipientNumber';

    const RECIPIENT = 'recipient';

    const DRAFT_RECIPIENT = 'draftRecipient';

    const MESSAGE_TEXT = 'messageText';

    const SENT_DATETIME = 'sentDatetime';

    const READ_DATETIME = 'readDatetime';

    const RECEIVED_DATETIME = 'receivedDatetime';

    const FAILED_DATETIME = 'failedDatetime';

    const TOTAL_COST = 'totalCost';

    const CREDITS_USED = 'creditsUsed';

    const FREE = 'free';

    const MESSAGE_PARTS = 'messageParts';

    const RECIPIENT_NETWORK_CODE = 'recipientNetworkCode';

    const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    protected $_resourceType = ResourceType::SMS_MESSAGE;

    /**
     * @param \Arbor\Query\Query $query
     * @return SmsMessage[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("SmsMessage");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SmsMessage
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::SMS_MESSAGE, $id);
    }

    /**
     * @return SmsMessageDraft
     */
    public function getSmsMessageDraft()
    {
        return $this->getProperty("smsMessageDraft");
    }

    /**
     * @param SmsMessageDraft $smsMessageDraft
     */
    public function setSmsMessageDraft(SmsMessageDraft $smsMessageDraft = null)
    {
        $this->setProperty("smsMessageDraft", $smsMessageDraft);
    }

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->getProperty("messageType");
    }

    /**
     * @param string $messageType
     */
    public function setMessageType($messageType = null)
    {
        $this->setProperty("messageType", $messageType);
    }

    /**
     * @return string
     */
    public function getSenderNumber()
    {
        return $this->getProperty("senderNumber");
    }

    /**
     * @param string $senderNumber
     */
    public function setSenderNumber($senderNumber = null)
    {
        $this->setProperty("senderNumber", $senderNumber);
    }

    /**
     * @return ModelBase
     */
    public function getSender()
    {
        return $this->getProperty("sender");
    }

    /**
     * @param ModelBase $sender
     */
    public function setSender(ModelBase $sender = null)
    {
        $this->setProperty("sender", $sender);
    }

    /**
     * @return string
     */
    public function getRecipientNumber()
    {
        return $this->getProperty("recipientNumber");
    }

    /**
     * @param string $recipientNumber
     */
    public function setRecipientNumber($recipientNumber = null)
    {
        $this->setProperty("recipientNumber", $recipientNumber);
    }

    /**
     * @return ModelBase
     */
    public function getRecipient()
    {
        return $this->getProperty("recipient");
    }

    /**
     * @param ModelBase $recipient
     */
    public function setRecipient(ModelBase $recipient = null)
    {
        $this->setProperty("recipient", $recipient);
    }

    /**
     * @return MessageDraftRecipient
     */
    public function getDraftRecipient()
    {
        return $this->getProperty("draftRecipient");
    }

    /**
     * @param MessageDraftRecipient $draftRecipient
     */
    public function setDraftRecipient(MessageDraftRecipient $draftRecipient = null)
    {
        $this->setProperty("draftRecipient", $draftRecipient);
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->getProperty("messageText");
    }

    /**
     * @param string $messageText
     */
    public function setMessageText($messageText = null)
    {
        $this->setProperty("messageText", $messageText);
    }

    /**
     * @return \DateTime
     */
    public function getSentDatetime()
    {
        return $this->getProperty("sentDatetime");
    }

    /**
     * @param \DateTime $sentDatetime
     */
    public function setSentDatetime(\DateTime $sentDatetime = null)
    {
        $this->setProperty("sentDatetime", $sentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getReadDatetime()
    {
        return $this->getProperty("readDatetime");
    }

    /**
     * @param \DateTime $readDatetime
     */
    public function setReadDatetime(\DateTime $readDatetime = null)
    {
        $this->setProperty("readDatetime", $readDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDatetime()
    {
        return $this->getProperty("receivedDatetime");
    }

    /**
     * @param \DateTime $receivedDatetime
     */
    public function setReceivedDatetime(\DateTime $receivedDatetime = null)
    {
        $this->setProperty("receivedDatetime", $receivedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getFailedDatetime()
    {
        return $this->getProperty("failedDatetime");
    }

    /**
     * @param \DateTime $failedDatetime
     */
    public function setFailedDatetime(\DateTime $failedDatetime = null)
    {
        $this->setProperty("failedDatetime", $failedDatetime);
    }

    /**
     * @return string
     */
    public function getTotalCost()
    {
        return $this->getProperty("totalCost");
    }

    /**
     * @param string $totalCost
     */
    public function setTotalCost($totalCost = null)
    {
        $this->setProperty("totalCost", $totalCost);
    }

    /**
     * @return float
     */
    public function getCreditsUsed()
    {
        return $this->getProperty("creditsUsed");
    }

    /**
     * @param float $creditsUsed
     */
    public function setCreditsUsed($creditsUsed = null)
    {
        $this->setProperty("creditsUsed", $creditsUsed);
    }

    /**
     * @return bool
     */
    public function getFree()
    {
        return $this->getProperty("free");
    }

    /**
     * @param bool $free
     */
    public function setFree($free = null)
    {
        $this->setProperty("free", $free);
    }

    /**
     * @return int
     */
    public function getMessageParts()
    {
        return $this->getProperty("messageParts");
    }

    /**
     * @param int $messageParts
     */
    public function setMessageParts($messageParts = null)
    {
        $this->setProperty("messageParts", $messageParts);
    }

    /**
     * @return string
     */
    public function getRecipientNetworkCode()
    {
        return $this->getProperty("recipientNetworkCode");
    }

    /**
     * @param string $recipientNetworkCode
     */
    public function setRecipientNetworkCode($recipientNetworkCode = null)
    {
        $this->setProperty("recipientNetworkCode", $recipientNetworkCode);
    }

    /**
     * @return \DateTime
     */
    public function getActionRequiredByDatetime()
    {
        return $this->getProperty("actionRequiredByDatetime");
    }

    /**
     * @param \DateTime $actionRequiredByDatetime
     */
    public function setActionRequiredByDatetime(\DateTime $actionRequiredByDatetime = null)
    {
        $this->setProperty("actionRequiredByDatetime", $actionRequiredByDatetime);
    }


}
