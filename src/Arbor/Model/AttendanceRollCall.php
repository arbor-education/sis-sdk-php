<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AttendanceRollCall extends ModelBase
{
    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const AUTO_FILL_CLASS = 'autoFillClass';

    const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::ATTENDANCE_ROLL_CALL;

    /**
     * @param Query $query
     * @return AttendanceRollCall[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_ROLL_CALL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceRollCall
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_ROLL_CALL, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getAutoFillClass()
    {
        return $this->getProperty('autoFillClass');
    }

    /**
     * @param string $autoFillClass
     */
    public function setAutoFillClass($autoFillClass = null)
    {
        $this->setProperty('autoFillClass', $autoFillClass);
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
    public function setAttendanceRegisterType(AttendanceRegisterType $attendanceRegisterType = null)
    {
        $this->setProperty('attendanceRegisterType', $attendanceRegisterType);
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

}
