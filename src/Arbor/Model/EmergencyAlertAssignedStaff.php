<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmergencyAlertAssignedStaff extends ModelBase
{
    public const EMERGENCY_ALERT = 'emergencyAlert';

    public const ASSIGNED_STAFF = 'assignedStaff';

    protected $_resourceType = ResourceType::EMERGENCY_ALERT_ASSIGNED_STAFF;

    /**
     * @param Query $query
     * @return EmergencyAlertAssignedStaff[] | Collection
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
     * @return \Arbor\Model\EmergencyAlert
     */
    public function getEmergencyAlert()
    {
        return $this->getProperty('emergencyAlert');
    }

    /**
     * @param \Arbor\Model\EmergencyAlert $emergencyAlert
     */
    public function setEmergencyAlert(\Arbor\Model\EmergencyAlert $emergencyAlert = null)
    {
        $this->setProperty('emergencyAlert', $emergencyAlert);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getAssignedStaff()
    {
        return $this->getProperty('assignedStaff');
    }

    /**
     * @param \Arbor\Model\Staff $assignedStaff
     */
    public function setAssignedStaff(\Arbor\Model\Staff $assignedStaff = null)
    {
        $this->setProperty('assignedStaff', $assignedStaff);
    }
}
