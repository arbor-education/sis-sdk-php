<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InterventionPlannedStaff extends ModelBase
{
    const INTERVENTION = 'intervention';

    const STAFF = 'staff';

    const PLANNED_HOURS = 'plannedHours';

    const PRICE_PER_HOUR = 'pricePerHour';

    protected $_resourceType = ResourceType::INTERVENTION_PLANNED_STAFF;

    /**
     * @param Query $query
     * @return InterventionPlannedStaff[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_PLANNED_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionPlannedStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_PLANNED_STAFF, $id);
    }

    /**
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
    }

    /**
     * @return ModelBase
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param ModelBase $staff
     */
    public function setStaff(ModelBase $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return string
     */
    public function getPlannedHours()
    {
        return $this->getProperty('plannedHours');
    }

    /**
     * @param string $plannedHours
     */
    public function setPlannedHours($plannedHours = null)
    {
        $this->setProperty('plannedHours', $plannedHours);
    }

    /**
     * @return string
     */
    public function getPricePerHour()
    {
        return $this->getProperty('pricePerHour');
    }

    /**
     * @param string $pricePerHour
     */
    public function setPricePerHour($pricePerHour = null)
    {
        $this->setProperty('pricePerHour', $pricePerHour);
    }
}
