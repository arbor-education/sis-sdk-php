<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportScheduledExport extends ModelBase
{
    const EMAIL_ADDRESS = 'emailAddress';

    const SUBJECT = 'subject';

    const BODY = 'body';

    const EXECUTE_ON_MONDAY = 'executeOnMonday';

    const EXECUTE_ON_TUESDAY = 'executeOnTuesday';

    const EXECUTE_ON_WEDNESDAY = 'executeOnWednesday';

    const EXECUTE_ON_THURSDAY = 'executeOnThursday';

    const EXECUTE_ON_FRIDAY = 'executeOnFriday';

    const EXECUTE_ON_SATURDAY = 'executeOnSaturday';

    const EXECUTE_ON_SUNDAY = 'executeOnSunday';

    const SCHEDULED_TIME = 'scheduledTime';

    const SCHEDULED_FROM_DATE = 'scheduledFromDate';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT;

    /**
     * @param Query $query
     * @return CustomReportScheduledExport[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportScheduledExport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT, $id);
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
     * @return string
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->getProperty('body');
    }

    /**
     * @param string $body
     */
    public function setBody($body = null)
    {
        $this->setProperty('body', $body);
    }

    /**
     * @return bool
     */
    public function getExecuteOnMonday()
    {
        return $this->getProperty('executeOnMonday');
    }

    /**
     * @param bool $executeOnMonday
     */
    public function setExecuteOnMonday($executeOnMonday = null)
    {
        $this->setProperty('executeOnMonday', $executeOnMonday);
    }

    /**
     * @return bool
     */
    public function getExecuteOnTuesday()
    {
        return $this->getProperty('executeOnTuesday');
    }

    /**
     * @param bool $executeOnTuesday
     */
    public function setExecuteOnTuesday($executeOnTuesday = null)
    {
        $this->setProperty('executeOnTuesday', $executeOnTuesday);
    }

    /**
     * @return bool
     */
    public function getExecuteOnWednesday()
    {
        return $this->getProperty('executeOnWednesday');
    }

    /**
     * @param bool $executeOnWednesday
     */
    public function setExecuteOnWednesday($executeOnWednesday = null)
    {
        $this->setProperty('executeOnWednesday', $executeOnWednesday);
    }

    /**
     * @return bool
     */
    public function getExecuteOnThursday()
    {
        return $this->getProperty('executeOnThursday');
    }

    /**
     * @param bool $executeOnThursday
     */
    public function setExecuteOnThursday($executeOnThursday = null)
    {
        $this->setProperty('executeOnThursday', $executeOnThursday);
    }

    /**
     * @return bool
     */
    public function getExecuteOnFriday()
    {
        return $this->getProperty('executeOnFriday');
    }

    /**
     * @param bool $executeOnFriday
     */
    public function setExecuteOnFriday($executeOnFriday = null)
    {
        $this->setProperty('executeOnFriday', $executeOnFriday);
    }

    /**
     * @return bool
     */
    public function getExecuteOnSaturday()
    {
        return $this->getProperty('executeOnSaturday');
    }

    /**
     * @param bool $executeOnSaturday
     */
    public function setExecuteOnSaturday($executeOnSaturday = null)
    {
        $this->setProperty('executeOnSaturday', $executeOnSaturday);
    }

    /**
     * @return bool
     */
    public function getExecuteOnSunday()
    {
        return $this->getProperty('executeOnSunday');
    }

    /**
     * @param bool $executeOnSunday
     */
    public function setExecuteOnSunday($executeOnSunday = null)
    {
        $this->setProperty('executeOnSunday', $executeOnSunday);
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
    public function setScheduledTime($scheduledTime = null)
    {
        $this->setProperty('scheduledTime', $scheduledTime);
    }

    /**
     * @return \DateTime
     */
    public function getScheduledFromDate()
    {
        return $this->getProperty('scheduledFromDate');
    }

    /**
     * @param \DateTime $scheduledFromDate
     */
    public function setScheduledFromDate(\DateTime $scheduledFromDate = null)
    {
        $this->setProperty('scheduledFromDate', $scheduledFromDate);
    }
}
