<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailDraft extends ModelBase
{
    public const SENDER = 'sender';

    public const SUBJECT = 'subject';

    public const BODY = 'body';

    public const CUSTOM_REPORT = 'customReport';

    public const COMBINE_MESSAGES_TO_SAME_RECIPIENT = 'combineMessagesToSameRecipient';

    public const COMBINE_MESSAGES_TO_SAME_HOUSEHOLD = 'combineMessagesToSameHousehold';

    public const SENDING_QUEUED_DATETIME = 'sendingQueuedDatetime';

    public const SENDING_STARTED_DATETIME = 'sendingStartedDatetime';

    public const RECIPIENTS_RESOLVED_DATETIME = 'recipientsResolvedDatetime';

    public const SENDING_COMPLETED_DATETIME = 'sendingCompletedDatetime';

    public const CONTEXT = 'context';

    protected $_resourceType = ResourceType::EMAIL_DRAFT;

    /**
     * @param Query $query
     * @return EmailDraft[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_DRAFT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailDraft
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_DRAFT, $id);
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
     * @return string
     */
    public function getBody()
    {
        return $this->getProperty('body');
    }

    /**
     * @param string $body
     */
    public function setBody(string $body = null)
    {
        $this->setProperty('body', $body);
    }

    /**
     * @return \Arbor\Model\CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param \Arbor\Model\CustomReport $customReport
     */
    public function setCustomReport(\Arbor\Model\CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return bool
     */
    public function getCombineMessagesToSameRecipient()
    {
        return $this->getProperty('combineMessagesToSameRecipient');
    }

    /**
     * @param bool $combineMessagesToSameRecipient
     */
    public function setCombineMessagesToSameRecipient(bool $combineMessagesToSameRecipient = null)
    {
        $this->setProperty('combineMessagesToSameRecipient', $combineMessagesToSameRecipient);
    }

    /**
     * @return bool
     */
    public function getCombineMessagesToSameHousehold()
    {
        return $this->getProperty('combineMessagesToSameHousehold');
    }

    /**
     * @param bool $combineMessagesToSameHousehold
     */
    public function setCombineMessagesToSameHousehold(bool $combineMessagesToSameHousehold = null)
    {
        $this->setProperty('combineMessagesToSameHousehold', $combineMessagesToSameHousehold);
    }

    /**
     * @return \DateTime
     */
    public function getSendingQueuedDatetime()
    {
        return $this->getProperty('sendingQueuedDatetime');
    }

    /**
     * @param \DateTime $sendingQueuedDatetime
     */
    public function setSendingQueuedDatetime(\DateTime $sendingQueuedDatetime = null)
    {
        $this->setProperty('sendingQueuedDatetime', $sendingQueuedDatetime);
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
    public function getRecipientsResolvedDatetime()
    {
        return $this->getProperty('recipientsResolvedDatetime');
    }

    /**
     * @param \DateTime $recipientsResolvedDatetime
     */
    public function setRecipientsResolvedDatetime(\DateTime $recipientsResolvedDatetime = null)
    {
        $this->setProperty('recipientsResolvedDatetime', $recipientsResolvedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSendingCompletedDatetime()
    {
        return $this->getProperty('sendingCompletedDatetime');
    }

    /**
     * @param \DateTime $sendingCompletedDatetime
     */
    public function setSendingCompletedDatetime(\DateTime $sendingCompletedDatetime = null)
    {
        $this->setProperty('sendingCompletedDatetime', $sendingCompletedDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getContext()
    {
        return $this->getProperty('context');
    }

    /**
     * @param ModelBase $context
     */
    public function setContext(\ModelBase $context = null)
    {
        $this->setProperty('context', $context);
    }
}
