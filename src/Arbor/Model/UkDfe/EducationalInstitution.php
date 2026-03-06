<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EducationalInstitution extends ModelBase
{
    public const LOCAL_AUTHORITY = 'localAuthority';

    public const ESTABLISHMENT_NUMBER = 'establishmentNumber';

    public const CENSUS_SCHOOL_PHASE = 'censusSchoolPhase';

    public const SCHOOL_TYPE = 'schoolType';

    public const SCHOOL_GENDER = 'schoolGender';

    public const GOVERNANCE_TYPE = 'governanceType';

    public const INTAKE_TYPE = 'intakeType';

    public const URN = 'urn';

    public const UKPRN = 'ukprn';

    public const HAS_CHILD_MOTHER_PROVISION = 'hasChildMotherProvision';

    public const HAS_CHILDCARE_PLACES = 'hasChildcarePlaces';

    public const SPECIAL_SCHOOL_ACCOMMODATION = 'specialSchoolAccommodation';

    public const SPECIAL_SCHOOL_MAX_DAY_PUPILS = 'specialSchoolMaxDayPupils';

    public const SPECIAL_SCHOOL_MAX_BOARDERS = 'specialSchoolMaxBoarders';

    public const SPECIAL_SCHOOL_MIN_MALE_AGE = 'specialSchoolMinMaleAge';

    public const SPECIAL_SCHOOL_MAX_MALE_AGE = 'specialSchoolMaxMaleAge';

    public const SPECIAL_SCHOOL_MIN_FEMALE_AGE = 'specialSchoolMinFemaleAge';

    public const SPECIAL_SCHOOL_MAX_FEMALE_AGE = 'specialSchoolMaxFemaleAge';

    public const SPECIAL_SCHOOL_SEN_PROVISIONS = 'specialSchoolSenProvisions';

    public const CENSUS_SCHOOL_OPENING_DATE = 'censusSchoolOpeningDate';

    public const WEEKLY_HOURS_OPEN = 'weeklyHoursOpen';

    protected $_resourceType = ResourceType::UK_DFE_EDUCATIONAL_INSTITUTION;

    /**
     * @param Query $query
     * @return EducationalInstitution[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_EDUCATIONAL_INSTITUTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EducationalInstitution
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_EDUCATIONAL_INSTITUTION, $id);
    }

    /**
     * @return \Arbor\Model\LocalAuthority
     */
    public function getLocalAuthority()
    {
        return $this->getProperty('localAuthority');
    }

    /**
     * @param \Arbor\Model\LocalAuthority $localAuthority
     */
    public function setLocalAuthority(\Arbor\Model\LocalAuthority $localAuthority = null)
    {
        $this->setProperty('localAuthority', $localAuthority);
    }

    /**
     * @return string
     */
    public function getEstablishmentNumber()
    {
        return $this->getProperty('establishmentNumber');
    }

    /**
     * @param string $establishmentNumber
     */
    public function setEstablishmentNumber(string $establishmentNumber = null)
    {
        $this->setProperty('establishmentNumber', $establishmentNumber);
    }

    /**
     * @return \Arbor\Model\UkDfe\CensusSchoolPhase
     */
    public function getCensusSchoolPhase()
    {
        return $this->getProperty('censusSchoolPhase');
    }

    /**
     * @param \Arbor\Model\UkDfe\CensusSchoolPhase $censusSchoolPhase
     */
    public function setCensusSchoolPhase(\Arbor\Model\UkDfe\CensusSchoolPhase $censusSchoolPhase = null)
    {
        $this->setProperty('censusSchoolPhase', $censusSchoolPhase);
    }

    /**
     * @return \Arbor\Model\UkDfe\SchoolType
     */
    public function getSchoolType()
    {
        return $this->getProperty('schoolType');
    }

    /**
     * @param \Arbor\Model\UkDfe\SchoolType $schoolType
     */
    public function setSchoolType(\Arbor\Model\UkDfe\SchoolType $schoolType = null)
    {
        $this->setProperty('schoolType', $schoolType);
    }

    /**
     * @return string
     */
    public function getSchoolGender()
    {
        return $this->getProperty('schoolGender');
    }

    /**
     * @param string $schoolGender
     */
    public function setSchoolGender(string $schoolGender = null)
    {
        $this->setProperty('schoolGender', $schoolGender);
    }

    /**
     * @return \Arbor\Model\UkDfe\SchoolGovernanceType
     */
    public function getGovernanceType()
    {
        return $this->getProperty('governanceType');
    }

    /**
     * @param \Arbor\Model\UkDfe\SchoolGovernanceType $governanceType
     */
    public function setGovernanceType(\Arbor\Model\UkDfe\SchoolGovernanceType $governanceType = null)
    {
        $this->setProperty('governanceType', $governanceType);
    }

    /**
     * @return \Arbor\Model\UkDfe\SchoolIntakeType
     */
    public function getIntakeType()
    {
        return $this->getProperty('intakeType');
    }

    /**
     * @param \Arbor\Model\UkDfe\SchoolIntakeType $intakeType
     */
    public function setIntakeType(\Arbor\Model\UkDfe\SchoolIntakeType $intakeType = null)
    {
        $this->setProperty('intakeType', $intakeType);
    }

    /**
     * @return string
     */
    public function getUrn()
    {
        return $this->getProperty('urn');
    }

    /**
     * @param string $urn
     */
    public function setUrn(string $urn = null)
    {
        $this->setProperty('urn', $urn);
    }

    /**
     * @return string
     */
    public function getUkprn()
    {
        return $this->getProperty('ukprn');
    }

    /**
     * @param string $ukprn
     */
    public function setUkprn(string $ukprn = null)
    {
        $this->setProperty('ukprn', $ukprn);
    }

    /**
     * @return bool
     */
    public function getHasChildMotherProvision()
    {
        return $this->getProperty('hasChildMotherProvision');
    }

    /**
     * @param bool $hasChildMotherProvision
     */
    public function setHasChildMotherProvision(bool $hasChildMotherProvision = null)
    {
        $this->setProperty('hasChildMotherProvision', $hasChildMotherProvision);
    }

    /**
     * @return bool
     */
    public function getHasChildcarePlaces()
    {
        return $this->getProperty('hasChildcarePlaces');
    }

    /**
     * @param bool $hasChildcarePlaces
     */
    public function setHasChildcarePlaces(bool $hasChildcarePlaces = null)
    {
        $this->setProperty('hasChildcarePlaces', $hasChildcarePlaces);
    }

    /**
     * @return string
     */
    public function getSpecialSchoolAccommodation()
    {
        return $this->getProperty('specialSchoolAccommodation');
    }

    /**
     * @param string $specialSchoolAccommodation
     */
    public function setSpecialSchoolAccommodation(string $specialSchoolAccommodation = null)
    {
        $this->setProperty('specialSchoolAccommodation', $specialSchoolAccommodation);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMaxDayPupils()
    {
        return $this->getProperty('specialSchoolMaxDayPupils');
    }

    /**
     * @param int $specialSchoolMaxDayPupils
     */
    public function setSpecialSchoolMaxDayPupils(int $specialSchoolMaxDayPupils = null)
    {
        $this->setProperty('specialSchoolMaxDayPupils', $specialSchoolMaxDayPupils);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMaxBoarders()
    {
        return $this->getProperty('specialSchoolMaxBoarders');
    }

    /**
     * @param int $specialSchoolMaxBoarders
     */
    public function setSpecialSchoolMaxBoarders(int $specialSchoolMaxBoarders = null)
    {
        $this->setProperty('specialSchoolMaxBoarders', $specialSchoolMaxBoarders);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMinMaleAge()
    {
        return $this->getProperty('specialSchoolMinMaleAge');
    }

    /**
     * @param int $specialSchoolMinMaleAge
     */
    public function setSpecialSchoolMinMaleAge(int $specialSchoolMinMaleAge = null)
    {
        $this->setProperty('specialSchoolMinMaleAge', $specialSchoolMinMaleAge);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMaxMaleAge()
    {
        return $this->getProperty('specialSchoolMaxMaleAge');
    }

    /**
     * @param int $specialSchoolMaxMaleAge
     */
    public function setSpecialSchoolMaxMaleAge(int $specialSchoolMaxMaleAge = null)
    {
        $this->setProperty('specialSchoolMaxMaleAge', $specialSchoolMaxMaleAge);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMinFemaleAge()
    {
        return $this->getProperty('specialSchoolMinFemaleAge');
    }

    /**
     * @param int $specialSchoolMinFemaleAge
     */
    public function setSpecialSchoolMinFemaleAge(int $specialSchoolMinFemaleAge = null)
    {
        $this->setProperty('specialSchoolMinFemaleAge', $specialSchoolMinFemaleAge);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMaxFemaleAge()
    {
        return $this->getProperty('specialSchoolMaxFemaleAge');
    }

    /**
     * @param int $specialSchoolMaxFemaleAge
     */
    public function setSpecialSchoolMaxFemaleAge(int $specialSchoolMaxFemaleAge = null)
    {
        $this->setProperty('specialSchoolMaxFemaleAge', $specialSchoolMaxFemaleAge);
    }

    /**
     * @return string
     */
    public function getSpecialSchoolSenProvisions()
    {
        return $this->getProperty('specialSchoolSenProvisions');
    }

    /**
     * @param string $specialSchoolSenProvisions
     */
    public function setSpecialSchoolSenProvisions(string $specialSchoolSenProvisions = null)
    {
        $this->setProperty('specialSchoolSenProvisions', $specialSchoolSenProvisions);
    }

    /**
     * @return \DateTime
     */
    public function getCensusSchoolOpeningDate()
    {
        return $this->getProperty('censusSchoolOpeningDate');
    }

    /**
     * @param \DateTime $censusSchoolOpeningDate
     */
    public function setCensusSchoolOpeningDate(\DateTime $censusSchoolOpeningDate = null)
    {
        $this->setProperty('censusSchoolOpeningDate', $censusSchoolOpeningDate);
    }

    /**
     * @return string
     */
    public function getWeeklyHoursOpen()
    {
        return $this->getProperty('weeklyHoursOpen');
    }

    /**
     * @param string $weeklyHoursOpen
     */
    public function setWeeklyHoursOpen(string $weeklyHoursOpen = null)
    {
        $this->setProperty('weeklyHoursOpen', $weeklyHoursOpen);
    }
}
