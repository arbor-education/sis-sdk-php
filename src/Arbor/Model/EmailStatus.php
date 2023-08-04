<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailStatus extends \ModelBase
{
    public const EMAIL = 'email';

    public const EMAIL_ADDRESS = 'emailAddress';

    public const EMAIL_RECIPIENT = 'emailRecipient';

    public const STATUS_TYPE = 'statusType';

    public const STATUS_DATETIME = 'statusDatetime';

    public const STATUS_CODE = 'statusCode';

    public const STATUS_DETAIL = 'statusDetail';

    public const DELIVERY_ATTEMPT_NUMBER = 'deliveryAttemptNumber';

    protected $_resourceType = ResourceType::EMAIL_STATUS;

    /**
     * @param Query $query
     * @return EmailStatus[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_STATUS, $id);
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
    public function getEmailAddress()
    {
        return $this->getProperty('emailAddress');
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress(string $emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
    }

    /**
     * @return EmailRecipient
     */
    public function getEmailRecipient()
    {
        return $this->getProperty('emailRecipient');
    }

    /**
     * @param EmailRecipient $emailRecipient
     */
    public function setEmailRecipient(\EmailRecipient $emailRecipient = null)
    {
        $this->setProperty('emailRecipient', $emailRecipient);
    }

    /**
     * @return string
     */
    public function getStatusType()
    {
        return $this->getProperty('statusType');
    }

    /**
     * @param string $statusType
     */
    public function setStatusType(string $statusType = null)
    {
        $this->setProperty('statusType', $statusType);
    }

    /**
     * @return \DateTime
     */
    public function getStatusDatetime()
    {
        return $this->getProperty('statusDatetime');
    }

    /**
     * @param \DateTime $statusDatetime
     */
    public function setStatusDatetime(\DateTime $statusDatetime = null)
    {
        $this->setProperty('statusDatetime', $statusDatetime);
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->getProperty('statusCode');
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode(int $statusCode = null)
    {
        $this->setProperty('statusCode', $statusCode);
    }

    /**
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->getProperty('statusDetail');
    }

    /**
     * @param string $statusDetail
     */
    public function setStatusDetail(string $statusDetail = null)
    {
        $this->setProperty('statusDetail', $statusDetail);
    }

    /**
     * @return int
     */
    public function getDeliveryAttemptNumber()
    {
        return $this->getProperty('deliveryAttemptNumber');
    }

    /**
     * @param int $deliveryAttemptNumber
     */
    public function setDeliveryAttemptNumber(int $deliveryAttemptNumber = null)
    {
        $this->setProperty('deliveryAttemptNumber', $deliveryAttemptNumber);
    }
}
