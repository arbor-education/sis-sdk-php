<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Site;

class SiteTravelTime extends ModelBase
{
    const SITE1 = 'site1';

    const SITE2 = 'site2';

    const TRAVEL_TIME = 'travelTime';

    protected $_resourceType = ResourceType::SITE_TRAVEL_TIME;

    /**
     * @param \Arbor\Query\Query $query
     * @return SiteTravelTime[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("SiteTravelTime");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SiteTravelTime
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::SITE_TRAVEL_TIME, $id);
    }

    /**
     * @return Site
     */
    public function getSite1()
    {
        return $this->getProperty("site1");
    }

    /**
     * @param Site $site1
     */
    public function setSite1(Site $site1 = null)
    {
        $this->setProperty("site1", $site1);
    }

    /**
     * @return Site
     */
    public function getSite2()
    {
        return $this->getProperty("site2");
    }

    /**
     * @param Site $site2
     */
    public function setSite2(Site $site2 = null)
    {
        $this->setProperty("site2", $site2);
    }

    /**
     * @return int
     */
    public function getTravelTime()
    {
        return $this->getProperty("travelTime");
    }

    /**
     * @param int $travelTime
     */
    public function setTravelTime($travelTime = null)
    {
        $this->setProperty("travelTime", $travelTime);
    }
}
