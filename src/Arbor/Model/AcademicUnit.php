<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnit extends ModelBase
{
    const UNIQUE_IDENTIFIER = 'uniqueIdentifier';

    const PARENT_ACADEMIC_UNIT = 'parentAcademicUnit';

    const ACADEMIC_PROGRAMME_INSTANCE = 'academicProgrammeInstance';

    const ACADEMIC_UNIT_NAME = 'academicUnitName';

    const LONG_NAME = 'longName';

    const LONG_NAME_FORMAT = 'longNameFormat';

    const SHORT_NAME = 'shortName';

    const SHORT_NAME_FORMAT = 'shortNameFormat';

    const ACADEMIC_UNIT_CODE = 'academicUnitCode';

    const ACADEMIC_YEAR = 'academicYear';

    const PROMOTED_TO_ACADEMIC_UNIT = 'promotedToAcademicUnit';

    const PROMOTED_DATETIME = 'promotedDatetime';

    const COPIED_TO_ACADEMIC_UNIT = 'copiedToAcademicUnit';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const FACULTY = 'faculty';

    const SELF_SERVICE_ENROLMENT = 'selfServiceEnrolment';

    const MAXIMUM_ENROLMENTS = 'maximumEnrolments';

    const TARGET_ENROLMENTS = 'targetEnrolments';

    const SUBJECT = 'subject';

    const ACADEMIC_LEVEL = 'academicLevel';

    const REGISTRATION_FORM = 'registrationForm';

    const IS_MAIN_ASSESSABLE_UNIT = 'isMainAssessableUnit';

    const DISPLAY_ORDER = 'displayOrder';

    const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    const PROMOTED_ENROLMENT_START_DATE = 'promotedEnrolmentStartDate';

    const PROMOTED_ENROLMENT_END_DATE = 'promotedEnrolmentEndDate';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT;

    /**
     * @param Query $query
     * @return AcademicUnit[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT, $id);
    }

    /**
     * @return string
     */
    public function getUniqueIdentifier()
    {
        return $this->getProperty('uniqueIdentifier');
    }

    /**
     * @param string $uniqueIdentifier
     */
    public function setUniqueIdentifier($uniqueIdentifier = null)
    {
        $this->setProperty('uniqueIdentifier', $uniqueIdentifier);
    }

    /**
     * @return AcademicUnit
     */
    public function getParentAcademicUnit()
    {
        return $this->getProperty('parentAcademicUnit');
    }

    /**
     * @param AcademicUnit $parentAcademicUnit
     */
    public function setParentAcademicUnit(AcademicUnit $parentAcademicUnit = null)
    {
        $this->setProperty('parentAcademicUnit', $parentAcademicUnit);
    }

    /**
     * @return AcademicProgrammeInstance
     */
    public function getAcademicProgrammeInstance()
    {
        return $this->getProperty('academicProgrammeInstance');
    }

    /**
     * @param AcademicProgrammeInstance $academicProgrammeInstance
     */
    public function setAcademicProgrammeInstance(AcademicProgrammeInstance $academicProgrammeInstance = null)
    {
        $this->setProperty('academicProgrammeInstance', $academicProgrammeInstance);
    }

    /**
     * @return string
     */
    public function getAcademicUnitName()
    {
        return $this->getProperty('academicUnitName');
    }

    /**
     * @param string $academicUnitName
     */
    public function setAcademicUnitName($academicUnitName = null)
    {
        $this->setProperty('academicUnitName', $academicUnitName);
    }

    /**
     * @return string
     */
    public function getLongName()
    {
        return $this->getProperty('longName');
    }

    /**
     * @param string $longName
     */
    public function setLongName($longName = null)
    {
        $this->setProperty('longName', $longName);
    }

    /**
     * @return string
     */
    public function getLongNameFormat()
    {
        return $this->getProperty('longNameFormat');
    }

    /**
     * @param string $longNameFormat
     */
    public function setLongNameFormat($longNameFormat = null)
    {
        $this->setProperty('longNameFormat', $longNameFormat);
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
    public function getShortNameFormat()
    {
        return $this->getProperty('shortNameFormat');
    }

    /**
     * @param string $shortNameFormat
     */
    public function setShortNameFormat($shortNameFormat = null)
    {
        $this->setProperty('shortNameFormat', $shortNameFormat);
    }

    /**
     * @return string
     */
    public function getAcademicUnitCode()
    {
        return $this->getProperty('academicUnitCode');
    }

    /**
     * @param string $academicUnitCode
     */
    public function setAcademicUnitCode($academicUnitCode = null)
    {
        $this->setProperty('academicUnitCode', $academicUnitCode);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return AcademicUnit
     */
    public function getPromotedToAcademicUnit()
    {
        return $this->getProperty('promotedToAcademicUnit');
    }

    /**
     * @param AcademicUnit $promotedToAcademicUnit
     */
    public function setPromotedToAcademicUnit(AcademicUnit $promotedToAcademicUnit = null)
    {
        $this->setProperty('promotedToAcademicUnit', $promotedToAcademicUnit);
    }

    /**
     * @return \DateTime
     */
    public function getPromotedDatetime()
    {
        return $this->getProperty('promotedDatetime');
    }

    /**
     * @param \DateTime $promotedDatetime
     */
    public function setPromotedDatetime(\DateTime $promotedDatetime = null)
    {
        $this->setProperty('promotedDatetime', $promotedDatetime);
    }

    /**
     * @return AcademicUnit
     */
    public function getCopiedToAcademicUnit()
    {
        return $this->getProperty('copiedToAcademicUnit');
    }

    /**
     * @param AcademicUnit $copiedToAcademicUnit
     */
    public function setCopiedToAcademicUnit(AcademicUnit $copiedToAcademicUnit = null)
    {
        $this->setProperty('copiedToAcademicUnit', $copiedToAcademicUnit);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return Faculty
     */
    public function getFaculty()
    {
        return $this->getProperty('faculty');
    }

    /**
     * @param Faculty $faculty
     */
    public function setFaculty(Faculty $faculty = null)
    {
        $this->setProperty('faculty', $faculty);
    }

    /**
     * @return bool
     */
    public function getSelfServiceEnrolment()
    {
        return $this->getProperty('selfServiceEnrolment');
    }

    /**
     * @param bool $selfServiceEnrolment
     */
    public function setSelfServiceEnrolment($selfServiceEnrolment = null)
    {
        $this->setProperty('selfServiceEnrolment', $selfServiceEnrolment);
    }

    /**
     * @return int
     */
    public function getMaximumEnrolments()
    {
        return $this->getProperty('maximumEnrolments');
    }

    /**
     * @param int $maximumEnrolments
     */
    public function setMaximumEnrolments($maximumEnrolments = null)
    {
        $this->setProperty('maximumEnrolments', $maximumEnrolments);
    }

    /**
     * @return int
     */
    public function getTargetEnrolments()
    {
        return $this->getProperty('targetEnrolments');
    }

    /**
     * @param int $targetEnrolments
     */
    public function setTargetEnrolments($targetEnrolments = null)
    {
        $this->setProperty('targetEnrolments', $targetEnrolments);
    }

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param Subject $subject
     */
    public function setSubject(Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return AcademicLevel
     */
    public function getAcademicLevel()
    {
        return $this->getProperty('academicLevel');
    }

    /**
     * @param AcademicLevel $academicLevel
     */
    public function setAcademicLevel(AcademicLevel $academicLevel = null)
    {
        $this->setProperty('academicLevel', $academicLevel);
    }

    /**
     * @return RegistrationForm
     */
    public function getRegistrationForm()
    {
        return $this->getProperty('registrationForm');
    }

    /**
     * @param RegistrationForm $registrationForm
     */
    public function setRegistrationForm(RegistrationForm $registrationForm = null)
    {
        $this->setProperty('registrationForm', $registrationForm);
    }

    /**
     * @return bool
     */
    public function getIsMainAssessableUnit()
    {
        return $this->getProperty('isMainAssessableUnit');
    }

    /**
     * @param bool $isMainAssessableUnit
     */
    public function setIsMainAssessableUnit($isMainAssessableUnit = null)
    {
        $this->setProperty('isMainAssessableUnit', $isMainAssessableUnit);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
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
    public function getPromotedEnrolmentStartDate()
    {
        return $this->getProperty('promotedEnrolmentStartDate');
    }

    /**
     * @param \DateTime $promotedEnrolmentStartDate
     */
    public function setPromotedEnrolmentStartDate(\DateTime $promotedEnrolmentStartDate = null)
    {
        $this->setProperty('promotedEnrolmentStartDate', $promotedEnrolmentStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getPromotedEnrolmentEndDate()
    {
        return $this->getProperty('promotedEnrolmentEndDate');
    }

    /**
     * @param \DateTime $promotedEnrolmentEndDate
     */
    public function setPromotedEnrolmentEndDate(\DateTime $promotedEnrolmentEndDate = null)
    {
        $this->setProperty('promotedEnrolmentEndDate', $promotedEnrolmentEndDate);
    }

    /**
     * @return Collection|\Arbor\Model\AcademicUnitCurriculum[]
     */
    public function getAcademicUnitCurriculums()
    {
        return $this->getCollectionProperty('academicUnitCurriculums');
    }

    /**
     * @return Collection|\Arbor\Model\TimetableSlot[]
     */
    public function getTimetableSlots()
    {
        return $this->getCollectionProperty('timetableSlots');
    }
}
