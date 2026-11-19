<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InAppMessageThread extends ModelBase
{
    public const SENDER = 'sender';

    public const RECIPIENT = 'recipient';

    protected $_resourceType = ResourceType::IN_APP_MESSAGE_THREAD;

    /**
     * @param Query $query
     * @return InAppMessageThread[] | Collection
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

        $query->setResourceType(ResourceType::IN_APP_MESSAGE_THREAD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InAppMessageThread
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_APP_MESSAGE_THREAD, $id);
    }

    /**
     * @return \Arbor\Model\ModelBase
     */
    public function getSender()
    {
        return $this->getProperty('sender');
    }

    /**
     * @param \Arbor\Model\ModelBase $sender
     */
    public function setSender(\Arbor\Model\ModelBase $sender = null)
    {
        $this->setProperty('sender', $sender);
    }

    /**
     * @return \Arbor\Model\ModelBase
     */
    public function getRecipient()
    {
        return $this->getProperty('recipient');
    }

    /**
     * @param \Arbor\Model\ModelBase $recipient
     */
    public function setRecipient(\Arbor\Model\ModelBase $recipient = null)
    {
        $this->setProperty('recipient', $recipient);
    }
}
