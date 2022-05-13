<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SiteOperatingPeriodException extends ModelBase
{
    const SITE = 'site';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::SITE_OPERATING_PERIOD_EXCEPTION;

    /**
     * @param Query $query
     * @return SiteOperatingPeriodException[] | Collection
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

        $query->setResourceType(ResourceType::SITE_OPERATING_PERIOD_EXCEPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SiteOperatingPeriodException
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SITE_OPERATING_PERIOD_EXCEPTION, $id);
    }

    /**
     * @return Site
     */
    public function getSite()
    {
        return $this->getProperty('site');
    }

    /**
     * @param Site $site
     */
    public function setSite(Site $site = null)
    {
        $this->setProperty('site', $site);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
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
}
