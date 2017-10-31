<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InsightReport extends ModelBase
{

    const REPORT_TYPE = 'reportType';

    const SUB_REPORT_TYPE = 'subReportType';

    const PERIOD = 'period';

    const REPORT_TITLE = 'reportTitle';

    const GENERATED_DATETIME = 'generatedDatetime';

    const QUEUED_DATETIME = 'queuedDatetime';

    const REPORT_FILE = 'reportFile';

    protected $_resourceType = ResourceType::INSIGHT_REPORT;

    /**
     * @param Query $query
     * @return InsightReport[] | Collection
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

        $query->setResourceType(ResourceType::INSIGHT_REPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InsightReport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INSIGHT_REPORT, $id);
    }

    /**
     * @return string
     */
    public function getReportType()
    {
        return $this->getProperty('reportType');
    }

    /**
     * @param string $reportType
     */
    public function setReportType($reportType = null)
    {
        $this->setProperty('reportType', $reportType);
    }

    /**
     * @return string
     */
    public function getSubReportType()
    {
        return $this->getProperty('subReportType');
    }

    /**
     * @param string $subReportType
     */
    public function setSubReportType($subReportType = null)
    {
        $this->setProperty('subReportType', $subReportType);
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->getProperty('period');
    }

    /**
     * @param string $period
     */
    public function setPeriod($period = null)
    {
        $this->setProperty('period', $period);
    }

    /**
     * @return string
     */
    public function getReportTitle()
    {
        return $this->getProperty('reportTitle');
    }

    /**
     * @param string $reportTitle
     */
    public function setReportTitle($reportTitle = null)
    {
        $this->setProperty('reportTitle', $reportTitle);
    }

    /**
     * @return \DateTime
     */
    public function getGeneratedDatetime()
    {
        return $this->getProperty('generatedDatetime');
    }

    /**
     * @param \DateTime $generatedDatetime
     */
    public function setGeneratedDatetime(\DateTime $generatedDatetime = null)
    {
        $this->setProperty('generatedDatetime', $generatedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getQueuedDatetime()
    {
        return $this->getProperty('queuedDatetime');
    }

    /**
     * @param \DateTime $queuedDatetime
     */
    public function setQueuedDatetime(\DateTime $queuedDatetime = null)
    {
        $this->setProperty('queuedDatetime', $queuedDatetime);
    }

    /**
     * @return File
     */
    public function getReportFile()
    {
        return $this->getProperty('reportFile');
    }

    /**
     * @param File $reportFile
     */
    public function setReportFile(File $reportFile = null)
    {
        $this->setProperty('reportFile', $reportFile);
    }


}
