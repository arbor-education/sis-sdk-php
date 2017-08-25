<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitAutomaticEnrolment extends ModelBase
{
    const ACADEMIC_UNIT = 'academicUnit';

    const TRIGGER = 'trigger';

    const ATTENDANCE_PATTERN = 'attendancePattern';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_AUTOMATIC_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicUnitAutomaticEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_AUTOMATIC_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitAutomaticEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_AUTOMATIC_ENROLMENT, $id);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }

    /**
     * @return ModelBase
     */
    public function getTrigger()
    {
        return $this->getProperty('trigger');
    }

    /**
     * @param ModelBase $trigger
     */
    public function setTrigger(ModelBase $trigger = null)
    {
        $this->setProperty('trigger', $trigger);
    }

    /**
     * @return AttendancePattern
     */
    public function getAttendancePattern()
    {
        return $this->getProperty('attendancePattern');
    }

    /**
     * @param AttendancePattern $attendancePattern
     */
    public function setAttendancePattern(AttendancePattern $attendancePattern = null)
    {
        $this->setProperty('attendancePattern', $attendancePattern);
    }
}
