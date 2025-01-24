<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Student extends ModelBase
{
    public const ARRIVAL_FROM_NON_ENGLISH_WELSH_SYSTEMS_DATE = 'arrivalFromNonEnglishWelshSystemsDate';

    public const ETHNICITY_SOURCE = 'ethnicitySource';

    public const HOME_LOCAL_AUTHORITY = 'homeLocalAuthority';

    public const HOME_WELSH_CODE = 'homeWelshCode';

    public const IS_CHILD_PROTECTION_STATUS = 'isChildProtectionStatus';

    public const IS_FROM_NON_ENGLISH_WELSH_SYSTEMS = 'isFromNonEnglishWelshSystems';

    public const IS_FSM_TRANSITIONAL_PROTECTION = 'isFsmTransitionalProtection';

    public const IS_LOOKED_AFTER_CHILD_STATUS = 'isLookedAfterChildStatus';

    public const IS_OTHER_SUBJECTS_STUDIED_IN_WELSH = 'isOtherSubjectsStudiedInWelsh';

    public const IS_TRAVELLER_STATUS = 'isTravellerStatus';

    public const IS_UPFSM_ELIGIBLE = 'isUpfsmEligible';

    public const IS_UPFSM_EXCEPTION = 'isUpfsmException';

    public const LANGUAGE_SOURCE_CODE = 'languageSourceCode';

    public const NATIONAL_IDENTITY = 'nationalIdentity';

    public const NHS_NUMBER = 'nhsNumber';

    public const RESPONSIBLE_LOCAL_AUTHORITY = 'responsibleLocalAuthority';

    public const SERVICE_CHILD_IN_EDUCATION = 'serviceChildInEducation';

    public const SPEAK_WELSH_CODE = 'speakWelshCode';

    public const UCAS_PERSONAL_IDENTIFIER = 'ucasPersonalIdentifier';

    public const UNIQUE_CANDIDATE_IDENTIFIER = 'uniqueCandidateIdentifier';

    public const UNIQUE_LEARNER_NUMBER = 'uniqueLearnerNumber';

    public const WELSH_SOURCE_CODE = 'welshSourceCode';

    public const WELSH_STUDIED_LEVEL_CODE = 'welshStudiedLevelCode';

    public const YOUTH_SUPPORT_SERVICES_AGREEMENT = 'youthSupportServicesAgreement';

    protected $_resourceType = ResourceType::CYMRU_STUDENT;

    /**
     * @param Query $query
     * @return Student[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_STUDENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Student
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_STUDENT, $id);
    }

    /**
     * @return \DateTime
     */
    public function getArrivalFromNonEnglishWelshSystemsDate()
    {
        return $this->getProperty('arrivalFromNonEnglishWelshSystemsDate');
    }

    /**
     * @param \DateTime $arrivalFromNonEnglishWelshSystemsDate
     */
    public function setArrivalFromNonEnglishWelshSystemsDate(\DateTime $arrivalFromNonEnglishWelshSystemsDate = null)
    {
        $this->setProperty('arrivalFromNonEnglishWelshSystemsDate', $arrivalFromNonEnglishWelshSystemsDate);
    }

    /**
     * @return string
     */
    public function getEthnicitySource()
    {
        return $this->getProperty('ethnicitySource');
    }

    /**
     * @param string $ethnicitySource
     */
    public function setEthnicitySource(string $ethnicitySource = null)
    {
        $this->setProperty('ethnicitySource', $ethnicitySource);
    }

    /**
     * @return \Arbor\Model\LocalAuthority
     */
    public function getHomeLocalAuthority()
    {
        return $this->getProperty('homeLocalAuthority');
    }

    /**
     * @param \Arbor\Model\LocalAuthority $homeLocalAuthority
     */
    public function setHomeLocalAuthority(\Arbor\Model\LocalAuthority $homeLocalAuthority = null)
    {
        $this->setProperty('homeLocalAuthority', $homeLocalAuthority);
    }

    /**
     * @return string
     */
    public function getHomeWelshCode()
    {
        return $this->getProperty('homeWelshCode');
    }

    /**
     * @param string $homeWelshCode
     */
    public function setHomeWelshCode(string $homeWelshCode = null)
    {
        $this->setProperty('homeWelshCode', $homeWelshCode);
    }

    /**
     * @return bool
     */
    public function getIsChildProtectionStatus()
    {
        return $this->getProperty('isChildProtectionStatus');
    }

    /**
     * @param bool $isChildProtectionStatus
     */
    public function setIsChildProtectionStatus(bool $isChildProtectionStatus = null)
    {
        $this->setProperty('isChildProtectionStatus', $isChildProtectionStatus);
    }

    /**
     * @return bool
     */
    public function getIsFromNonEnglishWelshSystems()
    {
        return $this->getProperty('isFromNonEnglishWelshSystems');
    }

    /**
     * @param bool $isFromNonEnglishWelshSystems
     */
    public function setIsFromNonEnglishWelshSystems(bool $isFromNonEnglishWelshSystems = null)
    {
        $this->setProperty('isFromNonEnglishWelshSystems', $isFromNonEnglishWelshSystems);
    }

    /**
     * @return bool
     */
    public function getIsFsmTransitionalProtection()
    {
        return $this->getProperty('isFsmTransitionalProtection');
    }

    /**
     * @param bool $isFsmTransitionalProtection
     */
    public function setIsFsmTransitionalProtection(bool $isFsmTransitionalProtection = null)
    {
        $this->setProperty('isFsmTransitionalProtection', $isFsmTransitionalProtection);
    }

    /**
     * @return bool
     */
    public function getIsLookedAfterChildStatus()
    {
        return $this->getProperty('isLookedAfterChildStatus');
    }

    /**
     * @param bool $isLookedAfterChildStatus
     */
    public function setIsLookedAfterChildStatus(bool $isLookedAfterChildStatus = null)
    {
        $this->setProperty('isLookedAfterChildStatus', $isLookedAfterChildStatus);
    }

    /**
     * @return bool
     */
    public function getIsOtherSubjectsStudiedInWelsh()
    {
        return $this->getProperty('isOtherSubjectsStudiedInWelsh');
    }

    /**
     * @param bool $isOtherSubjectsStudiedInWelsh
     */
    public function setIsOtherSubjectsStudiedInWelsh(bool $isOtherSubjectsStudiedInWelsh = null)
    {
        $this->setProperty('isOtherSubjectsStudiedInWelsh', $isOtherSubjectsStudiedInWelsh);
    }

    /**
     * @return bool
     */
    public function getIsTravellerStatus()
    {
        return $this->getProperty('isTravellerStatus');
    }

    /**
     * @param bool $isTravellerStatus
     */
    public function setIsTravellerStatus(bool $isTravellerStatus = null)
    {
        $this->setProperty('isTravellerStatus', $isTravellerStatus);
    }

    /**
     * @return bool
     */
    public function getIsUpfsmEligible()
    {
        return $this->getProperty('isUpfsmEligible');
    }

    /**
     * @param bool $isUpfsmEligible
     */
    public function setIsUpfsmEligible(bool $isUpfsmEligible = null)
    {
        $this->setProperty('isUpfsmEligible', $isUpfsmEligible);
    }

    /**
     * @return bool
     */
    public function getIsUpfsmException()
    {
        return $this->getProperty('isUpfsmException');
    }

    /**
     * @param bool $isUpfsmException
     */
    public function setIsUpfsmException(bool $isUpfsmException = null)
    {
        $this->setProperty('isUpfsmException', $isUpfsmException);
    }

    /**
     * @return string
     */
    public function getLanguageSourceCode()
    {
        return $this->getProperty('languageSourceCode');
    }

    /**
     * @param string $languageSourceCode
     */
    public function setLanguageSourceCode(string $languageSourceCode = null)
    {
        $this->setProperty('languageSourceCode', $languageSourceCode);
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
     * @return string
     */
    public function getNhsNumber()
    {
        return $this->getProperty('nhsNumber');
    }

    /**
     * @param string $nhsNumber
     */
    public function setNhsNumber(string $nhsNumber = null)
    {
        $this->setProperty('nhsNumber', $nhsNumber);
    }

    /**
     * @return \Arbor\Model\LocalAuthority
     */
    public function getResponsibleLocalAuthority()
    {
        return $this->getProperty('responsibleLocalAuthority');
    }

    /**
     * @param \Arbor\Model\LocalAuthority $responsibleLocalAuthority
     */
    public function setResponsibleLocalAuthority(\Arbor\Model\LocalAuthority $responsibleLocalAuthority = null)
    {
        $this->setProperty('responsibleLocalAuthority', $responsibleLocalAuthority);
    }

    /**
     * @return string
     */
    public function getServiceChildInEducation()
    {
        return $this->getProperty('serviceChildInEducation');
    }

    /**
     * @param string $serviceChildInEducation
     */
    public function setServiceChildInEducation(string $serviceChildInEducation = null)
    {
        $this->setProperty('serviceChildInEducation', $serviceChildInEducation);
    }

    /**
     * @return string
     */
    public function getSpeakWelshCode()
    {
        return $this->getProperty('speakWelshCode');
    }

    /**
     * @param string $speakWelshCode
     */
    public function setSpeakWelshCode(string $speakWelshCode = null)
    {
        $this->setProperty('speakWelshCode', $speakWelshCode);
    }

    /**
     * @return string
     */
    public function getUcasPersonalIdentifier()
    {
        return $this->getProperty('ucasPersonalIdentifier');
    }

    /**
     * @param string $ucasPersonalIdentifier
     */
    public function setUcasPersonalIdentifier(string $ucasPersonalIdentifier = null)
    {
        $this->setProperty('ucasPersonalIdentifier', $ucasPersonalIdentifier);
    }

    /**
     * @return string
     */
    public function getUniqueCandidateIdentifier()
    {
        return $this->getProperty('uniqueCandidateIdentifier');
    }

    /**
     * @param string $uniqueCandidateIdentifier
     */
    public function setUniqueCandidateIdentifier(string $uniqueCandidateIdentifier = null)
    {
        $this->setProperty('uniqueCandidateIdentifier', $uniqueCandidateIdentifier);
    }

    /**
     * @return int
     */
    public function getUniqueLearnerNumber()
    {
        return $this->getProperty('uniqueLearnerNumber');
    }

    /**
     * @param int $uniqueLearnerNumber
     */
    public function setUniqueLearnerNumber(int $uniqueLearnerNumber = null)
    {
        $this->setProperty('uniqueLearnerNumber', $uniqueLearnerNumber);
    }

    /**
     * @return string
     */
    public function getWelshSourceCode()
    {
        return $this->getProperty('welshSourceCode');
    }

    /**
     * @param string $welshSourceCode
     */
    public function setWelshSourceCode(string $welshSourceCode = null)
    {
        $this->setProperty('welshSourceCode', $welshSourceCode);
    }

    /**
     * @return string
     */
    public function getWelshStudiedLevelCode()
    {
        return $this->getProperty('welshStudiedLevelCode');
    }

    /**
     * @param string $welshStudiedLevelCode
     */
    public function setWelshStudiedLevelCode(string $welshStudiedLevelCode = null)
    {
        $this->setProperty('welshStudiedLevelCode', $welshStudiedLevelCode);
    }

    /**
     * @return string
     */
    public function getYouthSupportServicesAgreement()
    {
        return $this->getProperty('youthSupportServicesAgreement');
    }

    /**
     * @param string $youthSupportServicesAgreement
     */
    public function setYouthSupportServicesAgreement(string $youthSupportServicesAgreement = null)
    {
        $this->setProperty('youthSupportServicesAgreement', $youthSupportServicesAgreement);
    }
}
