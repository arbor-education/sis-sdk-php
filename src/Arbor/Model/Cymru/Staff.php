<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Staff extends ModelBase
{
    public const DISABILITY_CODE = 'disabilityCode';

    public const EARLY_YEARS_TEACHER_STATUS = 'earlyYearsTeacherStatus';

    public const ELIGIBLE_FOR_SCHOOL_WORKFORCE_RETURN = 'eligibleForSchoolWorkforceReturn';

    public const HLTA_STATUS = 'hltaStatus';

    public const IS_NPQH = 'isNpqh';

    public const IS_THIRD_PARTY = 'isThirdParty';

    public const LONG_TERM_ABSENCE_STATUS_CODE = 'longTermAbsenceStatusCode';

    public const NATIONAL_IDENTITY = 'nationalIdentity';

    public const NPQH_DATE = 'npqhDate';

    public const QUALIFIED_TEACHER_DATE = 'qualifiedTeacherDate';

    public const QUALIFIED_TEACHER_ROUTE = 'qualifiedTeacherRoute';

    public const QUALIFIED_TEACHER_STATUS = 'qualifiedTeacherStatus';

    public const WELSH_TEACHING_ABILITY_CODE = 'welshTeachingAbilityCode';

    public const WELSH_TEACHING_CODE = 'welshTeachingCode';

    protected $_resourceType = ResourceType::CYMRU_STAFF;

    /**
     * @param Query $query
     * @return Staff[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Staff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_STAFF, $id);
    }

    /**
     * @return string
     */
    public function getDisabilityCode()
    {
        return $this->getProperty('disabilityCode');
    }

    /**
     * @param string $disabilityCode
     */
    public function setDisabilityCode(string $disabilityCode = null)
    {
        $this->setProperty('disabilityCode', $disabilityCode);
    }

    /**
     * @return bool
     */
    public function getEarlyYearsTeacherStatus()
    {
        return $this->getProperty('earlyYearsTeacherStatus');
    }

    /**
     * @param bool $earlyYearsTeacherStatus
     */
    public function setEarlyYearsTeacherStatus(bool $earlyYearsTeacherStatus = null)
    {
        $this->setProperty('earlyYearsTeacherStatus', $earlyYearsTeacherStatus);
    }

    /**
     * @return bool
     */
    public function getEligibleForSchoolWorkforceReturn()
    {
        return $this->getProperty('eligibleForSchoolWorkforceReturn');
    }

    /**
     * @param bool $eligibleForSchoolWorkforceReturn
     */
    public function setEligibleForSchoolWorkforceReturn(bool $eligibleForSchoolWorkforceReturn = null)
    {
        $this->setProperty('eligibleForSchoolWorkforceReturn', $eligibleForSchoolWorkforceReturn);
    }

    /**
     * @return bool
     */
    public function getHltaStatus()
    {
        return $this->getProperty('hltaStatus');
    }

    /**
     * @param bool $hltaStatus
     */
    public function setHltaStatus(bool $hltaStatus = null)
    {
        $this->setProperty('hltaStatus', $hltaStatus);
    }

    /**
     * @return bool
     */
    public function getIsNpqh()
    {
        return $this->getProperty('isNpqh');
    }

    /**
     * @param bool $isNpqh
     */
    public function setIsNpqh(bool $isNpqh = null)
    {
        $this->setProperty('isNpqh', $isNpqh);
    }

    /**
     * @return bool
     */
    public function getIsThirdParty()
    {
        return $this->getProperty('isThirdParty');
    }

    /**
     * @param bool $isThirdParty
     */
    public function setIsThirdParty(bool $isThirdParty = null)
    {
        $this->setProperty('isThirdParty', $isThirdParty);
    }

    /**
     * @return string
     */
    public function getLongTermAbsenceStatusCode()
    {
        return $this->getProperty('longTermAbsenceStatusCode');
    }

    /**
     * @param string $longTermAbsenceStatusCode
     */
    public function setLongTermAbsenceStatusCode(string $longTermAbsenceStatusCode = null)
    {
        $this->setProperty('longTermAbsenceStatusCode', $longTermAbsenceStatusCode);
    }

    /**
     * @return \Arbor\Model\Cymru\NationalIdentity
     */
    public function getNationalIdentity()
    {
        return $this->getProperty('nationalIdentity');
    }

    /**
     * @param \Arbor\Model\Cymru\NationalIdentity $nationalIdentity
     */
    public function setNationalIdentity(\Arbor\Model\Cymru\NationalIdentity $nationalIdentity = null)
    {
        $this->setProperty('nationalIdentity', $nationalIdentity);
    }

    /**
     * @return \DateTime
     */
    public function getNpqhDate()
    {
        return $this->getProperty('npqhDate');
    }

    /**
     * @param \DateTime $npqhDate
     */
    public function setNpqhDate(\DateTime $npqhDate = null)
    {
        $this->setProperty('npqhDate', $npqhDate);
    }

    /**
     * @return \DateTime
     */
    public function getQualifiedTeacherDate()
    {
        return $this->getProperty('qualifiedTeacherDate');
    }

    /**
     * @param \DateTime $qualifiedTeacherDate
     */
    public function setQualifiedTeacherDate(\DateTime $qualifiedTeacherDate = null)
    {
        $this->setProperty('qualifiedTeacherDate', $qualifiedTeacherDate);
    }

    /**
     * @return \Arbor\Model\Cymru\QualifiedTeacherRoute
     */
    public function getQualifiedTeacherRoute()
    {
        return $this->getProperty('qualifiedTeacherRoute');
    }

    /**
     * @param \Arbor\Model\Cymru\QualifiedTeacherRoute $qualifiedTeacherRoute
     */
    public function setQualifiedTeacherRoute(\Arbor\Model\Cymru\QualifiedTeacherRoute $qualifiedTeacherRoute = null)
    {
        $this->setProperty('qualifiedTeacherRoute', $qualifiedTeacherRoute);
    }

    /**
     * @return bool
     */
    public function getQualifiedTeacherStatus()
    {
        return $this->getProperty('qualifiedTeacherStatus');
    }

    /**
     * @param bool $qualifiedTeacherStatus
     */
    public function setQualifiedTeacherStatus(bool $qualifiedTeacherStatus = null)
    {
        $this->setProperty('qualifiedTeacherStatus', $qualifiedTeacherStatus);
    }

    /**
     * @return string
     */
    public function getWelshTeachingAbilityCode()
    {
        return $this->getProperty('welshTeachingAbilityCode');
    }

    /**
     * @param string $welshTeachingAbilityCode
     */
    public function setWelshTeachingAbilityCode(string $welshTeachingAbilityCode = null)
    {
        $this->setProperty('welshTeachingAbilityCode', $welshTeachingAbilityCode);
    }

    /**
     * @return string
     */
    public function getWelshTeachingCode()
    {
        return $this->getProperty('welshTeachingCode');
    }

    /**
     * @param string $welshTeachingCode
     */
    public function setWelshTeachingCode(string $welshTeachingCode = null)
    {
        $this->setProperty('welshTeachingCode', $welshTeachingCode);
    }
}
