<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AttendanceRollCallTimeGroup extends \ModelBase
{
    public const ATTENDANCE_ROLL_CALL_TIME = 'attendanceRollCallTime';

    public const STUDENT_GROUP = 'studentGroup';

    protected $_resourceType = ResourceType::ATTENDANCE_ROLL_CALL_TIME_GROUP;

    /**
     * @param Query $query
     * @return AttendanceRollCallTimeGroup[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_ROLL_CALL_TIME_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceRollCallTimeGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_ROLL_CALL_TIME_GROUP, $id);
    }

    /**
     * @return AttendanceRollCallTime
     */
    public function getAttendanceRollCallTime()
    {
        return $this->getProperty('attendanceRollCallTime');
    }

    /**
     * @param AttendanceRollCallTime $attendanceRollCallTime
     */
    public function setAttendanceRollCallTime(\AttendanceRollCallTime $attendanceRollCallTime = null)
    {
        $this->setProperty('attendanceRollCallTime', $attendanceRollCallTime);
    }

    /**
     * @return ModelBase
     */
    public function getStudentGroup()
    {
        return $this->getProperty('studentGroup');
    }

    /**
     * @param ModelBase $studentGroup
     */
    public function setStudentGroup(\ModelBase $studentGroup = null)
    {
        $this->setProperty('studentGroup', $studentGroup);
    }
}
