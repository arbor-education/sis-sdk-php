<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CourtOrderParty extends ModelBase
{
    public const COURT_ORDER = 'courtOrder';

    public const PARTY = 'party';

    protected $_resourceType = ResourceType::COURT_ORDER_PARTY;

    /**
     * @param Query $query
     * @return CourtOrderParty[] | Collection
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
     * @return \Arbor\Model\CourtOrder
     */
    public function getCourtOrder()
    {
        return $this->getProperty('courtOrder');
    }

    /**
     * @param \Arbor\Model\CourtOrder $courtOrder
     */
    public function setCourtOrder(\Arbor\Model\CourtOrder $courtOrder = null)
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
    public function setParty(\ModelBase $party = null)
    {
        $this->setProperty('party', $party);
    }
}
