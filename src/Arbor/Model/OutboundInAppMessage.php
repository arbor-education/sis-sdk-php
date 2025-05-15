<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OutboundInAppMessage extends ModelBase
{
    public const SENDER = 'sender';

    public const RECIPIENT = 'recipient';

    public const MESSAGE = 'message';

    public const READ_DATETIME = 'readDatetime';

    public const OUTBOUND_IN_APP_MESSAGE_DRAFT = 'outboundInAppMessageDraft';

    public const SENT_DATETIME = 'sentDatetime';

    public const ACTION_REQUIRED_BY_DATETIME = 'actionRequiredByDatetime';

    public const INBOUND_IN_APP_MESSAGE_REPLIED_TO = 'inboundInAppMessageRepliedTo';

    protected $_resourceType = ResourceType::OUTBOUND_IN_APP_MESSAGE;

    /**
     * @param Query $query
     * @return OutboundInAppMessage[] | Collection
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

        $query->setResourceType(ResourceType::OUTBOUND_IN_APP_MESSAGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OutboundInAppMessage
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OUTBOUND_IN_APP_MESSAGE, $id);
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
    public function setSender(\ModelBase $sender = null)
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
    public function setRecipient(\ModelBase $recipient = null)
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
    public function setMessage(string $message = null)
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
     * @return \Arbor\Model\OutboundInAppMessageDraft
     */
    public function getOutboundInAppMessageDraft()
    {
        return $this->getProperty('outboundInAppMessageDraft');
    }

    /**
     * @param \Arbor\Model\OutboundInAppMessageDraft $outboundInAppMessageDraft
     */
    public function setOutboundInAppMessageDraft(\Arbor\Model\OutboundInAppMessageDraft $outboundInAppMessageDraft = null)
    {
        $this->setProperty('outboundInAppMessageDraft', $outboundInAppMessageDraft);
    }

    /**
     * @return \DateTime
     */
    public function getSentDatetime()
    {
        return $this->getProperty('sentDatetime');
    }

    /**
     * @param \DateTime $sentDatetime
     */
    public function setSentDatetime(\DateTime $sentDatetime = null)
    {
        $this->setProperty('sentDatetime', $sentDatetime);
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

    /**
     * @return \Arbor\Model\InboundInAppMessage
     */
    public function getInboundInAppMessageRepliedTo()
    {
        return $this->getProperty('inboundInAppMessageRepliedTo');
    }

    /**
     * @param \Arbor\Model\InboundInAppMessage $inboundInAppMessageRepliedTo
     */
    public function setInboundInAppMessageRepliedTo(\Arbor\Model\InboundInAppMessage $inboundInAppMessageRepliedTo = null)
    {
        $this->setProperty('inboundInAppMessageRepliedTo', $inboundInAppMessageRepliedTo);
    }
}
