<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AttendancePattern extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ATTENDANCE_PATTERN_NAME = 'attendancePatternName';

    const IS_PART_TIME = 'isPartTime';

    const IS_MORNING_ONLY = 'isMorningOnly';

    const IS_AFTERNOON_ONLY = 'isAfternoonOnly';

    protected $_resourceType = ResourceType::ATTENDANCE_PATTERN;

    /**
     * @param Query $query
     * @return AttendancePattern[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_PATTERN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendancePattern
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_PATTERN, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getAttendancePatternName()
    {
        return $this->getProperty('attendancePatternName');
    }

    /**
     * @param string $attendancePatternName
     */
    public function setAttendancePatternName($attendancePatternName = null)
    {
        $this->setProperty('attendancePatternName', $attendancePatternName);
    }

    /**
     * @return bool
     */
    public function getIsPartTime()
    {
        return $this->getProperty('isPartTime');
    }

    /**
     * @param bool $isPartTime
     */
    public function setIsPartTime($isPartTime = null)
    {
        $this->setProperty('isPartTime', $isPartTime);
    }

    /**
     * @return bool
     */
    public function getIsMorningOnly()
    {
        return $this->getProperty('isMorningOnly');
    }

    /**
     * @param bool $isMorningOnly
     */
    public function setIsMorningOnly($isMorningOnly = null)
    {
        $this->setProperty('isMorningOnly', $isMorningOnly);
    }

    /**
     * @return bool
     */
    public function getIsAfternoonOnly()
    {
        return $this->getProperty('isAfternoonOnly');
    }

    /**
     * @param bool $isAfternoonOnly
     */
    public function setIsAfternoonOnly($isAfternoonOnly = null)
    {
        $this->setProperty('isAfternoonOnly', $isAfternoonOnly);
    }


}
