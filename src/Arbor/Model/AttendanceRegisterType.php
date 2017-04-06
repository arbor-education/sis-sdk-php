<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class AttendanceRegisterType extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ATTENDANCE_REGISTER_TYPE_NAME = 'attendanceRegisterTypeName';

    const IS_MORNING = 'isMorning';

    const IS_AFTERNOON = 'isAfternoon';

    protected $_resourceType = ResourceType::ATTENDANCE_REGISTER_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return AttendanceRegisterType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AttendanceRegisterType");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AttendanceRegisterType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ATTENDANCE_REGISTER_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getAttendanceRegisterTypeName()
    {
        return $this->getProperty("attendanceRegisterTypeName");
    }

    /**
     * @param string $attendanceRegisterTypeName
     */
    public function setAttendanceRegisterTypeName($attendanceRegisterTypeName = null)
    {
        $this->setProperty("attendanceRegisterTypeName", $attendanceRegisterTypeName);
    }

    /**
     * @return bool
     */
    public function getIsMorning()
    {
        return $this->getProperty("isMorning");
    }

    /**
     * @param bool $isMorning
     */
    public function setIsMorning($isMorning = null)
    {
        $this->setProperty("isMorning", $isMorning);
    }

    /**
     * @return bool
     */
    public function getIsAfternoon()
    {
        return $this->getProperty("isAfternoon");
    }

    /**
     * @param bool $isAfternoon
     */
    public function setIsAfternoon($isAfternoon = null)
    {
        $this->setProperty("isAfternoon", $isAfternoon);
    }


}
