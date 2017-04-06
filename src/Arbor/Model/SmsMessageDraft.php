<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\SendingProfile;

class SmsMessageDraft extends ModelBase
{

    const SENDING_PROFILE = 'sendingProfile';

    const MESSAGE_TEXT = 'messageText';

    const SENDING_STARTED_DATETIME = 'sendingStartedDatetime';

    const RECIPIENTS_RESOLVED_DATETIME = 'recipientsResolvedDatetime';

    const SENDING_COMPLETED_DATETIME = 'sendingCompletedDatetime';

    protected $_resourceType = ResourceType::SMS_MESSAGE_DRAFT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SmsMessageDraft[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("SmsMessageDraft");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SmsMessageDraft
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::SMS_MESSAGE_DRAFT, $id);
    }

    /**
     * @return SendingProfile
     */
    public function getSendingProfile()
    {
        return $this->getProperty("sendingProfile");
    }

    /**
     * @param SendingProfile $sendingProfile
     */
    public function setSendingProfile(SendingProfile $sendingProfile = null)
    {
        $this->setProperty("sendingProfile", $sendingProfile);
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
    public function getSendingStartedDatetime()
    {
        return $this->getProperty("sendingStartedDatetime");
    }

    /**
     * @param \DateTime $sendingStartedDatetime
     */
    public function setSendingStartedDatetime(\DateTime $sendingStartedDatetime = null)
    {
        $this->setProperty("sendingStartedDatetime", $sendingStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRecipientsResolvedDatetime()
    {
        return $this->getProperty("recipientsResolvedDatetime");
    }

    /**
     * @param \DateTime $recipientsResolvedDatetime
     */
    public function setRecipientsResolvedDatetime(\DateTime $recipientsResolvedDatetime = null)
    {
        $this->setProperty("recipientsResolvedDatetime", $recipientsResolvedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSendingCompletedDatetime()
    {
        return $this->getProperty("sendingCompletedDatetime");
    }

    /**
     * @param \DateTime $sendingCompletedDatetime
     */
    public function setSendingCompletedDatetime(\DateTime $sendingCompletedDatetime = null)
    {
        $this->setProperty("sendingCompletedDatetime", $sendingCompletedDatetime);
    }


}
