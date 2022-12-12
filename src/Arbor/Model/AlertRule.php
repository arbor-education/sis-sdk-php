<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AlertRule extends ModelBase
{

    const TRIGGER_EVENT_TYPE = 'triggerEventType';

    protected $_resourceType = ResourceType::ALERT_RULE;

    /**
     * @param Query $query
     * @return AlertRule[] | Collection
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

        $query->setResourceType(ResourceType::ALERT_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AlertRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ALERT_RULE, $id);
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
    public function setTriggerEventType($triggerEventType = null)
    {
        $this->setProperty('triggerEventType', $triggerEventType);
    }


}
