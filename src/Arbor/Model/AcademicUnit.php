<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicUnit extends ModelBase
{
    public const UNIQUE_IDENTIFIER = 'uniqueIdentifier';

    public const PARENT_ACADEMIC_UNIT = 'parentAcademicUnit';

    public const ACADEMIC_PROGRAMME_INSTANCE = 'academicProgrammeInstance';

    public const ACADEMIC_UNIT_NAME = 'academicUnitName';

    public const LONG_NAME = 'longName';

    public const LONG_NAME_FORMAT = 'longNameFormat';

    public const SHORT_NAME = 'shortName';

    public const SHORT_NAME_FORMAT = 'shortNameFormat';

    public const ACADEMIC_UNIT_CODE = 'academicUnitCode';

    public const ACADEMIC_YEAR = 'academicYear';

    public const PROMOTED_TO_ACADEMIC_UNIT = 'promotedToAcademicUnit';

    public const PROMOTED_DATETIME = 'promotedDatetime';

    public const COPIED_TO_ACADEMIC_UNIT = 'copiedToAcademicUnit';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const FACULTY = 'faculty';

    public const SELF_SERVICE_ENROLMENT = 'selfServiceEnrolment';

    public const MAXIMUM_ENROLMENTS = 'maximumEnrolments';

    public const TARGET_ENROLMENTS = 'targetEnrolments';

    public const SUBJECT = 'subject';

    public const ACADEMIC_LEVEL = 'academicLevel';

    public const REGISTRATION_FORM = 'registrationForm';

    public const IS_MAIN_ASSESSABLE_UNIT = 'isMainAssessableUnit';

    public const DISPLAY_ORDER = 'displayOrder';

    public const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    public const PROMOTED_ENROLMENT_START_DATE = 'promotedEnrolmentStartDate';

    public const PROMOTED_ENROLMENT_END_DATE = 'promotedEnrolmentEndDate';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT;

    /**
     * @param Query $query
     * @return AcademicUnit[] | Collection
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
    public function setUniqueIdentifier(string $uniqueIdentifier = null)
    {
        $this->setProperty('uniqueIdentifier', $uniqueIdentifier);
    }

    /**
     * @return \Arbor\Model\AcademicUnit
     */
    public function getParentAcademicUnit()
    {
        return $this->getProperty('parentAcademicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $parentAcademicUnit
     */
    public function setParentAcademicUnit(\Arbor\Model\AcademicUnit $parentAcademicUnit = null)
    {
        $this->setProperty('parentAcademicUnit', $parentAcademicUnit);
    }

    /**
     * @return \Arbor\Model\AcademicProgrammeInstance
     */
    public function getAcademicProgrammeInstance()
    {
        return $this->getProperty('academicProgrammeInstance');
    }

    /**
     * @param \Arbor\Model\AcademicProgrammeInstance $academicProgrammeInstance
     */
    public function setAcademicProgrammeInstance(\Arbor\Model\AcademicProgrammeInstance $academicProgrammeInstance = null)
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
    public function setAcademicUnitName(string $academicUnitName = null)
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
    public function setLongName(string $longName = null)
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
    public function setLongNameFormat(string $longNameFormat = null)
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
    public function setShortName(string $shortName = null)
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
    public function setShortNameFormat(string $shortNameFormat = null)
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
    public function setAcademicUnitCode(string $academicUnitCode = null)
    {
        $this->setProperty('academicUnitCode', $academicUnitCode);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return \Arbor\Model\AcademicUnit
     */
    public function getPromotedToAcademicUnit()
    {
        return $this->getProperty('promotedToAcademicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $promotedToAcademicUnit
     */
    public function setPromotedToAcademicUnit(\Arbor\Model\AcademicUnit $promotedToAcademicUnit = null)
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
     * @return \Arbor\Model\AcademicUnit
     */
    public function getCopiedToAcademicUnit()
    {
        return $this->getProperty('copiedToAcademicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $copiedToAcademicUnit
     */
    public function setCopiedToAcademicUnit(\Arbor\Model\AcademicUnit $copiedToAcademicUnit = null)
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
     * @return \Arbor\Model\Faculty
     */
    public function getFaculty()
    {
        return $this->getProperty('faculty');
    }

    /**
     * @param \Arbor\Model\Faculty $faculty
     */
    public function setFaculty(\Arbor\Model\Faculty $faculty = null)
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
    public function setSelfServiceEnrolment(bool $selfServiceEnrolment = null)
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
    public function setMaximumEnrolments(int $maximumEnrolments = null)
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
    public function setTargetEnrolments(int $targetEnrolments = null)
    {
        $this->setProperty('targetEnrolments', $targetEnrolments);
    }

    /**
     * @return \Arbor\Model\Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param \Arbor\Model\Subject $subject
     */
    public function setSubject(\Arbor\Model\Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return \Arbor\Model\AcademicLevel
     */
    public function getAcademicLevel()
    {
        return $this->getProperty('academicLevel');
    }

    /**
     * @param \Arbor\Model\AcademicLevel $academicLevel
     */
    public function setAcademicLevel(\Arbor\Model\AcademicLevel $academicLevel = null)
    {
        $this->setProperty('academicLevel', $academicLevel);
    }

    /**
     * @return \Arbor\Model\RegistrationForm
     */
    public function getRegistrationForm()
    {
        return $this->getProperty('registrationForm');
    }

    /**
     * @param \Arbor\Model\RegistrationForm $registrationForm
     */
    public function setRegistrationForm(\Arbor\Model\RegistrationForm $registrationForm = null)
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
    public function setIsMainAssessableUnit(bool $isMainAssessableUnit = null)
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
    public function setDisplayOrder(int $displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
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
