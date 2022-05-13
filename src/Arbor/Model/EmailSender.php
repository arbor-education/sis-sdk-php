<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailSender extends ModelBase
{
    const EMAIL = 'email';

    const SENDER_TYPE = 'senderType';

    const SENDER_NAME = 'senderName';

    const SENDER_RAW_EMAIL = 'senderRawEmail';

    const EMAIL_ADDRESS = 'emailAddress';

    const SENDER = 'sender';

    const SENDER_INDEX = 'senderIndex';

    protected $_resourceType = ResourceType::EMAIL_SENDER;

    /**
     * @param Query $query
     * @return EmailSender[] | Collection
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
    public function setEmail(Email $email = null)
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
    public function setSenderType($senderType = null)
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
    public function setSenderName($senderName = null)
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
    public function setSenderRawEmail($senderRawEmail = null)
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
    public function setEmailAddress(EmailAddress $emailAddress = null)
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
    public function setSender(ModelBase $sender = null)
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
    public function setSenderIndex($senderIndex = null)
    {
        $this->setProperty('senderIndex', $senderIndex);
    }

}
