<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AlertRuleRecipient extends ModelBase
{

    const ALERT_RULE = 'alertRule';

    const CHANNEL = 'channel';

    const RECIPIENT = 'recipient';

    const RECIPIENT_FIELD = 'recipientField';

    const RECIPIENT_RESOLVER = 'recipientResolver';

    protected $_resourceType = ResourceType::ALERT_RULE_RECIPIENT;

    /**
     * @param Query $query
     * @return AlertRuleRecipient[] | Collection
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
     * @return AlertRule
     */
    public function getAlertRule()
    {
        return $this->getProperty('alertRule');
    }

    /**
     * @param AlertRule $alertRule
     */
    public function setAlertRule(AlertRule $alertRule = null)
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
    public function setChannel($channel = null)
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
    public function setRecipient(ModelBase $recipient = null)
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
    public function setRecipientField($recipientField = null)
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
    public function setRecipientResolver($recipientResolver = null)
    {
        $this->setProperty('recipientResolver', $recipientResolver);
    }


}
