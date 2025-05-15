<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SiteTravelTime extends ModelBase
{
    public const SITE1 = 'site1';

    public const SITE2 = 'site2';

    public const TRAVEL_TIME = 'travelTime';

    protected $_resourceType = ResourceType::SITE_TRAVEL_TIME;

    /**
     * @param Query $query
     * @return SiteTravelTime[] | Collection
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

        $query->setResourceType(ResourceType::SITE_TRAVEL_TIME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SiteTravelTime
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SITE_TRAVEL_TIME, $id);
    }

    /**
     * @return \Arbor\Model\Site
     */
    public function getSite1()
    {
        return $this->getProperty('site1');
    }

    /**
     * @param \Arbor\Model\Site $site1
     */
    public function setSite1(\Arbor\Model\Site $site1 = null)
    {
        $this->setProperty('site1', $site1);
    }

    /**
     * @return \Arbor\Model\Site
     */
    public function getSite2()
    {
        return $this->getProperty('site2');
    }

    /**
     * @param \Arbor\Model\Site $site2
     */
    public function setSite2(\Arbor\Model\Site $site2 = null)
    {
        $this->setProperty('site2', $site2);
    }

    /**
     * @return int
     */
    public function getTravelTime()
    {
        return $this->getProperty('travelTime');
    }

    /**
     * @param int $travelTime
     */
    public function setTravelTime(int $travelTime = null)
    {
        $this->setProperty('travelTime', $travelTime);
    }
}
