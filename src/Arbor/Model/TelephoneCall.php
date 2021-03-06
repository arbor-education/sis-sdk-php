<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TelephoneCall extends ModelBase
{
    const CALLER_NAME = 'callerName';

    const CALLER = 'caller';

    const CALLER_TELEPHONE_NUMBER = 'callerTelephoneNumber';

    const CALLER_TELEPHONE_NUMBER_MODEL = 'callerTelephoneNumberModel';

    const CALL_DATETIME = 'callDatetime';

    const CALL_DURATION = 'callDuration';

    const RECIPIENT_NAME = 'recipientName';

    const RECIPIENT = 'recipient';

    const RECIPIENT_TELEPHONE_NUMBER = 'recipientTelephoneNumber';

    const RECIPIENT_TELEPHONE_NUMBER_MODEL = 'recipientTelephoneNumberModel';

    const SUBJECT = 'subject';

    const SUMMARY = 'summary';

    const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    protected $_resourceType = ResourceType::TELEPHONE_CALL;

    /**
     * @param Query $query
     * @return TelephoneCall[] | Collection
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
    public function setCallerName($callerName = null)
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
    public function setCaller(ModelBase $caller = null)
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
    public function setCallerTelephoneNumber($callerTelephoneNumber = null)
    {
        $this->setProperty('callerTelephoneNumber', $callerTelephoneNumber);
    }

    /**
     * @return TelephoneNumber
     */
    public function getCallerTelephoneNumberModel()
    {
        return $this->getProperty('callerTelephoneNumberModel');
    }

    /**
     * @param TelephoneNumber $callerTelephoneNumberModel
     */
    public function setCallerTelephoneNumberModel(TelephoneNumber $callerTelephoneNumberModel = null)
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
    public function setCallDuration($callDuration = null)
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
    public function getRecipientTelephoneNumber()
    {
        return $this->getProperty('recipientTelephoneNumber');
    }

    /**
     * @param string $recipientTelephoneNumber
     */
    public function setRecipientTelephoneNumber($recipientTelephoneNumber = null)
    {
        $this->setProperty('recipientTelephoneNumber', $recipientTelephoneNumber);
    }

    /**
     * @return TelephoneNumber
     */
    public function getRecipientTelephoneNumberModel()
    {
        return $this->getProperty('recipientTelephoneNumberModel');
    }

    /**
     * @param TelephoneNumber $recipientTelephoneNumberModel
     */
    public function setRecipientTelephoneNumberModel(TelephoneNumber $recipientTelephoneNumberModel = null)
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
    public function setSubject($subject = null)
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
