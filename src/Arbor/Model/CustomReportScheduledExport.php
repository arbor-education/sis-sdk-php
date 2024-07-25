<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomReportScheduledExport extends ModelBase
{
    public const EMAIL_ADDRESS = 'emailAddress';

    public const SUBJECT = 'subject';

    public const BODY = 'body';

    public const EXECUTE_ON_MONDAY = 'executeOnMonday';

    public const EXECUTE_ON_TUESDAY = 'executeOnTuesday';

    public const EXECUTE_ON_WEDNESDAY = 'executeOnWednesday';

    public const EXECUTE_ON_THURSDAY = 'executeOnThursday';

    public const EXECUTE_ON_FRIDAY = 'executeOnFriday';

    public const EXECUTE_ON_SATURDAY = 'executeOnSaturday';

    public const EXECUTE_ON_SUNDAY = 'executeOnSunday';

    public const SCHEDULED_TIME = 'scheduledTime';

    public const SCHEDULED_FROM_DATE = 'scheduledFromDate';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCHEDULED_EXPORT;

    /**
     * @param Query $query
     * @return CustomReportScheduledExport[] | Collection
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
    public function setEmailAddress(string $emailAddress = null)
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
    public function setSubject(string $subject = null)
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
    public function setBody(string $body = null)
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
    public function setExecuteOnMonday(bool $executeOnMonday = null)
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
    public function setExecuteOnTuesday(bool $executeOnTuesday = null)
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
    public function setExecuteOnWednesday(bool $executeOnWednesday = null)
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
    public function setExecuteOnThursday(bool $executeOnThursday = null)
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
    public function setExecuteOnFriday(bool $executeOnFriday = null)
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
    public function setExecuteOnSaturday(bool $executeOnSaturday = null)
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
    public function setExecuteOnSunday(bool $executeOnSunday = null)
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
    public function setScheduledTime(string $scheduledTime = null)
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
