<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MessageDraftRecipient extends ModelBase
{
    public const MESSAGE_DRAFT = 'messageDraft';

    public const RECIPIENT = 'recipient';

    public const RESOLVER = 'resolver';

    protected $_resourceType = ResourceType::MESSAGE_DRAFT_RECIPIENT;

    /**
     * @param Query $query
     * @return MessageDraftRecipient[] | Collection
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

        $query->setResourceType(ResourceType::MESSAGE_DRAFT_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MessageDraftRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MESSAGE_DRAFT_RECIPIENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getMessageDraft()
    {
        return $this->getProperty('messageDraft');
    }

    /**
     * @param ModelBase $messageDraft
     */
    public function setMessageDraft(\ModelBase $messageDraft = null)
    {
        $this->setProperty('messageDraft', $messageDraft);
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
    public function getResolver()
    {
        return $this->getProperty('resolver');
    }

    /**
     * @param string $resolver
     */
    public function setResolver(string $resolver = null)
    {
        $this->setProperty('resolver', $resolver);
    }
}
