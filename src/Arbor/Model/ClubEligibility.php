<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Club;

class ClubEligibility extends ModelBase
{
    const CLUB = 'club';

    const ELIGIBLE = 'eligible';

    protected $_resourceType = ResourceType::CLUB_ELIGIBILITY;

    /**
     * @param \Arbor\Query\Query $query
     * @return ClubEligibility[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ClubEligibility");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ClubEligibility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CLUB_ELIGIBILITY, $id);
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->getProperty("club");
    }

    /**
     * @param Club $club
     */
    public function setClub(Club $club = null)
    {
        $this->setProperty("club", $club);
    }

    /**
     * @return ModelBase
     */
    public function getEligible()
    {
        return $this->getProperty("eligible");
    }

    /**
     * @param ModelBase $eligible
     */
    public function setEligible(ModelBase $eligible = null)
    {
        $this->setProperty("eligible", $eligible);
    }
}
