<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class MessageDraftRecipient extends ModelBase
{
    const MESSAGE_DRAFT = 'messageDraft';

    const RECIPIENT = 'recipient';

    const RESOLVER = 'resolver';

    protected $_resourceType = ResourceType::MESSAGE_DRAFT_RECIPIENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return MessageDraftRecipient[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("MessageDraftRecipient");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MessageDraftRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MESSAGE_DRAFT_RECIPIENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getMessageDraft()
    {
        return $this->getProperty("messageDraft");
    }

    /**
     * @param ModelBase $messageDraft
     */
    public function setMessageDraft(ModelBase $messageDraft = null)
    {
        $this->setProperty("messageDraft", $messageDraft);
    }

    /**
     * @return ModelBase
     */
    public function getRecipient()
    {
        return $this->getProperty("recipient");
    }

    /**
     * @param ModelBase $recipient
     */
    public function setRecipient(ModelBase $recipient = null)
    {
        $this->setProperty("recipient", $recipient);
    }

    /**
     * @return string
     */
    public function getResolver()
    {
        return $this->getProperty("resolver");
    }

    /**
     * @param string $resolver
     */
    public function setResolver($resolver = null)
    {
        $this->setProperty("resolver", $resolver);
    }
}
