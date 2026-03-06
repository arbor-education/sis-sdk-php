<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailRecipient extends ModelBase
{
    public const EMAIL = 'email';

    public const RECIPIENT_TYPE = 'recipientType';

    public const RECIPIENT_NAME = 'recipientName';

    public const RECIPIENT_RAW_EMAIL = 'recipientRawEmail';

    public const EMAIL_ADDRESS = 'emailAddress';

    public const RECIPIENT = 'recipient';

    public const DRAFT_RECIPIENT = 'draftRecipient';

    public const RECIPIENT_INDEX = 'recipientIndex';

    public const RECEIVED_DATETIME = 'receivedDatetime';

    public const FAILED_DATETIME = 'failedDatetime';

    protected $_resourceType = ResourceType::EMAIL_RECIPIENT;

    /**
     * @param Query $query
     * @return EmailRecipient[] | Collection
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
     * @return \Arbor\Model\Email
     */
    public function getEmail()
    {
        return $this->getProperty('email');
    }

    /**
     * @param \Arbor\Model\Email $email
     */
    public function setEmail(\Arbor\Model\Email $email = null)
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
    public function setRecipientType(string $recipientType = null)
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
    public function setRecipientName(string $recipientName = null)
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
    public function setRecipientRawEmail(string $recipientRawEmail = null)
    {
        $this->setProperty('recipientRawEmail', $recipientRawEmail);
    }

    /**
     * @return \Arbor\Model\EmailAddress
     */
    public function getEmailAddress()
    {
        return $this->getProperty('emailAddress');
    }

    /**
     * @param \Arbor\Model\EmailAddress $emailAddress
     */
    public function setEmailAddress(\Arbor\Model\EmailAddress $emailAddress = null)
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
     * @return int
     */
    public function getRecipientIndex()
    {
        return $this->getProperty('recipientIndex');
    }

    /**
     * @param int $recipientIndex
     */
    public function setRecipientIndex(int $recipientIndex = null)
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
