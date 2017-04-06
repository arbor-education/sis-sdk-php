<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AttendanceRollCall;

class AttendanceRollCallTime extends ModelBase
{

    const ATTENDANCE_ROLL_CALL = 'attendanceRollCall';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const REGISTER_OPENS_TIME = 'registerOpensTime';

    const REGISTER_CLOSES_TIME = 'registerClosesTime';

    const ROLL_CALL_PERIOD_END_TIME = 'rollCallPeriodEndTime';

    protected $_resourceType = ResourceType::ATTENDANCE_ROLL_CALL_TIME;

    /**
     * @param \Arbor\Query\Query $query
     * @return AttendanceRollCallTime[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AttendanceRollCallTime");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AttendanceRollCallTime
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ATTENDANCE_ROLL_CALL_TIME, $id);
    }

    /**
     * @return AttendanceRollCall
     */
    public function getAttendanceRollCall()
    {
        return $this->getProperty("attendanceRollCall");
    }

    /**
     * @param AttendanceRollCall $attendanceRollCall
     */
    public function setAttendanceRollCall(AttendanceRollCall $attendanceRollCall = null)
    {
        $this->setProperty("attendanceRollCall", $attendanceRollCall);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return string
     */
    public function getRegisterOpensTime()
    {
        return $this->getProperty("registerOpensTime");
    }

    /**
     * @param string $registerOpensTime
     */
    public function setRegisterOpensTime($registerOpensTime = null)
    {
        $this->setProperty("registerOpensTime", $registerOpensTime);
    }

    /**
     * @return string
     */
    public function getRegisterClosesTime()
    {
        return $this->getProperty("registerClosesTime");
    }

    /**
     * @param string $registerClosesTime
     */
    public function setRegisterClosesTime($registerClosesTime = null)
    {
        $this->setProperty("registerClosesTime", $registerClosesTime);
    }

    /**
     * @return string
     */
    public function getRollCallPeriodEndTime()
    {
        return $this->getProperty("rollCallPeriodEndTime");
    }

    /**
     * @param string $rollCallPeriodEndTime
     */
    public function setRollCallPeriodEndTime($rollCallPeriodEndTime = null)
    {
        $this->setProperty("rollCallPeriodEndTime", $rollCallPeriodEndTime);
    }


}
