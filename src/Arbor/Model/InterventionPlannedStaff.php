<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Intervention;

class InterventionPlannedStaff extends ModelBase
{

    const INTERVENTION = 'intervention';

    const STAFF = 'staff';

    const PLANNED_HOURS = 'plannedHours';

    protected $_resourceType = ResourceType::INTERVENTION_PLANNED_STAFF;

    /**
     * @param \Arbor\Query\Query $query
     * @return InterventionPlannedStaff[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("InterventionPlannedStaff");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InterventionPlannedStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::INTERVENTION_PLANNED_STAFF, $id);
    }

    /**
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty("intervention");
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(Intervention $intervention = null)
    {
        $this->setProperty("intervention", $intervention);
    }

    /**
     * @return ModelBase
     */
    public function getStaff()
    {
        return $this->getProperty("staff");
    }

    /**
     * @param ModelBase $staff
     */
    public function setStaff(ModelBase $staff = null)
    {
        $this->setProperty("staff", $staff);
    }

    /**
     * @return string
     */
    public function getPlannedHours()
    {
        return $this->getProperty("plannedHours");
    }

    /**
     * @param string $plannedHours
     */
    public function setPlannedHours($plannedHours = null)
    {
        $this->setProperty("plannedHours", $plannedHours);
    }


}
