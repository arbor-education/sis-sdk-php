<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SmsMessagePart extends ModelBase
{
    public const SMS_MESSAGE = 'smsMessage';

    public const PART_IDENTIFIER = 'partIdentifier';

    public const RECEIVED_DATETIME = 'receivedDatetime';

    public const FAILED_DATETIME = 'failedDatetime';

    public const RECIPIENT_NETWORK_CODE = 'recipientNetworkCode';

    public const COST = 'cost';

    protected $_resourceType = ResourceType::SMS_MESSAGE_PART;

    /**
     * @param Query $query
     * @return SmsMessagePart[] | Collection
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

        $query->setResourceType(ResourceType::SMS_MESSAGE_PART);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmsMessagePart
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMS_MESSAGE_PART, $id);
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
     * @return string
     */
    public function getPartIdentifier()
    {
        return $this->getProperty('partIdentifier');
    }

    /**
     * @param string $partIdentifier
     */
    public function setPartIdentifier(string $partIdentifier = null)
    {
        $this->setProperty('partIdentifier', $partIdentifier);
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
     * @return string
     */
    public function getRecipientNetworkCode()
    {
        return $this->getProperty('recipientNetworkCode');
    }

    /**
     * @param string $recipientNetworkCode
     */
    public function setRecipientNetworkCode(string $recipientNetworkCode = null)
    {
        $this->setProperty('recipientNetworkCode', $recipientNetworkCode);
    }

    /**
     * @return string
     */
    public function getCost()
    {
        return $this->getProperty('cost');
    }

    /**
     * @param string $cost
     */
    public function setCost(string $cost = null)
    {
        $this->setProperty('cost', $cost);
    }
}
