<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AlertRuleCondition extends ModelBase
{
    public const ALERT_RULE = 'alertRule';

    public const TRIGGER_FIELD = 'triggerField';

    public const CONDITION_GROUP = 'conditionGroup';

    public const CONDITION = 'condition';

    public const CONDITION_RESOLVER = 'conditionResolver';

    protected $_resourceType = ResourceType::ALERT_RULE_CONDITION;

    /**
     * @param Query $query
     * @return AlertRuleCondition[] | Collection
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

        $query->setResourceType(ResourceType::ALERT_RULE_CONDITION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AlertRuleCondition
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ALERT_RULE_CONDITION, $id);
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
    public function getTriggerField()
    {
        return $this->getProperty('triggerField');
    }

    /**
     * @param string $triggerField
     */
    public function setTriggerField(string $triggerField = null)
    {
        $this->setProperty('triggerField', $triggerField);
    }

    /**
     * @return bool
     */
    public function getConditionGroup()
    {
        return $this->getProperty('conditionGroup');
    }

    /**
     * @param bool $conditionGroup
     */
    public function setConditionGroup(bool $conditionGroup = null)
    {
        $this->setProperty('conditionGroup', $conditionGroup);
    }

    /**
     * @return ModelBase
     */
    public function getCondition()
    {
        return $this->getProperty('condition');
    }

    /**
     * @param ModelBase $condition
     */
    public function setCondition(\ModelBase $condition = null)
    {
        $this->setProperty('condition', $condition);
    }

    /**
     * @return string
     */
    public function getConditionResolver()
    {
        return $this->getProperty('conditionResolver');
    }

    /**
     * @param string $conditionResolver
     */
    public function setConditionResolver(string $conditionResolver = null)
    {
        $this->setProperty('conditionResolver', $conditionResolver);
    }
}
