<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviouralIncidentStaffInvolvement extends ModelBase
{
    const BEHAVIOURAL_INCIDENT = 'behaviouralIncident';

    const STAFF = 'staff';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_STAFF_INVOLVEMENT;

    /**
     * @param Query $query
     * @return BehaviouralIncidentStaffInvolvement[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_INCIDENT_STAFF_INVOLVEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralIncidentStaffInvolvement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT_STAFF_INVOLVEMENT, $id);
    }

    /**
     * @return BehaviouralIncident
     */
    public function getBehaviouralIncident()
    {
        return $this->getProperty('behaviouralIncident');
    }

    /**
     * @param BehaviouralIncident $behaviouralIncident
     */
    public function setBehaviouralIncident(BehaviouralIncident $behaviouralIncident = null)
    {
        $this->setProperty('behaviouralIncident', $behaviouralIncident);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

}
