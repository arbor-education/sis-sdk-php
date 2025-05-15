<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Student extends ModelBase
{
    public const UNIQUE_LEARNER_NUMBER = 'uniqueLearnerNumber';

    public const HOME_LOCAL_AUTHORITY = 'homeLocalAuthority';

    public const YOUTH_SUPPORT_SERVICES_AGREEMENT = 'youthSupportServicesAgreement';

    public const HOURS_AT_SETTING = 'hoursAtSetting';

    public const FUNDED_HOURS = 'fundedHours';

    public const ETHNICITY_SOURCE = 'ethnicitySource';

    public const NHS_NUMBER = 'nhsNumber';

    public const UCAS_PERSONAL_IDENTIFIER = 'ucasPersonalIdentifier';

    public const EXTENDED_HOURS = 'extendedHours';

    public const THIRTY_HOUR_CODE = 'thirtyHourCode';

    public const EXPANDED_HOURS = 'expandedHours';

    public const GCSE_ENGLISH_GRADE = 'gcseEnglishGrade';

    public const GCSE_ENGLISH_GRADE_PRIOR = 'gcseEnglishGradePrior';

    public const GCSE_ENGLISH_ACHIEVEMENT_TYPE = 'gcseEnglishAchievementType';

    public const GCSE_ENGLISH_FUNDING_EXEMPTION_TYPE = 'gcseEnglishFundingExemptionType';

    public const GCSE_MATHS_GRADE = 'gcseMathsGrade';

    public const GCSE_MATHS_GRADE_PRIOR = 'gcseMathsGradePrior';

    public const GCSE_MATHS_ACHIEVEMENT_TYPE = 'gcseMathsAchievementType';

    public const GCSE_MATHS_FUNDING_EXEMPTION_TYPE = 'gcseMathsFundingExemptionType';

    public const T_LEVEL_PLANNED_EEP_HOURS = 'tLevelPlannedEepHours';

    protected $_resourceType = ResourceType::UK_DFE_STUDENT;

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

        $query->setResourceType(ResourceType::UK_DFE_STUDENT);

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

        return $gateway->retrieve(ResourceType::UK_DFE_STUDENT, $id);
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

    /**
     * @return string
     */
    public function getHoursAtSetting()
    {
        return $this->getProperty('hoursAtSetting');
    }

    /**
     * @param string $hoursAtSetting
     */
    public function setHoursAtSetting(string $hoursAtSetting = null)
    {
        $this->setProperty('hoursAtSetting', $hoursAtSetting);
    }

    /**
     * @return string
     */
    public function getFundedHours()
    {
        return $this->getProperty('fundedHours');
    }

    /**
     * @param string $fundedHours
     */
    public function setFundedHours(string $fundedHours = null)
    {
        $this->setProperty('fundedHours', $fundedHours);
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
    public function getExtendedHours()
    {
        return $this->getProperty('extendedHours');
    }

    /**
     * @param string $extendedHours
     */
    public function setExtendedHours(string $extendedHours = null)
    {
        $this->setProperty('extendedHours', $extendedHours);
    }

    /**
     * @return string
     */
    public function getThirtyHourCode()
    {
        return $this->getProperty('thirtyHourCode');
    }

    /**
     * @param string $thirtyHourCode
     */
    public function setThirtyHourCode(string $thirtyHourCode = null)
    {
        $this->setProperty('thirtyHourCode', $thirtyHourCode);
    }

    /**
     * @return string
     */
    public function getExpandedHours()
    {
        return $this->getProperty('expandedHours');
    }

    /**
     * @param string $expandedHours
     */
    public function setExpandedHours(string $expandedHours = null)
    {
        $this->setProperty('expandedHours', $expandedHours);
    }

    /**
     * @return string
     */
    public function getGcseEnglishGrade()
    {
        return $this->getProperty('gcseEnglishGrade');
    }

    /**
     * @param string $gcseEnglishGrade
     */
    public function setGcseEnglishGrade(string $gcseEnglishGrade = null)
    {
        $this->setProperty('gcseEnglishGrade', $gcseEnglishGrade);
    }

    /**
     * @return string
     */
    public function getGcseEnglishGradePrior()
    {
        return $this->getProperty('gcseEnglishGradePrior');
    }

    /**
     * @param string $gcseEnglishGradePrior
     */
    public function setGcseEnglishGradePrior(string $gcseEnglishGradePrior = null)
    {
        $this->setProperty('gcseEnglishGradePrior', $gcseEnglishGradePrior);
    }

    /**
     * @return \Arbor\Model\UkDfe\GcseEnglishAchievementType
     */
    public function getGcseEnglishAchievementType()
    {
        return $this->getProperty('gcseEnglishAchievementType');
    }

    /**
     * @param \Arbor\Model\UkDfe\GcseEnglishAchievementType $gcseEnglishAchievementType
     */
    public function setGcseEnglishAchievementType(\Arbor\Model\UkDfe\GcseEnglishAchievementType $gcseEnglishAchievementType = null)
    {
        $this->setProperty('gcseEnglishAchievementType', $gcseEnglishAchievementType);
    }

    /**
     * @return \Arbor\Model\UkDfe\GcseEnglishFundingExemptionType
     */
    public function getGcseEnglishFundingExemptionType()
    {
        return $this->getProperty('gcseEnglishFundingExemptionType');
    }

    /**
     * @param \Arbor\Model\UkDfe\GcseEnglishFundingExemptionType
     * $gcseEnglishFundingExemptionType
     */
    public function setGcseEnglishFundingExemptionType(\Arbor\Model\UkDfe\GcseEnglishFundingExemptionType $gcseEnglishFundingExemptionType = null)
    {
        $this->setProperty('gcseEnglishFundingExemptionType', $gcseEnglishFundingExemptionType);
    }

    /**
     * @return string
     */
    public function getGcseMathsGrade()
    {
        return $this->getProperty('gcseMathsGrade');
    }

    /**
     * @param string $gcseMathsGrade
     */
    public function setGcseMathsGrade(string $gcseMathsGrade = null)
    {
        $this->setProperty('gcseMathsGrade', $gcseMathsGrade);
    }

    /**
     * @return string
     */
    public function getGcseMathsGradePrior()
    {
        return $this->getProperty('gcseMathsGradePrior');
    }

    /**
     * @param string $gcseMathsGradePrior
     */
    public function setGcseMathsGradePrior(string $gcseMathsGradePrior = null)
    {
        $this->setProperty('gcseMathsGradePrior', $gcseMathsGradePrior);
    }

    /**
     * @return \Arbor\Model\UkDfe\GcseMathsAchievementType
     */
    public function getGcseMathsAchievementType()
    {
        return $this->getProperty('gcseMathsAchievementType');
    }

    /**
     * @param \Arbor\Model\UkDfe\GcseMathsAchievementType $gcseMathsAchievementType
     */
    public function setGcseMathsAchievementType(\Arbor\Model\UkDfe\GcseMathsAchievementType $gcseMathsAchievementType = null)
    {
        $this->setProperty('gcseMathsAchievementType', $gcseMathsAchievementType);
    }

    /**
     * @return \Arbor\Model\UkDfe\GcseMathsFundingExemptionType
     */
    public function getGcseMathsFundingExemptionType()
    {
        return $this->getProperty('gcseMathsFundingExemptionType');
    }

    /**
     * @param \Arbor\Model\UkDfe\GcseMathsFundingExemptionType
     * $gcseMathsFundingExemptionType
     */
    public function setGcseMathsFundingExemptionType(\Arbor\Model\UkDfe\GcseMathsFundingExemptionType $gcseMathsFundingExemptionType = null)
    {
        $this->setProperty('gcseMathsFundingExemptionType', $gcseMathsFundingExemptionType);
    }

    /**
     * @return int
     */
    public function getTLevelPlannedEepHours()
    {
        return $this->getProperty('tLevelPlannedEepHours');
    }

    /**
     * @param int $tLevelPlannedEepHours
     */
    public function setTLevelPlannedEepHours(int $tLevelPlannedEepHours = null)
    {
        $this->setProperty('tLevelPlannedEepHours', $tLevelPlannedEepHours);
    }
}
