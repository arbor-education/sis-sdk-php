<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EducationalInstitution extends ModelBase
{
    public const SCHOOL_SEX_MIX = 'schoolSexMix';

    public const LOCAL_AUTHORITY = 'localAuthority';

    public const CENSUS_SCHOOL_PHASE = 'censusSchoolPhase';

    public const SCHOOL_TYPE = 'schoolType';

    public const SCHOOL_GOVERNANCE_TYPE = 'schoolGovernanceType';

    public const ESTABLISHMENT_NUMBER = 'establishmentNumber';

    public const URN = 'urn';

    public const UKPRN = 'ukprn';

    public const OPEN_PLAN = 'openPlan';

    public const CENTER_NUMBER = 'centerNumber';

    public const SPECIAL_SCHOOL_ACCOMMODATION = 'specialSchoolAccommodation';

    public const IS_OPTED_OUT_OF_HR_PAYROLL_SLA = 'isOptedOutOfHrPayrollSla';

    public const FEDERATED_GOVERNING_BODY_CODE = 'federatedGoverningBodyCode';

    protected $_resourceType = ResourceType::CYMRU_EDUCATIONAL_INSTITUTION;

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

        $query->setResourceType(ResourceType::CYMRU_EDUCATIONAL_INSTITUTION);

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

        return $gateway->retrieve(ResourceType::CYMRU_EDUCATIONAL_INSTITUTION, $id);
    }

    /**
     * @return string
     */
    public function getSchoolSexMix()
    {
        return $this->getProperty('schoolSexMix');
    }

    /**
     * @param string $schoolSexMix
     */
    public function setSchoolSexMix(string $schoolSexMix = null)
    {
        $this->setProperty('schoolSexMix', $schoolSexMix);
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
     * @return \Arbor\Model\Cymru\CensusSchoolPhase
     */
    public function getCensusSchoolPhase()
    {
        return $this->getProperty('censusSchoolPhase');
    }

    /**
     * @param \Arbor\Model\Cymru\CensusSchoolPhase $censusSchoolPhase
     */
    public function setCensusSchoolPhase(\Arbor\Model\Cymru\CensusSchoolPhase $censusSchoolPhase = null)
    {
        $this->setProperty('censusSchoolPhase', $censusSchoolPhase);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolType
     */
    public function getSchoolType()
    {
        return $this->getProperty('schoolType');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolType $schoolType
     */
    public function setSchoolType(\Arbor\Model\Cymru\SchoolType $schoolType = null)
    {
        $this->setProperty('schoolType', $schoolType);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolGovernanceType
     */
    public function getSchoolGovernanceType()
    {
        return $this->getProperty('schoolGovernanceType');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolGovernanceType $schoolGovernanceType
     */
    public function setSchoolGovernanceType(\Arbor\Model\Cymru\SchoolGovernanceType $schoolGovernanceType = null)
    {
        $this->setProperty('schoolGovernanceType', $schoolGovernanceType);
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
    public function getOpenPlan()
    {
        return $this->getProperty('openPlan');
    }

    /**
     * @param bool $openPlan
     */
    public function setOpenPlan(bool $openPlan = null)
    {
        $this->setProperty('openPlan', $openPlan);
    }

    /**
     * @return string
     */
    public function getCenterNumber()
    {
        return $this->getProperty('centerNumber');
    }

    /**
     * @param string $centerNumber
     */
    public function setCenterNumber(string $centerNumber = null)
    {
        $this->setProperty('centerNumber', $centerNumber);
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
     * @return bool
     */
    public function getIsOptedOutOfHrPayrollSla()
    {
        return $this->getProperty('isOptedOutOfHrPayrollSla');
    }

    /**
     * @param bool $isOptedOutOfHrPayrollSla
     */
    public function setIsOptedOutOfHrPayrollSla(bool $isOptedOutOfHrPayrollSla = null)
    {
        $this->setProperty('isOptedOutOfHrPayrollSla', $isOptedOutOfHrPayrollSla);
    }

    /**
     * @return string
     */
    public function getFederatedGoverningBodyCode()
    {
        return $this->getProperty('federatedGoverningBodyCode');
    }

    /**
     * @param string $federatedGoverningBodyCode
     */
    public function setFederatedGoverningBodyCode(string $federatedGoverningBodyCode = null)
    {
        $this->setProperty('federatedGoverningBodyCode', $federatedGoverningBodyCode);
    }
}
