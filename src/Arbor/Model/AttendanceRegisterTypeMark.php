<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AttendanceRegisterTypeMark extends \ModelBase
{
    public const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    public const ATTENDANCE_MARK = 'attendanceMark';

    protected $_resourceType = ResourceType::ATTENDANCE_REGISTER_TYPE_MARK;

    /**
     * @param Query $query
     * @return AttendanceRegisterTypeMark[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ATTENDANCE_REGISTER_TYPE_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceRegisterTypeMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_REGISTER_TYPE_MARK, $id);
    }

    /**
     * @return AttendanceRegisterType
     */
    public function getAttendanceRegisterType()
    {
        return $this->getProperty('attendanceRegisterType');
    }

    /**
     * @param AttendanceRegisterType $attendanceRegisterType
     */
    public function setAttendanceRegisterType(\AttendanceRegisterType $attendanceRegisterType = null)
    {
        $this->setProperty('attendanceRegisterType', $attendanceRegisterType);
    }

    /**
     * @return AttendanceMark
     */
    public function getAttendanceMark()
    {
        return $this->getProperty('attendanceMark');
    }

    /**
     * @param AttendanceMark $attendanceMark
     */
    public function setAttendanceMark(\AttendanceMark $attendanceMark = null)
    {
        $this->setProperty('attendanceMark', $attendanceMark);
    }
}
