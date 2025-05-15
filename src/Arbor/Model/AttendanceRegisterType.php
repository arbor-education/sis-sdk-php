<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceRegisterType extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ATTENDANCE_REGISTER_TYPE_NAME = 'attendanceRegisterTypeName';

    public const IS_MORNING = 'isMorning';

    public const IS_AFTERNOON = 'isAfternoon';

    public const EVENT_OBJECT_TYPE_ID = 'eventObjectTypeId';

    protected $_resourceType = ResourceType::ATTENDANCE_REGISTER_TYPE;

    /**
     * @param Query $query
     * @return AttendanceRegisterType[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_REGISTER_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceRegisterType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_REGISTER_TYPE, $id);
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
    public function setCode(string $code = null)
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
    public function setActive(bool $active = null)
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
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getAttendanceRegisterTypeName()
    {
        return $this->getProperty('attendanceRegisterTypeName');
    }

    /**
     * @param string $attendanceRegisterTypeName
     */
    public function setAttendanceRegisterTypeName(string $attendanceRegisterTypeName = null)
    {
        $this->setProperty('attendanceRegisterTypeName', $attendanceRegisterTypeName);
    }

    /**
     * @return bool
     */
    public function getIsMorning()
    {
        return $this->getProperty('isMorning');
    }

    /**
     * @param bool $isMorning
     */
    public function setIsMorning(bool $isMorning = null)
    {
        $this->setProperty('isMorning', $isMorning);
    }

    /**
     * @return bool
     */
    public function getIsAfternoon()
    {
        return $this->getProperty('isAfternoon');
    }

    /**
     * @param bool $isAfternoon
     */
    public function setIsAfternoon(bool $isAfternoon = null)
    {
        $this->setProperty('isAfternoon', $isAfternoon);
    }

    /**
     * @return int
     */
    public function getEventObjectTypeId()
    {
        return $this->getProperty('eventObjectTypeId');
    }

    /**
     * @param int $eventObjectTypeId
     */
    public function setEventObjectTypeId(int $eventObjectTypeId = null)
    {
        $this->setProperty('eventObjectTypeId', $eventObjectTypeId);
    }
}
