<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceFollowUp extends ModelBase
{
    public const STUDENT = 'student';

    public const ATTENDANCE_DATE = 'attendanceDate';

    public const SENDING_STARTED_DATETIME = 'sendingStartedDatetime';

    public const EMAIL_SENT_DATETIME = 'emailSentDatetime';

    public const EMAIL_FAILED_DATETIME = 'emailFailedDatetime';

    public const SMS_SENT_DATETIME = 'smsSentDatetime';

    public const SMS_FAILED_DATETIME = 'smsFailedDatetime';

    public const TELEPHONE_CALL_DATETIME = 'telephoneCallDatetime';

    protected $_resourceType = ResourceType::ATTENDANCE_FOLLOW_UP;

    /**
     * @param Query $query
     * @return AttendanceFollowUp[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_FOLLOW_UP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceFollowUp
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_FOLLOW_UP, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceDate()
    {
        return $this->getProperty('attendanceDate');
    }

    /**
     * @param \DateTime $attendanceDate
     */
    public function setAttendanceDate(\DateTime $attendanceDate = null)
    {
        $this->setProperty('attendanceDate', $attendanceDate);
    }

    /**
     * @return \DateTime
     */
    public function getSendingStartedDatetime()
    {
        return $this->getProperty('sendingStartedDatetime');
    }

    /**
     * @param \DateTime $sendingStartedDatetime
     */
    public function setSendingStartedDatetime(\DateTime $sendingStartedDatetime = null)
    {
        $this->setProperty('sendingStartedDatetime', $sendingStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEmailSentDatetime()
    {
        return $this->getProperty('emailSentDatetime');
    }

    /**
     * @param \DateTime $emailSentDatetime
     */
    public function setEmailSentDatetime(\DateTime $emailSentDatetime = null)
    {
        $this->setProperty('emailSentDatetime', $emailSentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEmailFailedDatetime()
    {
        return $this->getProperty('emailFailedDatetime');
    }

    /**
     * @param \DateTime $emailFailedDatetime
     */
    public function setEmailFailedDatetime(\DateTime $emailFailedDatetime = null)
    {
        $this->setProperty('emailFailedDatetime', $emailFailedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSmsSentDatetime()
    {
        return $this->getProperty('smsSentDatetime');
    }

    /**
     * @param \DateTime $smsSentDatetime
     */
    public function setSmsSentDatetime(\DateTime $smsSentDatetime = null)
    {
        $this->setProperty('smsSentDatetime', $smsSentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSmsFailedDatetime()
    {
        return $this->getProperty('smsFailedDatetime');
    }

    /**
     * @param \DateTime $smsFailedDatetime
     */
    public function setSmsFailedDatetime(\DateTime $smsFailedDatetime = null)
    {
        $this->setProperty('smsFailedDatetime', $smsFailedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getTelephoneCallDatetime()
    {
        return $this->getProperty('telephoneCallDatetime');
    }

    /**
     * @param \DateTime $telephoneCallDatetime
     */
    public function setTelephoneCallDatetime(\DateTime $telephoneCallDatetime = null)
    {
        $this->setProperty('telephoneCallDatetime', $telephoneCallDatetime);
    }
}
