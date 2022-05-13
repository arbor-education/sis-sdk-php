<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AttendanceRegister extends ModelBase
{
    const EVENT = 'event';

    const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    const OPENED_DATETIME = 'openedDatetime';

    const COMPLETED_DATETIME = 'completedDatetime';

    const VALIDATED_DATETIME = 'validatedDatetime';

    const CLOSED_DATETIME = 'closedDatetime';

    protected $_resourceType = ResourceType::ATTENDANCE_REGISTER;

    /**
     * @param Query $query
     * @return AttendanceRegister[] | Collection
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
    public function setEvent(ModelBase $event = null)
    {
        $this->setProperty('event', $event);
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
