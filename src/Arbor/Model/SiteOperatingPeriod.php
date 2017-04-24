<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Site;

class SiteOperatingPeriod extends ModelBase
{
    const SITE = 'site';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    protected $_resourceType = ResourceType::SITE_OPERATING_PERIOD;

    /**
     * @param \Arbor\Query\Query $query
     * @return SiteOperatingPeriod[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("SiteOperatingPeriod");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SiteOperatingPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::SITE_OPERATING_PERIOD, $id);
    }

    /**
     * @return Site
     */
    public function getSite()
    {
        return $this->getProperty("site");
    }

    /**
     * @param Site $site
     */
    public function setSite(Site $site = null)
    {
        $this->setProperty("site", $site);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return int
     */
    public function getDayOfCycle()
    {
        return $this->getProperty("dayOfCycle");
    }

    /**
     * @param int $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle = null)
    {
        $this->setProperty("dayOfCycle", $dayOfCycle);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty("startTime");
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty("startTime", $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty("endTime");
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty("endTime", $endTime);
    }
}
