<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CourtOrder;

class CourtOrderParty extends ModelBase
{

    const COURT_ORDER = 'courtOrder';

    const PARTY = 'party';

    protected $_resourceType = ResourceType::COURT_ORDER_PARTY;

    /**
     * @param \Arbor\Query\Query $query
     * @return CourtOrderParty[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CourtOrderParty");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CourtOrderParty
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::COURT_ORDER_PARTY, $id);
    }

    /**
     * @return CourtOrder
     */
    public function getCourtOrder()
    {
        return $this->getProperty("courtOrder");
    }

    /**
     * @param CourtOrder $courtOrder
     */
    public function setCourtOrder(CourtOrder $courtOrder = null)
    {
        $this->setProperty("courtOrder", $courtOrder);
    }

    /**
     * @return ModelBase
     */
    public function getParty()
    {
        return $this->getProperty("party");
    }

    /**
     * @param ModelBase $party
     */
    public function setParty(ModelBase $party = null)
    {
        $this->setProperty("party", $party);
    }


}
