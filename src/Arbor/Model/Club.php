<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Club extends \ModelBase
{
    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    public const ACADEMIC_YEAR = 'academicYear';

    public const MAX_MEMBERS_PER_SESSION = 'maxMembersPerSession';

    public const REQUIRE_CONSENT = 'requireConsent';

    public const COPIED_TO_CLUB = 'copiedToClub';

    public const FREE = 'free';

    public const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    public const ATTENDANCE_REGISTER_EFFECTIVE_DATE = 'attendanceRegisterEffectiveDate';

    public const ACCOUNTING_CODE = 'accountingCode';

    public const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    public const HAS_MEALS = 'hasMeals';

    public const IS_WRAPAROUND_CHILDCARE_CLUB = 'isWraparoundChildcareClub';

    public const CHARGE_STUDENTS_BASED_ON_ATTENDANCE_MARK = 'chargeStudentsBasedOnAttendanceMark';

    protected $_resourceType = ResourceType::CLUB;

    /**
     * @param Query $query
     * @return Club[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::CLUB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Club
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB, $id);
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
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return int
     */
    public function getMaxMembersPerSession()
    {
        return $this->getProperty('maxMembersPerSession');
    }

    /**
     * @param int $maxMembersPerSession
     */
    public function setMaxMembersPerSession(int $maxMembersPerSession = null)
    {
        $this->setProperty('maxMembersPerSession', $maxMembersPerSession);
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
     * @return Club
     */
    public function getCopiedToClub()
    {
        return $this->getProperty('copiedToClub');
    }

    /**
     * @param Club $copiedToClub
     */
    public function setCopiedToClub(\Club $copiedToClub = null)
    {
        $this->setProperty('copiedToClub', $copiedToClub);
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
     * @return AttendanceRegisterType
     */
    public function getAttendanceRegisterType()
    {
        return $this->getProperty('attendanceRegisterType');
    }

    /**
     * @param AttendanceRegisterType $attendanceRegisterType
     */
    public function setAttendanceRegisterType(\AttendanceRegisterType $attendanceRegisterType = null)
    {
        $this->setProperty('attendanceRegisterType', $attendanceRegisterType);
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceRegisterEffectiveDate()
    {
        return $this->getProperty('attendanceRegisterEffectiveDate');
    }

    /**
     * @param \DateTime $attendanceRegisterEffectiveDate
     */
    public function setAttendanceRegisterEffectiveDate(\DateTime $attendanceRegisterEffectiveDate = null)
    {
        $this->setProperty('attendanceRegisterEffectiveDate', $attendanceRegisterEffectiveDate);
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

    /**
     * @return CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty('customerAccountType');
    }

    /**
     * @param CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(\CustomerAccountType $customerAccountType = null)
    {
        $this->setProperty('customerAccountType', $customerAccountType);
    }

    /**
     * @return bool
     */
    public function getHasMeals()
    {
        return $this->getProperty('hasMeals');
    }

    /**
     * @param bool $hasMeals
     */
    public function setHasMeals(bool $hasMeals = null)
    {
        $this->setProperty('hasMeals', $hasMeals);
    }

    /**
     * @return bool
     */
    public function getIsWraparoundChildcareClub()
    {
        return $this->getProperty('isWraparoundChildcareClub');
    }

    /**
     * @param bool $isWraparoundChildcareClub
     */
    public function setIsWraparoundChildcareClub(bool $isWraparoundChildcareClub = null)
    {
        $this->setProperty('isWraparoundChildcareClub', $isWraparoundChildcareClub);
    }

    /**
     * @return bool
     */
    public function getChargeStudentsBasedOnAttendanceMark()
    {
        return $this->getProperty('chargeStudentsBasedOnAttendanceMark');
    }

    /**
     * @param bool $chargeStudentsBasedOnAttendanceMark
     */
    public function setChargeStudentsBasedOnAttendanceMark(bool $chargeStudentsBasedOnAttendanceMark = null)
    {
        $this->setProperty('chargeStudentsBasedOnAttendanceMark', $chargeStudentsBasedOnAttendanceMark);
    }
}
