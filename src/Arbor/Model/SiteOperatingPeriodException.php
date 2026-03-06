<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SiteOperatingPeriodException extends ModelBase
{
    public const SITE = 'site';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::SITE_OPERATING_PERIOD_EXCEPTION;

    /**
     * @param Query $query
     * @return SiteOperatingPeriodException[] | Collection
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
     * @return \Arbor\Model\Site
     */
    public function getSite()
    {
        return $this->getProperty('site');
    }

    /**
     * @param \Arbor\Model\Site $site
     */
    public function setSite(\Arbor\Model\Site $site = null)
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
