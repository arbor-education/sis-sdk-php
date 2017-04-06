<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\LocalAuthority;
use \Arbor\Model\UkDfe\CensusSchoolPhase;
use \Arbor\Model\UkDfe\SchoolType;
use \Arbor\Model\UkDfe\SchoolGovernanceType;
use \Arbor\Model\UkDfe\SchoolIntakeType;

class EducationalInstitution extends ModelBase
{

    const LOCAL_AUTHORITY = 'localAuthority';

    const ESTABLISHMENT_NUMBER = 'establishmentNumber';

    const CENSUS_SCHOOL_PHASE = 'censusSchoolPhase';

    const SCHOOL_TYPE = 'schoolType';

    const SCHOOL_GENDER = 'schoolGender';

    const GOVERNANCE_TYPE = 'governanceType';

    const INTAKE_TYPE = 'intakeType';

    const URN = 'urn';

    const HAS_CHILD_MOTHER_PROVISION = 'hasChildMotherProvision';

    const HAS_CHILDCARE_PLACES = 'hasChildcarePlaces';

    const CENTER_NUMBER = 'centerNumber';

    const SPECIAL_SCHOOL_ACCOMMODATION = 'specialSchoolAccommodation';

    const SPECIAL_SCHOOL_MAX_DAY_PUPILS = 'specialSchoolMaxDayPupils';

    const SPECIAL_SCHOOL_MAX_BOARDERS = 'specialSchoolMaxBoarders';

    const SPECIAL_SCHOOL_MIN_MALE_AGE = 'specialSchoolMinMaleAge';

    const SPECIAL_SCHOOL_MAX_MALE_AGE = 'specialSchoolMaxMaleAge';

    const SPECIAL_SCHOOL_MIN_FEMALE_AGE = 'specialSchoolMinFemaleAge';

    const SPECIAL_SCHOOL_MAX_FEMALE_AGE = 'specialSchoolMaxFemaleAge';

    const SPECIAL_SCHOOL_SEN_PROVISIONS = 'specialSchoolSenProvisions';

    const EDUCATIONAL_INSTITUTION_NAME = 'educationalInstitutionName';

    const SHORT_NAME = 'shortName';

    const OPENING_DATE = 'openingDate';

    const CLOSING_DATE = 'closingDate';

    const ARBOR_IDENTIFIER = 'arborIdentifier';

    protected $_resourceType = ResourceType::EDUCATIONAL_INSTITUTION;

    /**
     * @param \Arbor\Query\Query $query
     * @return EducationalInstitution[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("EducationalInstitution");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EducationalInstitution
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::EDUCATIONAL_INSTITUTION, $id);
    }

    /**
     * @return LocalAuthority
     */
    public function getLocalAuthority()
    {
        return $this->getProperty("localAuthority");
    }

    /**
     * @param LocalAuthority $localAuthority
     */
    public function setLocalAuthority(LocalAuthority $localAuthority = null)
    {
        $this->setProperty("localAuthority", $localAuthority);
    }

    /**
     * @return string
     */
    public function getEstablishmentNumber()
    {
        return $this->getProperty("establishmentNumber");
    }

    /**
     * @param string $establishmentNumber
     */
    public function setEstablishmentNumber($establishmentNumber = null)
    {
        $this->setProperty("establishmentNumber", $establishmentNumber);
    }

    /**
     * @return CensusSchoolPhase
     */
    public function getCensusSchoolPhase()
    {
        return $this->getProperty("censusSchoolPhase");
    }

    /**
     * @param CensusSchoolPhase $censusSchoolPhase
     */
    public function setCensusSchoolPhase(CensusSchoolPhase $censusSchoolPhase = null)
    {
        $this->setProperty("censusSchoolPhase", $censusSchoolPhase);
    }

    /**
     * @return SchoolType
     */
    public function getSchoolType()
    {
        return $this->getProperty("schoolType");
    }

    /**
     * @param SchoolType $schoolType
     */
    public function setSchoolType(SchoolType $schoolType = null)
    {
        $this->setProperty("schoolType", $schoolType);
    }

    /**
     * @return string
     */
    public function getSchoolGender()
    {
        return $this->getProperty("schoolGender");
    }

    /**
     * @param string $schoolGender
     */
    public function setSchoolGender($schoolGender = null)
    {
        $this->setProperty("schoolGender", $schoolGender);
    }

    /**
     * @return SchoolGovernanceType
     */
    public function getGovernanceType()
    {
        return $this->getProperty("governanceType");
    }

    /**
     * @param SchoolGovernanceType $governanceType
     */
    public function setGovernanceType(SchoolGovernanceType $governanceType = null)
    {
        $this->setProperty("governanceType", $governanceType);
    }

    /**
     * @return SchoolIntakeType
     */
    public function getIntakeType()
    {
        return $this->getProperty("intakeType");
    }

    /**
     * @param SchoolIntakeType $intakeType
     */
    public function setIntakeType(SchoolIntakeType $intakeType = null)
    {
        $this->setProperty("intakeType", $intakeType);
    }

    /**
     * @return string
     */
    public function getUrn()
    {
        return $this->getProperty("urn");
    }

    /**
     * @param string $urn
     */
    public function setUrn($urn = null)
    {
        $this->setProperty("urn", $urn);
    }

    /**
     * @return bool
     */
    public function getHasChildMotherProvision()
    {
        return $this->getProperty("hasChildMotherProvision");
    }

