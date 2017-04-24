<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomReportScheduledExport;
use \Arbor\Model\CustomReport;

class CustomReportScheduledExportReport extends ModelBase
{
    const CUSTOM_REPORT_SCHEDULED_EXPORT = 'customReportScheduledExport';

    const CUSTOM_REPORT = 'customReport';

    const EXPORT_FORMAT = 'exportFormat';

    const SCHEDULED_TIME = 'scheduledTime';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_REPORT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomReportScheduledExportReport[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CustomReportScheduledExportReport");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomReportScheduledExportReport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_REPORT, $id);
    }

    /**
     * @return CustomReportScheduledExport
     */
    public function getCustomReportScheduledExport()
    {
        return $this->getProperty("customReportScheduledExport");
    }

    /**
     * @param CustomReportScheduledExport $customReportScheduledExport
     */
    public function setCustomReportScheduledExport(CustomReportScheduledExport $customReportScheduledExport = null)
    {
        $this->setProperty("customReportScheduledExport", $customReportScheduledExport);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty("customReport");
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty("customReport", $customReport);
    }

    /**
     * @return string
     */
    public function getExportFormat()
    {
        return $this->getProperty("exportFormat");
    }

    /**
     * @param string $exportFormat
     */
    public function setExportFormat($exportFormat = null)
    {
        $this->setProperty("exportFormat", $exportFormat);
    }

    /**
     * @return string
     */
    public function getScheduledTime()
    {
        return $this->getProperty("scheduledTime");
    }

    /**
     * @param string $scheduledTime
     */
    public function setScheduledTime($scheduledTime = null)
    {
        $this->setProperty("scheduledTime", $scheduledTime);
    }
}
