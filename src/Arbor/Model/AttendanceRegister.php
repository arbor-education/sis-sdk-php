<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceRegister extends ModelBase
{
    public const EVENT = 'event';

    public const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    public const OPENED_DATETIME = 'openedDatetime';

    public const COMPLETED_DATETIME = 'completedDatetime';

    public const VALIDATED_DATETIME = 'validatedDatetime';

    public const CLOSED_DATETIME = 'closedDatetime';

    protected $_resourceType = ResourceType::ATTENDANCE_REGISTER;

    /**
     * @param Query $query
     * @return AttendanceRegister[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_REGISTER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceRegister
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_REGISTER, $id);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(\ModelBase $event = null)
    {
        $this->setProperty('event', $event);
    }

    /**
     * @return \Arbor\Model\AttendanceRegisterType
     */
    public function getAttendanceRegisterType()
    {
        return $this->getProperty('attendanceRegisterType');
    }

    /**
     * @param \Arbor\Model\AttendanceRegisterType $attendanceRegisterType
     */
    public function setAttendanceRegisterType(\Arbor\Model\AttendanceRegisterType $attendanceRegisterType = null)
    {
        $this->setProperty('attendanceRegisterType', $attendanceRegisterType);
    }

    /**
     * @return \DateTime
     */
    public function getOpenedDatetime()
    {
        return $this->getProperty('openedDatetime');
    }

    /**
     * @param \DateTime $openedDatetime
     */
    public function setOpenedDatetime(\DateTime $openedDatetime = null)
    {
        $this->setProperty('openedDatetime', $openedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getValidatedDatetime()
    {
        return $this->getProperty('validatedDatetime');
    }

    /**
     * @param \DateTime $validatedDatetime
     */
    public function setValidatedDatetime(\DateTime $validatedDatetime = null)
    {
        $this->setProperty('validatedDatetime', $validatedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getClosedDatetime()
    {
        return $this->getProperty('closedDatetime');
    }

    /**
     * @param \DateTime $closedDatetime
     */
    public function setClosedDatetime(\DateTime $closedDatetime = null)
    {
        $this->setProperty('closedDatetime', $closedDatetime);
    }
}
