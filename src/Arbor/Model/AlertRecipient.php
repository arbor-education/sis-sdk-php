<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AlertRecipient extends \ModelBase
{
    public const ALERT = 'alert';

    public const ALERT_RULE_RECIPIENT = 'alertRuleRecipient';

    public const CHANNEL = 'channel';

    public const RECIPIENT = 'recipient';

    public const MESSAGE = 'message';

    protected $_resourceType = ResourceType::ALERT_RECIPIENT;

    /**
     * @param Query $query
     * @return AlertRecipient[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ALERT_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AlertRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ALERT_RECIPIENT, $id);
    }

    /**
     * @return Alert
     */
    public function getAlert()
    {
        return $this->getProperty('alert');
    }

    /**
     * @param Alert $alert
     */
    public function setAlert(\Alert $alert = null)
    {
        $this->setProperty('alert', $alert);
    }

    /**
     * @return AlertRuleRecipient
     */
    public function getAlertRuleRecipient()
    {
        return $this->getProperty('alertRuleRecipient');
    }

    /**
     * @param AlertRuleRecipient $alertRuleRecipient
     */
    public function setAlertRuleRecipient(\AlertRuleRecipient $alertRuleRecipient = null)
    {
        $this->setProperty('alertRuleRecipient', $alertRuleRecipient);
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
     * @return ModelBase
     */
    public function getMessage()
    {
        return $this->getProperty('message');
    }

    /**
     * @param ModelBase $message
     */
    public function setMessage(\ModelBase $message = null)
    {
        $this->setProperty('message', $message);
    }
}
