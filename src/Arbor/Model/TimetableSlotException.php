<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimetableSlotException extends ModelBase
{
    const TIMETABLE_SLOT = 'timetableSlot';

    const EXCEPTION_DATE = 'exceptionDate';

    const NO_EVENT_EXCEPTION = 'noEventException';

    const LOCATION_EXCEPTION = 'locationException';

    const TIME_EXCEPTION = 'timeException';

    protected $_resourceType = ResourceType::TIMETABLE_SLOT_EXCEPTION;

    /**
     * @param Query $query
     * @return TimetableSlotException[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLE_SLOT_EXCEPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetableSlotException
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLE_SLOT_EXCEPTION, $id);
    }

    /**
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
    }

    /**
     * @return \DateTime
     */
    public function getExceptionDate()
    {
        return $this->getProperty('exceptionDate');
    }

    /**
     * @param \DateTime $exceptionDate
     */
    public function setExceptionDate(\DateTime $exceptionDate = null)
    {
        $this->setProperty('exceptionDate', $exceptionDate);
    }

    /**
     * @return bool
     */
    public function getNoEventException()
    {
        return $this->getProperty('noEventException');
    }

    /**
     * @param bool $noEventException
     */
    public function setNoEventException($noEventException = null)
    {
        $this->setProperty('noEventException', $noEventException);
    }

    /**
     * @return bool
     */
    public function getLocationException()
    {
        return $this->getProperty('locationException');
    }

    /**
     * @param bool $locationException
     */
    public function setLocationException($locationException = null)
    {
        $this->setProperty('locationException', $locationException);
    }

    /**
     * @return bool
     */
    public function getTimeException()
    {
        return $this->getProperty('timeException');
    }

    /**
     * @param bool $timeException
     */
    public function setTimeException($timeException = null)
    {
        $this->setProperty('timeException', $timeException);
    }
}
