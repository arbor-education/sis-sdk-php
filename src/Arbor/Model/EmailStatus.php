<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Email;
use \Arbor\Model\EmailRecipient;

class EmailStatus extends ModelBase
{

    const EMAIL = 'email';

    const EMAIL_ADDRESS = 'emailAddress';

    const EMAIL_RECIPIENT = 'emailRecipient';

    const STATUS_TYPE = 'statusType';

    const STATUS_DATETIME = 'statusDatetime';

    const STATUS_CODE = 'statusCode';

    const STATUS_DETAIL = 'statusDetail';

    const DELIVERY_ATTEMPT_NUMBER = 'deliveryAttemptNumber';

    protected $_resourceType = ResourceType::EMAIL_STATUS;

    /**
     * @param \Arbor\Query\Query $query
     * @return EmailStatus[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("EmailStatus");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EmailStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::EMAIL_STATUS, $id);
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->getProperty("email");
    }

    /**
     * @param Email $email
     */
    public function setEmail(Email $email = null)
    {
        $this->setProperty("email", $email);
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->getProperty("emailAddress");
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->setProperty("emailAddress", $emailAddress);
    }

    /**
     * @return EmailRecipient
     */
    public function getEmailRecipient()
    {
        return $this->getProperty("emailRecipient");
    }

    /**
     * @param EmailRecipient $emailRecipient
     */
    public function setEmailRecipient(EmailRecipient $emailRecipient = null)
    {
        $this->setProperty("emailRecipient", $emailRecipient);
    }

    /**
     * @return string
     */
    public function getStatusType()
    {
        return $this->getProperty("statusType");
    }

    /**
     * @param string $statusType
     */
    public function setStatusType($statusType = null)
    {
        $this->setProperty("statusType", $statusType);
    }

    /**
     * @return \DateTime
     */
    public function getStatusDatetime()
    {
        return $this->getProperty("statusDatetime");
    }

    /**
     * @param \DateTime $statusDatetime
     */
    public function setStatusDatetime(\DateTime $statusDatetime = null)
    {
        $this->setProperty("statusDatetime", $statusDatetime);
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->getProperty("statusCode");
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode($statusCode = null)
    {
        $this->setProperty("statusCode", $statusCode);
    }

    /**
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->getProperty("statusDetail");
    }

    /**
     * @param string $statusDetail
     */
    public function setStatusDetail($statusDetail = null)
    {
        $this->setProperty("statusDetail", $statusDetail);
    }

    /**
     * @return int
     */
    public function getDeliveryAttemptNumber()
    {
        return $this->getProperty("deliveryAttemptNumber");
    }

    /**
     * @param int $deliveryAttemptNumber
     */
    public function setDeliveryAttemptNumber($deliveryAttemptNumber = null)
    {
        $this->setProperty("deliveryAttemptNumber", $deliveryAttemptNumber);
    }


}
