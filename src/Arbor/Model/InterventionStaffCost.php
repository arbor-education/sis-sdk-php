<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InterventionStaffCost extends ModelBase
{

    const STAFF = 'staff';

    const COST_PER_HOUR = 'costPerHour';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const ROUND_TO_NEAREST = 'roundToNearest';

    const MINIMUM_CHARGE = 'minimumCharge';

    protected $_resourceType = ResourceType::INTERVENTION_STAFF_COST;

    /**
     * @param Query $query
     * @return InterventionStaffCost[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION_STAFF_COST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InterventionStaffCost
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION_STAFF_COST, $id);
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
    public function getCostPerHour()
    {
        return $this->getProperty('costPerHour');
    }

    /**
     * @param string $costPerHour
     */
    public function setCostPerHour($costPerHour = null)
    {
        $this->setProperty('costPerHour', $costPerHour);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getRoundToNearest()
    {
        return $this->getProperty('roundToNearest');
    }

    /**
     * @param string $roundToNearest
     */
    public function setRoundToNearest($roundToNearest = null)
    {
        $this->setProperty('roundToNearest', $roundToNearest);
    }

    /**
     * @return string
     */
    public function getMinimumCharge()
    {
        return $this->getProperty('minimumCharge');
    }

    /**
     * @param string $minimumCharge
     */
    public function setMinimumCharge($minimumCharge = null)
    {
        $this->setProperty('minimumCharge', $minimumCharge);
    }


}
