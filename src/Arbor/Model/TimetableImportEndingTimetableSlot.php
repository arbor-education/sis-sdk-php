<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TimetableImportEndingTimetableSlot extends ModelBase
{
    public const TIMETABLE_IMPORT_JOB = 'timetableImportJob';

    public const TIMETABLE_SLOT = 'timetableSlot';

    public const SCHEDULE_STATUS = 'scheduleStatus';

    protected $_resourceType = ResourceType::TIMETABLE_IMPORT_ENDING_TIMETABLE_SLOT;

    /**
     * @param Query $query
     * @return TimetableImportEndingTimetableSlot[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLE_IMPORT_ENDING_TIMETABLE_SLOT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetableImportEndingTimetableSlot
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLE_IMPORT_ENDING_TIMETABLE_SLOT, $id);
    }

    /**
     * @return \Arbor\Model\TimetableImportJob
     */
    public function getTimetableImportJob()
    {
        return $this->getProperty('timetableImportJob');
    }

    /**
     * @param \Arbor\Model\TimetableImportJob $timetableImportJob
     */
    public function setTimetableImportJob(\Arbor\Model\TimetableImportJob $timetableImportJob = null)
    {
        $this->setProperty('timetableImportJob', $timetableImportJob);
    }

    /**
     * @return \Arbor\Model\TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param \Arbor\Model\TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(\Arbor\Model\TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
    }

    /**
     * @return string
     */
    public function getScheduleStatus()
    {
        return $this->getProperty('scheduleStatus');
    }

    /**
     * @param string $scheduleStatus
     */
    public function setScheduleStatus(string $scheduleStatus = null)
    {
        $this->setProperty('scheduleStatus', $scheduleStatus);
    }
}
