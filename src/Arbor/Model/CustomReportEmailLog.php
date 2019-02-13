<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportEmailLog extends ModelBase
{

    const CUSTOM_REPORT = 'customReport';

    const EMAIL_ADDRESS = 'emailAddress';

    const SENT_DATETIME = 'sentDatetime';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_EMAIL_LOG;

    /**
     * @param Query $query
     * @return CustomReportEmailLog[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_EMAIL_LOG);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportEmailLog
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_EMAIL_LOG, $id);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
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

    /**
     * @return \DateTime
     */
    public function getSentDatetime()
    {
        return $this->getProperty('sentDatetime');
    }

    /**
     * @param \DateTime $sentDatetime
     */
    public function setSentDatetime(\DateTime $sentDatetime = null)
    {
        $this->setProperty('sentDatetime', $sentDatetime);
    }


}