    /**
     * @param bool $hasChildMotherProvision
     */
    public function setHasChildMotherProvision($hasChildMotherProvision = null)
    {
        $this->setProperty("hasChildMotherProvision", $hasChildMotherProvision);
    }

    /**
     * @return bool
     */
    public function getHasChildcarePlaces()
    {
        return $this->getProperty("hasChildcarePlaces");
    }

    /**
     * @param bool $hasChildcarePlaces
     */
    public function setHasChildcarePlaces($hasChildcarePlaces = null)
    {
        $this->setProperty("hasChildcarePlaces", $hasChildcarePlaces);
    }

    /**
     * @return string
     */
    public function getCenterNumber()
    {
        return $this->getProperty("centerNumber");
    }

    /**
     * @param string $centerNumber
     */
    public function setCenterNumber($centerNumber = null)
    {
        $this->setProperty("centerNumber", $centerNumber);
    }

    /**
     * @return string
     */
    public function getSpecialSchoolAccommodation()
    {
        return $this->getProperty("specialSchoolAccommodation");
    }

    /**
     * @param string $specialSchoolAccommodation
     */
    public function setSpecialSchoolAccommodation($specialSchoolAccommodation = null)
    {
        $this->setProperty("specialSchoolAccommodation", $specialSchoolAccommodation);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMaxDayPupils()
    {
        return $this->getProperty("specialSchoolMaxDayPupils");
    }

    /**
     * @param int $specialSchoolMaxDayPupils
     */
    public function setSpecialSchoolMaxDayPupils($specialSchoolMaxDayPupils = null)
    {
        $this->setProperty("specialSchoolMaxDayPupils", $specialSchoolMaxDayPupils);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMaxBoarders()
    {
        return $this->getProperty("specialSchoolMaxBoarders");
    }

    /**
     * @param int $specialSchoolMaxBoarders
     */
    public function setSpecialSchoolMaxBoarders($specialSchoolMaxBoarders = null)
    {
        $this->setProperty("specialSchoolMaxBoarders", $specialSchoolMaxBoarders);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMinMaleAge()
    {
        return $this->getProperty("specialSchoolMinMaleAge");
    }

    /**
     * @param int $specialSchoolMinMaleAge
     */
    public function setSpecialSchoolMinMaleAge($specialSchoolMinMaleAge = null)
    {
        $this->setProperty("specialSchoolMinMaleAge", $specialSchoolMinMaleAge);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMaxMaleAge()
    {
        return $this->getProperty("specialSchoolMaxMaleAge");
    }

    /**
     * @param int $specialSchoolMaxMaleAge
     */
    public function setSpecialSchoolMaxMaleAge($specialSchoolMaxMaleAge = null)
    {
        $this->setProperty("specialSchoolMaxMaleAge", $specialSchoolMaxMaleAge);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMinFemaleAge()
    {
        return $this->getProperty("specialSchoolMinFemaleAge");
    }

    /**
     * @param int $specialSchoolMinFemaleAge
     */
    public function setSpecialSchoolMinFemaleAge($specialSchoolMinFemaleAge = null)
    {
        $this->setProperty("specialSchoolMinFemaleAge", $specialSchoolMinFemaleAge);
    }

    /**
     * @return int
     */
    public function getSpecialSchoolMaxFemaleAge()
    {
        return $this->getProperty("specialSchoolMaxFemaleAge");
    }

    /**
     * @param int $specialSchoolMaxFemaleAge
     */
    public function setSpecialSchoolMaxFemaleAge($specialSchoolMaxFemaleAge = null)
    {
        $this->setProperty("specialSchoolMaxFemaleAge", $specialSchoolMaxFemaleAge);
    }

    /**
     * @return string
     */
    public function getSpecialSchoolSenProvisions()
    {
        return $this->getProperty("specialSchoolSenProvisions");
    }

    /**
     * @param string $specialSchoolSenProvisions
     */
    public function setSpecialSchoolSenProvisions($specialSchoolSenProvisions = null)
    {
        $this->setProperty("specialSchoolSenProvisions", $specialSchoolSenProvisions);
    }

    /**
     * @return string
     */
    public function getEducationalInstitutionName()
    {
        return $this->getProperty("educationalInstitutionName");
    }

    /**
     * @param string $educationalInstitutionName
     */
    public function setEducationalInstitutionName($educationalInstitutionName = null)
    {
        $this->setProperty("educationalInstitutionName", $educationalInstitutionName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
    }

    /**
     * @return \DateTime
     */
    public function getOpeningDate()
    {
        return $this->getProperty("openingDate");
    }

    /**
     * @param \DateTime $openingDate
     */
    public function setOpeningDate(\DateTime $openingDate = null)
    {
        $this->setProperty("openingDate", $openingDate);
    }

    /**
     * @return \DateTime
     */
    public function getClosingDate()
    {
        return $this->getProperty("closingDate");
    }

    /**
     * @param \DateTime $closingDate
     */
    public function setClosingDate(\DateTime $closingDate = null)
    {
        $this->setProperty("closingDate", $closingDate);
    }

    /**
     * @return string
     */
    public function getArborIdentifier()
    {
        return $this->getProperty("arborIdentifier");
    }

    /**
     * @param string $arborIdentifier
     */
    public function setArborIdentifier($arborIdentifier = null)
    {
        $this->setProperty("arborIdentifier", $arborIdentifier);
    }


}
