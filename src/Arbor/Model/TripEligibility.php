<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TripEligibility extends ModelBase
{
    public const TRIP = 'trip';

    public const ELIGIBILE = 'eligibile';

    protected $_resourceType = ResourceType::TRIP_ELIGIBILITY;

    /**
     * @param Query $query
     * @return TripEligibility[] | Collection
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

        $query->setResourceType(ResourceType::TRIP_ELIGIBILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TripEligibility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRIP_ELIGIBILITY, $id);
    }

    /**
     * @return \Arbor\Model\Trip
     */
    public function getTrip()
    {
        return $this->getProperty('trip');
    }

    /**
     * @param \Arbor\Model\Trip $trip
     */
    public function setTrip(\Arbor\Model\Trip $trip = null)
    {
        $this->setProperty('trip', $trip);
    }

    /**
     * @return ModelBase
     */
    public function getEligibile()
    {
        return $this->getProperty('eligibile');
    }

    /**
     * @param ModelBase $eligibile
     */
    public function setEligibile(\ModelBase $eligibile = null)
    {
        $this->setProperty('eligibile', $eligibile);
    }
}
