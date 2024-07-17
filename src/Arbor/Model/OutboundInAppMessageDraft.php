<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class OutboundInAppMessageDraft extends ModelBase
{
    public const SENDER = 'sender';

    public const MESSAGE = 'message';

    public const COMBINE_MESSAGES_TO_SAME_RECIPIENT = 'combineMessagesToSameRecipient';

    public const COMBINE_MESSAGES_TO_SAME_HOUSEHOLD = 'combineMessagesToSameHousehold';

    public const GENERATED_DATETIME = 'generatedDatetime';

    public const CONTEXT = 'context';

    protected $_resourceType = ResourceType::OUTBOUND_IN_APP_MESSAGE_DRAFT;

    /**
     * @param Query $query
     * @return OutboundInAppMessageDraft[] | Collection
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

        $query->setResourceType(ResourceType::OUTBOUND_IN_APP_MESSAGE_DRAFT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OutboundInAppMessageDraft
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OUTBOUND_IN_APP_MESSAGE_DRAFT, $id);
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
     * @return bool
     */
    public function getCombineMessagesToSameRecipient()
    {
        return $this->getProperty('combineMessagesToSameRecipient');
    }

    /**
     * @param bool $combineMessagesToSameRecipient
     */
    public function setCombineMessagesToSameRecipient(bool $combineMessagesToSameRecipient = null)
    {
        $this->setProperty('combineMessagesToSameRecipient', $combineMessagesToSameRecipient);
    }

    /**
     * @return bool
     */
    public function getCombineMessagesToSameHousehold()
    {
        return $this->getProperty('combineMessagesToSameHousehold');
    }

    /**
     * @param bool $combineMessagesToSameHousehold
     */
    public function setCombineMessagesToSameHousehold(bool $combineMessagesToSameHousehold = null)
    {
        $this->setProperty('combineMessagesToSameHousehold', $combineMessagesToSameHousehold);
    }

    /**
     * @return \DateTime
     */
    public function getGeneratedDatetime()
    {
        return $this->getProperty('generatedDatetime');
    }

    /**
     * @param \DateTime $generatedDatetime
     */
    public function setGeneratedDatetime(\DateTime $generatedDatetime = null)
    {
        $this->setProperty('generatedDatetime', $generatedDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getContext()
    {
        return $this->getProperty('context');
    }

    /**
     * @param ModelBase $context
     */
    public function setContext(\ModelBase $context = null)
    {
        $this->setProperty('context', $context);
    }
}
