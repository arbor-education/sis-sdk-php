<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Letter extends ModelBase
{
    const LETTER_DATE = 'letterDate';

    const RECEIVED_DATE = 'receivedDate';

    const PREPARED_DATETIME = 'preparedDatetime';

    const SENT_DATETIME = 'sentDatetime';

    const SENDER_NAME = 'senderName';

    const SENDER = 'sender';

    const DRAFT_RECIPIENT = 'draftRecipient';

    const RECIPIENT_NAME = 'recipientName';

    const RECIPIENT = 'recipient';

    const SUMMARY = 'summary';

    const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    protected $_resourceType = ResourceType::LETTER;

    /**
     * @param Query $query
     * @return Letter[] | Collection
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

        $query->setResourceType(ResourceType::LETTER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Letter
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LETTER, $id);
    }

    /**
     * @return \DateTime
     */
    public function getLetterDate()
    {
        return $this->getProperty('letterDate');
    }

    /**
     * @param \DateTime $letterDate
     */
    public function setLetterDate(\DateTime $letterDate = null)
    {
        $this->setProperty('letterDate', $letterDate);
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->getProperty('receivedDate');
    }

    /**
     * @param \DateTime $receivedDate
     */
    public function setReceivedDate(\DateTime $receivedDate = null)
    {
        $this->setProperty('receivedDate', $receivedDate);
    }

    /**
     * @return \DateTime
     */
    public function getPreparedDatetime()
    {
        return $this->getProperty('preparedDatetime');
    }

    /**
     * @param \DateTime $preparedDatetime
     */
    public function setPreparedDatetime(\DateTime $preparedDatetime = null)
    {
        $this->setProperty('preparedDatetime', $preparedDatetime);
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
     * @return string
     */
    public function getSenderName()
    {
        return $this->getProperty('senderName');
    }

    /**
     * @param string $senderName
     */
    public function setSenderName($senderName = null)
    {
        $this->setProperty('senderName', $senderName);
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
     * @return MessageDraftRecipient
     */
    public function getDraftRecipient()
    {
        return $this->getProperty('draftRecipient');
    }

    /**
     * @param MessageDraftRecipient $draftRecipient
     */
    public function setDraftRecipient(MessageDraftRecipient $draftRecipient = null)
    {
        $this->setProperty('draftRecipient', $draftRecipient);
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
        return $this->getProperty('recipientName');
    }

    /**
     * @param string $recipientName
     */
    public function setRecipientName($recipientName = null)
    {
        $this->setProperty('recipientName', $recipientName);
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
    public function setRecipient(ModelBase $recipient = null)
    {
        $this->setProperty('recipient', $recipient);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty('summary');
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary = null)
    {
        $this->setProperty('summary', $summary);
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
