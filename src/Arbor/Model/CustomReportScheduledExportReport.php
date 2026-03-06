<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomReportScheduledExportReport extends ModelBase
{
    public const CUSTOM_REPORT_SCHEDULED_EXPORT = 'customReportScheduledExport';

    public const CUSTOM_REPORT = 'customReport';

    public const EXPORT_FORMAT = 'exportFormat';

    public const SCHEDULED_TIME = 'scheduledTime';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_REPORT;

    /**
     * @param Query $query
     * @return CustomReportScheduledExportReport[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_REPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportScheduledExportReport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_REPORT, $id);
    }

    /**
     * @return \Arbor\Model\CustomReportScheduledExport
     */
    public function getCustomReportScheduledExport()
    {
        return $this->getProperty('customReportScheduledExport');
    }

    /**
     * @param \Arbor\Model\CustomReportScheduledExport $customReportScheduledExport
     */
    public function setCustomReportScheduledExport(\Arbor\Model\CustomReportScheduledExport $customReportScheduledExport = null)
    {
        $this->setProperty('customReportScheduledExport', $customReportScheduledExport);
    }

    /**
     * @return \Arbor\Model\CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param \Arbor\Model\CustomReport $customReport
     */
    public function setCustomReport(\Arbor\Model\CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return string
     */
    public function getExportFormat()
    {
        return $this->getProperty('exportFormat');
    }

    /**
     * @param string $exportFormat
     */
    public function setExportFormat(string $exportFormat = null)
    {
        $this->setProperty('exportFormat', $exportFormat);
    }

    /**
     * @return string
     */
    public function getScheduledTime()
    {
        return $this->getProperty('scheduledTime');
    }

    /**
     * @param string $scheduledTime
     */
    public function setScheduledTime(string $scheduledTime = null)
    {
        $this->setProperty('scheduledTime', $scheduledTime);
    }
}
