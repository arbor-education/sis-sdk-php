<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomReportScheduledExportRecipient extends ModelBase
{
    public const CUSTOM_REPORT_SCHEDULED_EXPORT = 'customReportScheduledExport';

    public const STAFF = 'staff';

    public const EMAIL_REPORT_STAFF = 'emailReportStaff';

    public const EMAIL_ADDRESS = 'emailAddress';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_RECIPIENT;

    /**
     * @param Query $query
     * @return CustomReportScheduledExportRecipient[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportScheduledExportRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_RECIPIENT, $id);
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
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getEmailReportStaff()
    {
        return $this->getProperty('emailReportStaff');
    }

    /**
     * @param \Arbor\Model\Staff $emailReportStaff
     */
    public function setEmailReportStaff(\Arbor\Model\Staff $emailReportStaff = null)
    {
        $this->setProperty('emailReportStaff', $emailReportStaff);
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->getProperty('emailAddress');
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress(string $emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
    }
}
