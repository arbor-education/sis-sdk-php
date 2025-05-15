<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceRollCallTime extends ModelBase
{
    public const ATTENDANCE_ROLL_CALL = 'attendanceRollCall';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const REGISTER_OPENS_TIME = 'registerOpensTime';

    public const REGISTER_CLOSES_TIME = 'registerClosesTime';

    public const ROLL_CALL_PERIOD_END_TIME = 'rollCallPeriodEndTime';

    protected $_resourceType = ResourceType::ATTENDANCE_ROLL_CALL_TIME;

    /**
     * @param Query $query
     * @return AttendanceRollCallTime[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_ROLL_CALL_TIME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceRollCallTime
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_ROLL_CALL_TIME, $id);
    }

    /**
     * @return \Arbor\Model\AttendanceRollCall
     */
    public function getAttendanceRollCall()
    {
        return $this->getProperty('attendanceRollCall');
    }

    /**
     * @param \Arbor\Model\AttendanceRollCall $attendanceRollCall
     */
    public function setAttendanceRollCall(\Arbor\Model\AttendanceRollCall $attendanceRollCall = null)
    {
        $this->setProperty('attendanceRollCall', $attendanceRollCall);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getRegisterOpensTime()
    {
        return $this->getProperty('registerOpensTime');
    }

    /**
     * @param string $registerOpensTime
     */
    public function setRegisterOpensTime(string $registerOpensTime = null)
    {
        $this->setProperty('registerOpensTime', $registerOpensTime);
    }

    /**
     * @return string
     */
    public function getRegisterClosesTime()
    {
        return $this->getProperty('registerClosesTime');
    }

    /**
     * @param string $registerClosesTime
     */
    public function setRegisterClosesTime(string $registerClosesTime = null)
    {
        $this->setProperty('registerClosesTime', $registerClosesTime);
    }

    /**
     * @return string
     */
    public function getRollCallPeriodEndTime()
    {
        return $this->getProperty('rollCallPeriodEndTime');
    }

    /**
     * @param string $rollCallPeriodEndTime
     */
    public function setRollCallPeriodEndTime(string $rollCallPeriodEndTime = null)
    {
        $this->setProperty('rollCallPeriodEndTime', $rollCallPeriodEndTime);
    }
}
