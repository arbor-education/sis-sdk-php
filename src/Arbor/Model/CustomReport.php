<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class CustomReport extends ModelBase
{

    const TITLE = 'title';

    const REPORT_CLASS = 'reportClass';

    const LAST_ACCESS_DATETIME = 'lastAccessDatetime';

    const LAST_DB_QUERIES = 'lastDbQueries';

    const LAST_DB_TIME = 'lastDbTime';

    const LAST_TOTAL_TIME = 'lastTotalTime';

    protected $_resourceType = ResourceType::CUSTOM_REPORT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomReport[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CustomReport");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomReport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CUSTOM_REPORT, $id);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty("title");
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty("title", $title);
    }

    /**
     * @return string
     */
    public function getReportClass()
    {
        return $this->getProperty("reportClass");
    }

    /**
     * @param string $reportClass
     */
    public function setReportClass($reportClass = null)
    {
        $this->setProperty("reportClass", $reportClass);
    }

    /**
     * @return \DateTime
     */
    public function getLastAccessDatetime()
    {
        return $this->getProperty("lastAccessDatetime");
    }

    /**
     * @param \DateTime $lastAccessDatetime
     */
    public function setLastAccessDatetime(\DateTime $lastAccessDatetime = null)
    {
        $this->setProperty("lastAccessDatetime", $lastAccessDatetime);
    }

    /**
     * @return int
     */
    public function getLastDbQueries()
    {
        return $this->getProperty("lastDbQueries");
    }

    /**
     * @param int $lastDbQueries
     */
    public function setLastDbQueries($lastDbQueries = null)
    {
        $this->setProperty("lastDbQueries", $lastDbQueries);
    }

    /**
     * @return float
     */
    public function getLastDbTime()
    {
        return $this->getProperty("lastDbTime");
    }

    /**
     * @param float $lastDbTime
     */
    public function setLastDbTime($lastDbTime = null)
    {
        $this->setProperty("lastDbTime", $lastDbTime);
    }

    /**
     * @return float
     */
    public function getLastTotalTime()
    {
        return $this->getProperty("lastTotalTime");
    }

    /**
     * @param float $lastTotalTime
     */
    public function setLastTotalTime($lastTotalTime = null)
    {
        $this->setProperty("lastTotalTime", $lastTotalTime);
    }


}
