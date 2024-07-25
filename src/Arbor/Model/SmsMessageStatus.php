<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SmsMessageStatus extends ModelBase
{
    public const SMS_MESSAGE = 'smsMessage';

    public const SMS_MESSAGE_PART = 'smsMessagePart';

    public const STATUS_TYPE = 'statusType';

    public const STATUS_DATETIME = 'statusDatetime';

    public const ERROR_TYPE = 'errorType';

    protected $_resourceType = ResourceType::SMS_MESSAGE_STATUS;

    /**
     * @param Query $query
     * @return SmsMessageStatus[] | Collection
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

        $query->setResourceType(ResourceType::SMS_MESSAGE_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmsMessageStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMS_MESSAGE_STATUS, $id);
    }

    /**
     * @return \Arbor\Model\SmsMessage
     */
    public function getSmsMessage()
    {
        return $this->getProperty('smsMessage');
    }

    /**
     * @param \Arbor\Model\SmsMessage $smsMessage
     */
    public function setSmsMessage(\Arbor\Model\SmsMessage $smsMessage = null)
    {
        $this->setProperty('smsMessage', $smsMessage);
    }

    /**
     * @return \Arbor\Model\SmsMessagePart
     */
    public function getSmsMessagePart()
    {
        return $this->getProperty('smsMessagePart');
    }

    /**
     * @param \Arbor\Model\SmsMessagePart $smsMessagePart
     */
    public function setSmsMessagePart(\Arbor\Model\SmsMessagePart $smsMessagePart = null)
    {
        $this->setProperty('smsMessagePart', $smsMessagePart);
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
     * @return string
     */
    public function getErrorType()
    {
        return $this->getProperty('errorType');
    }

    /**
     * @param string $errorType
     */
    public function setErrorType(string $errorType = null)
    {
        $this->setProperty('errorType', $errorType);
    }
}
