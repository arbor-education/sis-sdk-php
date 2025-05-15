<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Email extends ModelBase
{
    public const EMAIL_MAILBOX = 'emailMailbox';

    public const EMAIL_DRAFT = 'emailDraft';

    public const UID = 'uid';

    public const UID_VALIDITY = 'uidValidity';

    public const MESSAGE_ID = 'messageId';

    public const SUBJECT = 'subject';

    public const ORIGINATION_DATETIME = 'originationDatetime';

    public const SENDING_STARTED_DATETIME = 'sendingStartedDatetime';

    public const SENT_DATETIME = 'sentDatetime';

    public const RECEIVED_DATETIME = 'receivedDatetime';

    public const FAILED_DATETIME = 'failedDatetime';

    public const TEXT_PART = 'textPart';

    public const HTML_PART = 'htmlPart';

    public const READ_DATETIME = 'readDatetime';

    public const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    protected $_resourceType = ResourceType::EMAIL;

    /**
     * @param Query $query
     * @return Email[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Email
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL, $id);
    }

    /**
     * @return \Arbor\Model\EmailMailbox
     */
    public function getEmailMailbox()
    {
        return $this->getProperty('emailMailbox');
    }

    /**
     * @param \Arbor\Model\EmailMailbox $emailMailbox
     */
    public function setEmailMailbox(\Arbor\Model\EmailMailbox $emailMailbox = null)
    {
        $this->setProperty('emailMailbox', $emailMailbox);
    }

    /**
     * @return \Arbor\Model\EmailDraft
     */
    public function getEmailDraft()
    {
        return $this->getProperty('emailDraft');
    }

    /**
     * @param \Arbor\Model\EmailDraft $emailDraft
     */
    public function setEmailDraft(\Arbor\Model\EmailDraft $emailDraft = null)
    {
        $this->setProperty('emailDraft', $emailDraft);
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->getProperty('uid');
    }

    /**
     * @param int $uid
     */
    public function setUid(int $uid = null)
    {
        $this->setProperty('uid', $uid);
    }

    /**
     * @return int
     */
    public function getUidValidity()
    {
        return $this->getProperty('uidValidity');
    }

    /**
     * @param int $uidValidity
     */
    public function setUidValidity(int $uidValidity = null)
    {
        $this->setProperty('uidValidity', $uidValidity);
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->getProperty('messageId');
    }

    /**
     * @param string $messageId
     */
    public function setMessageId(string $messageId = null)
    {
        $this->setProperty('messageId', $messageId);
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return \DateTime
     */
    public function getOriginationDatetime()
    {
        return $this->getProperty('originationDatetime');
    }

    /**
     * @param \DateTime $originationDatetime
     */
    public function setOriginationDatetime(\DateTime $originationDatetime = null)
    {
        $this->setProperty('originationDatetime', $originationDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSendingStartedDatetime()
    {
        return $this->getProperty('sendingStartedDatetime');
    }

    /**
     * @param \DateTime $sendingStartedDatetime
     */
    public function setSendingStartedDatetime(\DateTime $sendingStartedDatetime = null)
    {
        $this->setProperty('sendingStartedDatetime', $sendingStartedDatetime);
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
     * @return \Arbor\Model\EmailPart
     */
    public function getTextPart()
    {
        return $this->getProperty('textPart');
    }

    /**
     * @param \Arbor\Model\EmailPart $textPart
     */
    public function setTextPart(\Arbor\Model\EmailPart $textPart = null)
    {
        $this->setProperty('textPart', $textPart);
    }

    /**
     * @return \Arbor\Model\EmailPart
     */
    public function getHtmlPart()
    {
        return $this->getProperty('htmlPart');
    }

    /**
     * @param \Arbor\Model\EmailPart $htmlPart
     */
    public function setHtmlPart(\Arbor\Model\EmailPart $htmlPart = null)
    {
        $this->setProperty('htmlPart', $htmlPart);
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
