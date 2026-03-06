<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InboundNotificationAutomaticRecipient extends ModelBase
{
    public const AUTOMATIC_RECIPIENT = 'automaticRecipient';

    protected $_resourceType = ResourceType::INBOUND_NOTIFICATION_AUTOMATIC_RECIPIENT;

    /**
     * @param Query $query
     * @return InboundNotificationAutomaticRecipient[] | Collection
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

        $query->setResourceType(ResourceType::INBOUND_NOTIFICATION_AUTOMATIC_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InboundNotificationAutomaticRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INBOUND_NOTIFICATION_AUTOMATIC_RECIPIENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getAutomaticRecipient()
    {
        return $this->getProperty('automaticRecipient');
    }

    /**
     * @param ModelBase $automaticRecipient
     */
    public function setAutomaticRecipient(\ModelBase $automaticRecipient = null)
    {
        $this->setProperty('automaticRecipient', $automaticRecipient);
    }
}
