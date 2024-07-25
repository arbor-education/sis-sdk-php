<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SuspendedCalendarEntryMapping extends ModelBase
{
    public const SUSPENDED_OBJECT = 'suspendedObject';

    public const SUSPENDED_EVENT = 'suspendedEvent';

    protected $_resourceType = ResourceType::SUSPENDED_CALENDAR_ENTRY_MAPPING;

    /**
     * @param Query $query
     * @return SuspendedCalendarEntryMapping[] | Collection
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

        $query->setResourceType(ResourceType::SUSPENDED_CALENDAR_ENTRY_MAPPING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SuspendedCalendarEntryMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SUSPENDED_CALENDAR_ENTRY_MAPPING, $id);
    }

    /**
     * @return ModelBase
     */
    public function getSuspendedObject()
    {
        return $this->getProperty('suspendedObject');
    }

    /**
     * @param ModelBase $suspendedObject
     */
    public function setSuspendedObject(\ModelBase $suspendedObject = null)
    {
        $this->setProperty('suspendedObject', $suspendedObject);
    }

    /**
     * @return ModelBase
     */
    public function getSuspendedEvent()
    {
        return $this->getProperty('suspendedEvent');
    }

    /**
     * @param ModelBase $suspendedEvent
     */
    public function setSuspendedEvent(\ModelBase $suspendedEvent = null)
    {
        $this->setProperty('suspendedEvent', $suspendedEvent);
    }
}
