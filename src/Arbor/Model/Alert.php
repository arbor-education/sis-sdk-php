<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Alert extends ModelBase
{
    public const ALERT_RULE = 'alertRule';

    public const TRIGGER_EVENT_TYPE = 'triggerEventType';

    public const TRIGGERED_BY = 'triggeredBy';

    public const REFERENCE = 'reference';

    public const TRIGGERED_DATETIME = 'triggeredDatetime';

    protected $_resourceType = ResourceType::ALERT;

    /**
     * @param Query $query
     * @return Alert[] | Collection
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

        $query->setResourceType(ResourceType::ALERT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Alert
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ALERT, $id);
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
    public function getTriggerEventType()
    {
        return $this->getProperty('triggerEventType');
    }

    /**
     * @param string $triggerEventType
     */
    public function setTriggerEventType(string $triggerEventType = null)
    {
        $this->setProperty('triggerEventType', $triggerEventType);
    }

    /**
     * @return ModelBase
     */
    public function getTriggeredBy()
    {
        return $this->getProperty('triggeredBy');
    }

    /**
     * @param ModelBase $triggeredBy
     */
    public function setTriggeredBy(\ModelBase $triggeredBy = null)
    {
        $this->setProperty('triggeredBy', $triggeredBy);
    }

    /**
     * @return ModelBase
     */
    public function getReference()
    {
        return $this->getProperty('reference');
    }

    /**
     * @param ModelBase $reference
     */
    public function setReference(\ModelBase $reference = null)
    {
        $this->setProperty('reference', $reference);
    }

    /**
     * @return \DateTime
     */
    public function getTriggeredDatetime()
    {
        return $this->getProperty('triggeredDatetime');
    }

    /**
     * @param \DateTime $triggeredDatetime
     */
    public function setTriggeredDatetime(\DateTime $triggeredDatetime = null)
    {
        $this->setProperty('triggeredDatetime', $triggeredDatetime);
    }
}
