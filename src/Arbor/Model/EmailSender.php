<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailSender extends \ModelBase
{
    public const EMAIL = 'email';

    public const SENDER_TYPE = 'senderType';

    public const SENDER_NAME = 'senderName';

    public const SENDER_RAW_EMAIL = 'senderRawEmail';

    public const EMAIL_ADDRESS = 'emailAddress';

    public const SENDER = 'sender';

    public const SENDER_INDEX = 'senderIndex';

    protected $_resourceType = ResourceType::EMAIL_SENDER;

    /**
     * @param Query $query
     * @return EmailSender[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::EMAIL_SENDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailSender
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_SENDER, $id);
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
    public function setEmail(\Email $email = null)
    {
        $this->setProperty('email', $email);
    }

    /**
     * @return string
     */
    public function getSenderType()
    {
        return $this->getProperty('senderType');
    }

    /**
     * @param string $senderType
     */
    public function setSenderType(string $senderType = null)
    {
        $this->setProperty('senderType', $senderType);
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
    public function setSenderName(string $senderName = null)
    {
        $this->setProperty('senderName', $senderName);
    }

    /**
     * @return string
     */
    public function getSenderRawEmail()
    {
        return $this->getProperty('senderRawEmail');
    }

    /**
     * @param string $senderRawEmail
     */
    public function setSenderRawEmail(string $senderRawEmail = null)
    {
        $this->setProperty('senderRawEmail', $senderRawEmail);
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
    public function setEmailAddress(\EmailAddress $emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
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
     * @return int
     */
    public function getSenderIndex()
    {
        return $this->getProperty('senderIndex');
    }

    /**
     * @param int $senderIndex
     */
    public function setSenderIndex(int $senderIndex = null)
    {
        $this->setProperty('senderIndex', $senderIndex);
    }
}
