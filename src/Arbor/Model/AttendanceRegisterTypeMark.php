<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AttendanceRegisterType;
use \Arbor\Model\AttendanceMark;

class AttendanceRegisterTypeMark extends ModelBase
{

    const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    const ATTENDANCE_MARK = 'attendanceMark';

    protected $_resourceType = ResourceType::ATTENDANCE_REGISTER_TYPE_MARK;

    /**
     * @param \Arbor\Query\Query $query
     * @return AttendanceRegisterTypeMark[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AttendanceRegisterTypeMark");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AttendanceRegisterTypeMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ATTENDANCE_REGISTER_TYPE_MARK, $id);
    }

    /**
     * @return AttendanceRegisterType
     */
    public function getAttendanceRegisterType()
    {
        return $this->getProperty("attendanceRegisterType");
    }

    /**
     * @param AttendanceRegisterType $attendanceRegisterType
     */
    public function setAttendanceRegisterType(AttendanceRegisterType $attendanceRegisterType = null)
    {
        $this->setProperty("attendanceRegisterType", $attendanceRegisterType);
    }

    /**
     * @return AttendanceMark
     */
    public function getAttendanceMark()
    {
        return $this->getProperty("attendanceMark");
    }

    /**
     * @param AttendanceMark $attendanceMark
     */
    public function setAttendanceMark(AttendanceMark $attendanceMark = null)
    {
        $this->setProperty("attendanceMark", $attendanceMark);
    }


}
