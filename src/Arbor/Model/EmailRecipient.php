<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailRecipient extends ModelBase
{

    const EMAIL = 'email';

    const RECIPIENT_TYPE = 'recipientType';

    const RECIPIENT_NAME = 'recipientName';

    const RECIPIENT_RAW_EMAIL = 'recipientRawEmail';

    const EMAIL_ADDRESS = 'emailAddress';

    const RECIPIENT = 'recipient';

    const DRAFT_RECIPIENT = 'draftRecipient';

    const RECIPIENT_INDEX = 'recipientIndex';

    const RECEIVED_DATETIME = 'receivedDatetime';

    const FAILED_DATETIME = 'failedDatetime';

    protected $_resourceType = ResourceType::EMAIL_RECIPIENT;

    /**
     * @param Query $query
     * @return EmailRecipient[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_RECIPIENT, $id);
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->getProperty('email');
    }

    /**
     * @param Email $email
     */
    public function setEmail(Email $email = null)
    {
        $this->setProperty('email', $email);
    }

    /**
     * @return string
     */
    public function getRecipientType()
    {
        return $this->getProperty('recipientType');
    }

    /**
     * @param string $recipientType
     */
    public function setRecipientType($recipientType = null)
    {
        $this->setProperty('recipientType', $recipientType);
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
     * @return string
     */
    public function getRecipientRawEmail()
    {
        return $this->getProperty('recipientRawEmail');
    }

    /**
     * @param string $recipientRawEmail
     */
    public function setRecipientRawEmail($recipientRawEmail = null)
    {
        $this->setProperty('recipientRawEmail', $recipientRawEmail);
    }

    /**
     * @return EmailAddress
     */
    public function getEmailAddress()
    {
        return $this->getProperty('emailAddress');
    }

    /**
     * @param EmailAddress $emailAddress
     */
    public function setEmailAddress(EmailAddress $emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
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
     * @return int
     */
    public function getRecipientIndex()
    {
        return $this->getProperty('recipientIndex');
    }

    /**
     * @param int $recipientIndex
     */
    public function setRecipientIndex($recipientIndex = null)
    {
        $this->setProperty('recipientIndex', $recipientIndex);
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


}
