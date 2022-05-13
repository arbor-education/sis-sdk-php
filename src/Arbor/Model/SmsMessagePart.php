<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SmsMessagePart extends ModelBase
{
    const SMS_MESSAGE = 'smsMessage';

    const PART_IDENTIFIER = 'partIdentifier';

    const RECEIVED_DATETIME = 'receivedDatetime';

    const FAILED_DATETIME = 'failedDatetime';

    const RECIPIENT_NETWORK_CODE = 'recipientNetworkCode';

    const COST = 'cost';

    protected $_resourceType = ResourceType::SMS_MESSAGE_PART;

    /**
     * @param Query $query
     * @return SmsMessagePart[] | Collection
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
     * @return SmsMessage
     */
    public function getSmsMessage()
    {
        return $this->getProperty('smsMessage');
    }

    /**
     * @param SmsMessage $smsMessage
     */
    public function setSmsMessage(SmsMessage $smsMessage = null)
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
    public function setPartIdentifier($partIdentifier = null)
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
    public function setRecipientNetworkCode($recipientNetworkCode = null)
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
    public function setCost($cost = null)
    {
        $this->setProperty('cost', $cost);
    }
}
