<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Trip;

class TripEligibility extends ModelBase
{

    const TRIP = 'trip';

    const ELIGIBILE = 'eligibile';

    protected $_resourceType = ResourceType::TRIP_ELIGIBILITY;

    /**
     * @param \Arbor\Query\Query $query
     * @return TripEligibility[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("TripEligibility");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TripEligibility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::TRIP_ELIGIBILITY, $id);
    }

    /**
     * @return Trip
     */
    public function getTrip()
    {
        return $this->getProperty("trip");
    }

    /**
     * @param Trip $trip
     */
    public function setTrip(Trip $trip = null)
    {
        $this->setProperty("trip", $trip);
    }

    /**
     * @return ModelBase
     */
    public function getEligibile()
    {
        return $this->getProperty("eligibile");
    }

    /**
     * @param ModelBase $eligibile
     */
    public function setEligibile(ModelBase $eligibile = null)
    {
        $this->setProperty("eligibile", $eligibile);
    }


}
