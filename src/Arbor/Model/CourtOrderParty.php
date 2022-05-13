<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CourtOrderParty extends ModelBase
{
    const COURT_ORDER = 'courtOrder';

    const PARTY = 'party';

    protected $_resourceType = ResourceType::COURT_ORDER_PARTY;

    /**
     * @param Query $query
     * @return CourtOrderParty[] | Collection
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

        $query->setResourceType(ResourceType::COURT_ORDER_PARTY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CourtOrderParty
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COURT_ORDER_PARTY, $id);
    }

    /**
     * @return CourtOrder
     */
    public function getCourtOrder()
    {
        return $this->getProperty('courtOrder');
    }

    /**
     * @param CourtOrder $courtOrder
     */
    public function setCourtOrder(CourtOrder $courtOrder = null)
    {
        $this->setProperty('courtOrder', $courtOrder);
    }

    /**
     * @return ModelBase
     */
    public function getParty()
    {
        return $this->getProperty('party');
    }

    /**
     * @param ModelBase $party
     */
    public function setParty(ModelBase $party = null)
    {
        $this->setProperty('party', $party);
    }

}
