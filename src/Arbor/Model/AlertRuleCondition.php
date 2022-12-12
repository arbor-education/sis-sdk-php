<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AlertRuleCondition extends ModelBase
{

    const ALERT_RULE = 'alertRule';

    const TRIGGER_FIELD = 'triggerField';

    const CONDITION_GROUP = 'conditionGroup';

    const CONDITION = 'condition';

    const CONDITION_RESOLVER = 'conditionResolver';

    protected $_resourceType = ResourceType::ALERT_RULE_CONDITION;

    /**
     * @param Query $query
     * @return AlertRuleCondition[] | Collection
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
    public function getTriggerField()
    {
        return $this->getProperty('triggerField');
    }

    /**
     * @param string $triggerField
     */
    public function setTriggerField($triggerField = null)
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
    public function setConditionGroup($conditionGroup = null)
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
    public function setCondition(ModelBase $condition = null)
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
    public function setConditionResolver($conditionResolver = null)
    {
        $this->setProperty('conditionResolver', $conditionResolver);
    }


}
