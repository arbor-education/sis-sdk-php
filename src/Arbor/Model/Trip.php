<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Trip extends ModelBase
{
    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION_TEXT = 'locationText';

    public const LOCATION = 'location';

    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    public const ACADEMIC_YEAR = 'academicYear';

    public const LINK_TO = 'linkTo';

    public const COPIED_TO_TRIP = 'copiedToTrip';

    public const MAX_PARTICIPANTS = 'maxParticipants';

    public const REQUIRE_CONSENT = 'requireConsent';

    public const GUARDIAN_SIGNUP_START_DATETIME = 'guardianSignupStartDatetime';

    public const GUARDIAN_SIGNUP_END_DATETIME = 'guardianSignupEndDatetime';

    public const FREE = 'free';

    public const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    public const ACCOUNTING_CODE = 'accountingCode';

    protected $_resourceType = ResourceType::TRIP;

    /**
     * @param Query $query
     * @return Trip[] | Collection
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

        $query->setResourceType(ResourceType::TRIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Trip
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRIP, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty('locationText');
    }

    /**
     * @param string $locationText
     */
    public function setLocationText(string $locationText = null)
    {
        $this->setProperty('locationText', $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(\ModelBase $location = null)
    {
        $this->setProperty('location', $location);
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
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
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
     * @return ModelBase
     */
    public function getLinkTo()
    {
        return $this->getProperty('linkTo');
    }

    /**
     * @param ModelBase $linkTo
     */
    public function setLinkTo(\ModelBase $linkTo = null)
    {
        $this->setProperty('linkTo', $linkTo);
    }

    /**
     * @return \Arbor\Model\Trip
     */
    public function getCopiedToTrip()
    {
        return $this->getProperty('copiedToTrip');
    }

    /**
     * @param \Arbor\Model\Trip $copiedToTrip
     */
    public function setCopiedToTrip(\Arbor\Model\Trip $copiedToTrip = null)
    {
        $this->setProperty('copiedToTrip', $copiedToTrip);
    }

    /**
     * @return int
     */
    public function getMaxParticipants()
    {
        return $this->getProperty('maxParticipants');
    }

    /**
     * @param int $maxParticipants
     */
    public function setMaxParticipants(int $maxParticipants = null)
    {
        $this->setProperty('maxParticipants', $maxParticipants);
    }

    /**
     * @return bool
     */
    public function getRequireConsent()
    {
        return $this->getProperty('requireConsent');
    }

    /**
     * @param bool $requireConsent
     */
    public function setRequireConsent(bool $requireConsent = null)
    {
        $this->setProperty('requireConsent', $requireConsent);
    }

    /**
     * @return \DateTime
     */
    public function getGuardianSignupStartDatetime()
    {
        return $this->getProperty('guardianSignupStartDatetime');
    }

    /**
     * @param \DateTime $guardianSignupStartDatetime
     */
    public function setGuardianSignupStartDatetime(\DateTime $guardianSignupStartDatetime = null)
    {
        $this->setProperty('guardianSignupStartDatetime', $guardianSignupStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getGuardianSignupEndDatetime()
    {
        return $this->getProperty('guardianSignupEndDatetime');
    }

    /**
     * @param \DateTime $guardianSignupEndDatetime
     */
    public function setGuardianSignupEndDatetime(\DateTime $guardianSignupEndDatetime = null)
    {
        $this->setProperty('guardianSignupEndDatetime', $guardianSignupEndDatetime);
    }

    /**
     * @return bool
     */
    public function getFree()
    {
        return $this->getProperty('free');
    }

    /**
     * @param bool $free
     */
    public function setFree(bool $free = null)
    {
        $this->setProperty('free', $free);
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
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->getProperty('accountingCode');
    }

    /**
     * @param string $accountingCode
     */
    public function setAccountingCode(string $accountingCode = null)
    {
        $this->setProperty('accountingCode', $accountingCode);
    }
}
