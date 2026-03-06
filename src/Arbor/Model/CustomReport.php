<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomReport extends ModelBase
{
    public const TITLE = 'title';

    public const REPORT_CLASS = 'reportClass';

    public const LAST_ACCESS_DATETIME = 'lastAccessDatetime';

    public const LAST_DB_QUERIES = 'lastDbQueries';

    public const LAST_DB_TIME = 'lastDbTime';

    public const LAST_TOTAL_TIME = 'lastTotalTime';

    public const SETUP_COMPLETED_DATETIME = 'setupCompletedDatetime';

    public const TRANSIENT = 'transient';

    public const IS_ARCHIVED = 'isArchived';

    protected $_resourceType = ResourceType::CUSTOM_REPORT;

    /**
     * @param Query $query
     * @return CustomReport[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT, $id);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return string
     */
    public function getReportClass()
    {
        return $this->getProperty('reportClass');
    }

    /**
     * @param string $reportClass
     */
    public function setReportClass(string $reportClass = null)
    {
        $this->setProperty('reportClass', $reportClass);
    }

    /**
     * @return \DateTime
     */
    public function getLastAccessDatetime()
    {
        return $this->getProperty('lastAccessDatetime');
    }

    /**
     * @param \DateTime $lastAccessDatetime
     */
    public function setLastAccessDatetime(\DateTime $lastAccessDatetime = null)
    {
        $this->setProperty('lastAccessDatetime', $lastAccessDatetime);
    }

    /**
     * @return int
     */
    public function getLastDbQueries()
    {
        return $this->getProperty('lastDbQueries');
    }

    /**
     * @param int $lastDbQueries
     */
    public function setLastDbQueries(int $lastDbQueries = null)
    {
        $this->setProperty('lastDbQueries', $lastDbQueries);
    }

    /**
     * @return float
     */
    public function getLastDbTime()
    {
        return $this->getProperty('lastDbTime');
    }

    /**
     * @param float $lastDbTime
     */
    public function setLastDbTime(float $lastDbTime = null)
    {
        $this->setProperty('lastDbTime', $lastDbTime);
    }

    /**
     * @return float
     */
    public function getLastTotalTime()
    {
        return $this->getProperty('lastTotalTime');
    }

    /**
     * @param float $lastTotalTime
     */
    public function setLastTotalTime(float $lastTotalTime = null)
    {
        $this->setProperty('lastTotalTime', $lastTotalTime);
    }

    /**
     * @return \DateTime
     */
    public function getSetupCompletedDatetime()
    {
        return $this->getProperty('setupCompletedDatetime');
    }

    /**
     * @param \DateTime $setupCompletedDatetime
     */
    public function setSetupCompletedDatetime(\DateTime $setupCompletedDatetime = null)
    {
        $this->setProperty('setupCompletedDatetime', $setupCompletedDatetime);
    }

    /**
     * @return bool
     */
    public function getTransient()
    {
        return $this->getProperty('transient');
    }

    /**
     * @param bool $transient
     */
    public function setTransient(bool $transient = null)
    {
        $this->setProperty('transient', $transient);
    }

    /**
     * @return bool
     */
    public function getIsArchived()
    {
        return $this->getProperty('isArchived');
    }

    /**
     * @param bool $isArchived
     */
    public function setIsArchived(bool $isArchived = null)
    {
        $this->setProperty('isArchived', $isArchived);
    }
}
