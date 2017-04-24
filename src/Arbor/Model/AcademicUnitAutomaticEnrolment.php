<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicUnit;
use \Arbor\Model\AttendancePattern;

class AcademicUnitAutomaticEnrolment extends ModelBase
{
    const ACADEMIC_UNIT = 'academicUnit';

    const TRIGGER = 'trigger';

    const ATTENDANCE_PATTERN = 'attendancePattern';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_AUTOMATIC_ENROLMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicUnitAutomaticEnrolment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AcademicUnitAutomaticEnrolment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicUnitAutomaticEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_AUTOMATIC_ENROLMENT, $id);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty("academicUnit");
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty("academicUnit", $academicUnit);
    }

    /**
     * @return ModelBase
     */
    public function getTrigger()
    {
        return $this->getProperty("trigger");
    }

    /**
     * @param ModelBase $trigger
     */
    public function setTrigger(ModelBase $trigger = null)
    {
        $this->setProperty("trigger", $trigger);
    }

    /**
     * @return AttendancePattern
     */
    public function getAttendancePattern()
    {
        return $this->getProperty("attendancePattern");
    }

    /**
     * @param AttendancePattern $attendancePattern
     */
    public function setAttendancePattern(AttendancePattern $attendancePattern = null)
    {
        $this->setProperty("attendancePattern", $attendancePattern);
    }
}
