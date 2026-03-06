<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TelephoneCall extends ModelBase
{
    public const CALLER_NAME = 'callerName';

    public const CALLER = 'caller';

    public const CALLER_TELEPHONE_NUMBER = 'callerTelephoneNumber';

    public const CALLER_TELEPHONE_NUMBER_MODEL = 'callerTelephoneNumberModel';

    public const CALL_DATETIME = 'callDatetime';

    public const CALL_DURATION = 'callDuration';

    public const RECIPIENT_NAME = 'recipientName';

    public const RECIPIENT = 'recipient';

    public const RECIPIENT_TELEPHONE_NUMBER = 'recipientTelephoneNumber';

    public const RECIPIENT_TELEPHONE_NUMBER_MODEL = 'recipientTelephoneNumberModel';

    public const SUBJECT = 'subject';

    public const SUMMARY = 'summary';

    public const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    protected $_resourceType = ResourceType::TELEPHONE_CALL;

    /**
     * @param Query $query
     * @return TelephoneCall[] | Collection
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

        $query->setResourceType(ResourceType::TELEPHONE_CALL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TelephoneCall
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TELEPHONE_CALL, $id);
    }

    /**
     * @return string
     */
    public function getCallerName()
    {
        return $this->getProperty('callerName');
    }

    /**
     * @param string $callerName
     */
    public function setCallerName(string $callerName = null)
    {
        $this->setProperty('callerName', $callerName);
    }

    /**
     * @return ModelBase
     */
    public function getCaller()
    {
        return $this->getProperty('caller');
    }

    /**
     * @param ModelBase $caller
     */
    public function setCaller(\ModelBase $caller = null)
    {
        $this->setProperty('caller', $caller);
    }

    /**
     * @return string
     */
    public function getCallerTelephoneNumber()
    {
        return $this->getProperty('callerTelephoneNumber');
    }

    /**
     * @param string $callerTelephoneNumber
     */
    public function setCallerTelephoneNumber(string $callerTelephoneNumber = null)
    {
        $this->setProperty('callerTelephoneNumber', $callerTelephoneNumber);
    }

    /**
     * @return \Arbor\Model\TelephoneNumber
     */
    public function getCallerTelephoneNumberModel()
    {
        return $this->getProperty('callerTelephoneNumberModel');
    }

    /**
     * @param \Arbor\Model\TelephoneNumber $callerTelephoneNumberModel
     */
    public function setCallerTelephoneNumberModel(\Arbor\Model\TelephoneNumber $callerTelephoneNumberModel = null)
    {
        $this->setProperty('callerTelephoneNumberModel', $callerTelephoneNumberModel);
    }

    /**
     * @return \DateTime
     */
    public function getCallDatetime()
    {
        return $this->getProperty('callDatetime');
    }

    /**
     * @param \DateTime $callDatetime
     */
    public function setCallDatetime(\DateTime $callDatetime = null)
    {
        $this->setProperty('callDatetime', $callDatetime);
    }

    /**
     * @return string
     */
    public function getCallDuration()
    {
        return $this->getProperty('callDuration');
    }

    /**
     * @param string $callDuration
     */
    public function setCallDuration(string $callDuration = null)
    {
        $this->setProperty('callDuration', $callDuration);
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
     * @return string
     */
    public function getRecipientTelephoneNumber()
    {
        return $this->getProperty('recipientTelephoneNumber');
    }

    /**
     * @param string $recipientTelephoneNumber
     */
    public function setRecipientTelephoneNumber(string $recipientTelephoneNumber = null)
    {
        $this->setProperty('recipientTelephoneNumber', $recipientTelephoneNumber);
    }

    /**
     * @return \Arbor\Model\TelephoneNumber
     */
    public function getRecipientTelephoneNumberModel()
    {
        return $this->getProperty('recipientTelephoneNumberModel');
    }

    /**
     * @param \Arbor\Model\TelephoneNumber $recipientTelephoneNumberModel
     */
    public function setRecipientTelephoneNumberModel(\Arbor\Model\TelephoneNumber $recipientTelephoneNumberModel = null)
    {
        $this->setProperty('recipientTelephoneNumberModel', $recipientTelephoneNumberModel);
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
    public function getSummary()
    {
        return $this->getProperty('summary');
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary = null)
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
