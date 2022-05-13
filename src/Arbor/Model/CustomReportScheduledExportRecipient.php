<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportScheduledExportRecipient extends ModelBase
{
    const CUSTOM_REPORT_SCHEDULED_EXPORT = 'customReportScheduledExport';

    const STAFF = 'staff';

    const EMAIL_ADDRESS = 'emailAddress';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT_RECIPIENT;

    /**
     * @param Query $query
     * @return CustomReportScheduledExportRecipient[] | Collection
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
     * @return CustomReportScheduledExport
     */
    public function getCustomReportScheduledExport()
    {
        return $this->getProperty('customReportScheduledExport');
    }

    /**
     * @param CustomReportScheduledExport $customReportScheduledExport
     */
    public function setCustomReportScheduledExport(CustomReportScheduledExport $customReportScheduledExport = null)
    {
        $this->setProperty('customReportScheduledExport', $customReportScheduledExport);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
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
    public function setEmailAddress($emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
    }
}
