<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InterventionStaffCost extends ModelBase
{
    public const STAFF = 'staff';

    public const COST_PER_HOUR = 'costPerHour';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const ROUND_TO_NEAREST = 'roundToNearest';

    public const MINIMUM_CHARGE = 'minimumCharge';

    protected $_resourceType = ResourceType::INTERVENTION_STAFF_COST;

    /**
     * @param Query $query
     * @return InterventionStaffCost[] | Collection
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
    public function setStaff(\ModelBase $staff = null)
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
    public function setCostPerHour(string $costPerHour = null)
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
    public function setRoundToNearest(string $roundToNearest = null)
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
    public function setMinimumCharge(string $minimumCharge = null)
    {
        $this->setProperty('minimumCharge', $minimumCharge);
    }
}
