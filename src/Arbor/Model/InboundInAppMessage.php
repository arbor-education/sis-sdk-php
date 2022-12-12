<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InboundInAppMessage extends ModelBase
{

    const SENDER = 'sender';

    const RECIPIENT = 'recipient';

    const MESSAGE = 'message';

    const READ_DATETIME = 'readDatetime';

    const RECEIVED_DATETIME = 'receivedDatetime';

    const FIRST_READ_BY = 'firstReadBy';

    const OUTBOUND_IN_APP_MESSAGE_REPLIED_TO = 'outboundInAppMessageRepliedTo';

    protected $_resourceType = ResourceType::INBOUND_IN_APP_MESSAGE;

    /**
     * @param Query $query
     * @return InboundInAppMessage[] | Collection
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

        $query->setResourceType(ResourceType::INBOUND_IN_APP_MESSAGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InboundInAppMessage
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INBOUND_IN_APP_MESSAGE, $id);
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
    public function setSender(ModelBase $sender = null)
    {
        $this->setProperty('sender', $sender);
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
    public function getMessage()
    {
        return $this->getProperty('message');
    }

    /**
     * @param string $message
     */
    public function setMessage($message = null)
    {
        $this->setProperty('message', $message);
    }

    /**
     * @return \DateTime
     */
    public function getReadDatetime()
    {
        return $this->getProperty('readDatetime');
    }

    /**
     * @param \DateTime $readDatetime
     */
    public function setReadDatetime(\DateTime $readDatetime = null)
    {
        $this->setProperty('readDatetime', $readDatetime);
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
     * @return Staff
     */
    public function getFirstReadBy()
    {
        return $this->getProperty('firstReadBy');
    }

    /**
     * @param Staff $firstReadBy
     */
    public function setFirstReadBy(Staff $firstReadBy = null)
    {
        $this->setProperty('firstReadBy', $firstReadBy);
    }

    /**
     * @return OutboundInAppMessage
     */
    public function getOutboundInAppMessageRepliedTo()
    {
        return $this->getProperty('outboundInAppMessageRepliedTo');
    }

    /**
     * @param OutboundInAppMessage $outboundInAppMessageRepliedTo
     */
    public function setOutboundInAppMessageRepliedTo(OutboundInAppMessage $outboundInAppMessageRepliedTo = null)
    {
        $this->setProperty('outboundInAppMessageRepliedTo', $outboundInAppMessageRepliedTo);
    }


}
