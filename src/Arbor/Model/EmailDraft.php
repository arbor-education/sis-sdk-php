<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\SendingProfile;

class EmailDraft extends ModelBase
{

    const SENDING_PROFILE = 'sendingProfile';

    const SUBJECT = 'subject';

    const BODY = 'body';

    const SENDING_STARTED_DATETIME = 'sendingStartedDatetime';

    const RECIPIENTS_RESOLVED_DATETIME = 'recipientsResolvedDatetime';

    const SENDING_COMPLETED_DATETIME = 'sendingCompletedDatetime';

    protected $_resourceType = ResourceType::EMAIL_DRAFT;

    /**
     * @param \Arbor\Query\Query $query
     * @return EmailDraft[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("EmailDraft");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EmailDraft
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::EMAIL_DRAFT, $id);
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
    public function getSubject()
    {
        return $this->getProperty("subject");
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject = null)
    {
        $this->setProperty("subject", $subject);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->getProperty("body");
    }

    /**
     * @param string $body
     */
    public function setBody($body = null)
    {
        $this->setProperty("body", $body);
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
