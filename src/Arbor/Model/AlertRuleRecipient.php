<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AlertRuleRecipient extends ModelBase
{
    public const ALERT_RULE = 'alertRule';

    public const CHANNEL = 'channel';

    public const RECIPIENT = 'recipient';

    public const RECIPIENT_FIELD = 'recipientField';

    public const RECIPIENT_RESOLVER = 'recipientResolver';

    protected $_resourceType = ResourceType::ALERT_RULE_RECIPIENT;

    /**
     * @param Query $query
     * @return AlertRuleRecipient[] | Collection
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

        $query->setResourceType(ResourceType::ALERT_RULE_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AlertRuleRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ALERT_RULE_RECIPIENT, $id);
    }

    /**
     * @return \Arbor\Model\AlertRule
     */
    public function getAlertRule()
    {
        return $this->getProperty('alertRule');
    }

    /**
     * @param \Arbor\Model\AlertRule $alertRule
     */
    public function setAlertRule(\Arbor\Model\AlertRule $alertRule = null)
    {
        $this->setProperty('alertRule', $alertRule);
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->getProperty('channel');
    }

    /**
     * @param string $channel
     */
    public function setChannel(string $channel = null)
    {
        $this->setProperty('channel', $channel);
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
    public function getRecipientField()
    {
        return $this->getProperty('recipientField');
    }

    /**
     * @param string $recipientField
     */
    public function setRecipientField(string $recipientField = null)
    {
        $this->setProperty('recipientField', $recipientField);
    }

    /**
     * @return string
     */
    public function getRecipientResolver()
    {
        return $this->getProperty('recipientResolver');
    }

    /**
     * @param string $recipientResolver
     */
    public function setRecipientResolver(string $recipientResolver = null)
    {
        $this->setProperty('recipientResolver', $recipientResolver);
    }
}
