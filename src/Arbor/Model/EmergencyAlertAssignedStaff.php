<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmergencyAlertAssignedStaff extends ModelBase
{
    const EMERGENCY_ALERT = 'emergencyAlert';

    const ASSIGNED_STAFF = 'assignedStaff';

    protected $_resourceType = ResourceType::EMERGENCY_ALERT_ASSIGNED_STAFF;

    /**
     * @param Query $query
     * @return EmergencyAlertAssignedStaff[] | Collection
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

        $query->setResourceType(ResourceType::EMERGENCY_ALERT_ASSIGNED_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmergencyAlertAssignedStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMERGENCY_ALERT_ASSIGNED_STAFF, $id);
    }

    /**
     * @return EmergencyAlert
     */
    public function getEmergencyAlert()
    {
        return $this->getProperty('emergencyAlert');
    }

    /**
     * @param EmergencyAlert $emergencyAlert
     */
    public function setEmergencyAlert(EmergencyAlert $emergencyAlert = null)
    {
        $this->setProperty('emergencyAlert', $emergencyAlert);
    }

    /**
     * @return Staff
     */
    public function getAssignedStaff()
    {
        return $this->getProperty('assignedStaff');
    }

    /**
     * @param Staff $assignedStaff
     */
    public function setAssignedStaff(Staff $assignedStaff = null)
    {
        $this->setProperty('assignedStaff', $assignedStaff);
    }
}
