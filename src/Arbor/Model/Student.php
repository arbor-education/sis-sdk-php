<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\UkDfe\GcseEnglishAchievementType;
use Arbor\Model\UkDfe\GcseEnglishFundingExemptionType;
use Arbor\Model\UkDfe\GcseMathsAchievementType;
use Arbor\Model\UkDfe\GcseMathsFundingExemptionType;

class Student extends ModelBase
{
    const PERSON = 'person';

    const RELIGION = 'religion';

    const ETHNICITY = 'ethnicity';

    const BLOOD_GROUP = 'bloodGroup';

    const PREGNANCY_LENGTH = 'pregnancyLength';

    const BIRTH_DELIVERY = 'birthDelivery';

    const HANDEDNESS = 'handedness';

    const STUDENT_NUMBER = 'studentNumber';

    const LEGACY_SYSTEM_ID = 'legacySystemId';

    const MINIMUM_DATA_RETENTION_DATE = 'minimumDataRetentionDate';

    const SUSPEND_CALENDAR_ENTRY_MAPPINGS = 'suspendCalendarEntryMappings';

    const IS_ACTIVE_OUTGOING_SYNC = 'isActiveOutgoingSync';

    const IS_ACTIVE_INCOMING_SYNC = 'isActiveIncomingSync';

    const UNIQUE_LEARNER_NUMBER = 'uniqueLearnerNumber';

    const HOME_LOCAL_AUTHORITY = 'homeLocalAuthority';

    const YOUTH_SUPPORT_SERVICES_AGREEMENT = 'youthSupportServicesAgreement';

    const HOURS_AT_SETTING = 'hoursAtSetting';

    const FUNDED_HOURS = 'fundedHours';

    const ETHNICITY_SOURCE = 'ethnicitySource';

    const NHS_NUMBER = 'nhsNumber';

    const UCAS_PERSONAL_IDENTIFIER = 'ucasPersonalIdentifier';

    const EXTENDED_HOURS = 'extendedHours';

    const THIRTY_HOUR_CODE = 'thirtyHourCode';

    const GCSE_ENGLISH_GRADE = 'gcseEnglishGrade';

    const GCSE_ENGLISH_GRADE_PRIOR = 'gcseEnglishGradePrior';

    const GCSE_ENGLISH_ACHIEVEMENT_TYPE = 'gcseEnglishAchievementType';

    const GCSE_ENGLISH_FUNDING_EXEMPTION_TYPE = 'gcseEnglishFundingExemptionType';

    const GCSE_MATHS_GRADE = 'gcseMathsGrade';

    const GCSE_MATHS_GRADE_PRIOR = 'gcseMathsGradePrior';

    const GCSE_MATHS_ACHIEVEMENT_TYPE = 'gcseMathsAchievementType';

    const GCSE_MATHS_FUNDING_EXEMPTION_TYPE = 'gcseMathsFundingExemptionType';

    const T_LEVEL_PLANNED_EEP_HOURS = 'tLevelPlannedEepHours';

    protected $_resourceType = ResourceType::STUDENT;

    /**
     * @param Query $query
     * @return Student[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT);

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

        return $gateway->retrieve(ResourceType::STUDENT, $id);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return Religion
     */
    public function getReligion()
    {
        return $this->getProperty('religion');
    }

    /**
     * @param Religion $religion
     */
    public function setReligion(Religion $religion = null)
    {
        $this->setProperty('religion', $religion);
    }

    /**
     * @return Ethnicity
     */
    public function getEthnicity()
    {
        return $this->getProperty('ethnicity');
    }

    /**
     * @param Ethnicity $ethnicity
     */
    public function setEthnicity(Ethnicity $ethnicity = null)
    {
        $this->setProperty('ethnicity', $ethnicity);
    }

    /**
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->getProperty('bloodGroup');
    }

    /**
     * @param string $bloodGroup
     */
    public function setBloodGroup($bloodGroup = null)
    {
        $this->setProperty('bloodGroup', $bloodGroup);
    }

    /**
     * @return string
     */
    public function getPregnancyLength()
    {
        return $this->getProperty('pregnancyLength');
    }

    /**
     * @param string $pregnancyLength
     */
    public function setPregnancyLength($pregnancyLength = null)
    {
        $this->setProperty('pregnancyLength', $pregnancyLength);
    }

    /**
     * @return string
     */
    public function getBirthDelivery()
    {
        return $this->getProperty('birthDelivery');
    }

    /**
     * @param string $birthDelivery
     */
    public function setBirthDelivery($birthDelivery = null)
    {
        $this->setProperty('birthDelivery', $birthDelivery);
    }

    /**
     * @return string
     */
    public function getHandedness()
    {
        return $this->getProperty('handedness');
    }

    /**
     * @param string $handedness
     */
    public function setHandedness($handedness = null)
    {
        $this->setProperty('handedness', $handedness);
    }

    /**
     * @return string
     */
    public function getStudentNumber()
    {
        return $this->getProperty('studentNumber');
    }

    /**
     * @param string $studentNumber
     */
    public function setStudentNumber($studentNumber = null)
    {
        $this->setProperty('studentNumber', $studentNumber);
    }

    /**
     * @return string
     */
    public function getLegacySystemId()
    {
        return $this->getProperty('legacySystemId');
    }

    /**
     * @param string $legacySystemId
     */
    public function setLegacySystemId($legacySystemId = null)
    {
        $this->setProperty('legacySystemId', $legacySystemId);
    }

    /**
     * @return \DateTime
     */
    public function getMinimumDataRetentionDate()
    {
        return $this->getProperty('minimumDataRetentionDate');
    }

    /**
     * @param \DateTime $minimumDataRetentionDate
     */
    public function setMinimumDataRetentionDate(\DateTime $minimumDataRetentionDate = null)
    {
        $this->setProperty('minimumDataRetentionDate', $minimumDataRetentionDate);
    }

    /**
     * @return bool
     */
    public function getSuspendCalendarEntryMappings()
    {
        return $this->getProperty('suspendCalendarEntryMappings');
    }

    /**
     * @param bool $suspendCalendarEntryMappings
     */
    public function setSuspendCalendarEntryMappings($suspendCalendarEntryMappings = null)
    {
        $this->setProperty('suspendCalendarEntryMappings', $suspendCalendarEntryMappings);
    }

    /**
     * @return bool
     */
    public function getIsActiveOutgoingSync()
    {
        return $this->getProperty('isActiveOutgoingSync');
    }

    /**
     * @param bool $isActiveOutgoingSync
     */
    public function setIsActiveOutgoingSync($isActiveOutgoingSync = null)
    {
        $this->setProperty('isActiveOutgoingSync', $isActiveOutgoingSync);
    }

    /**
     * @return bool
     */
    public function getIsActiveIncomingSync()
    {
        return $this->getProperty('isActiveIncomingSync');
    }

    /**
     * @param bool $isActiveIncomingSync
     */
    public function setIsActiveIncomingSync($isActiveIncomingSync = null)
    {
        $this->setProperty('isActiveIncomingSync', $isActiveIncomingSync);
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
    public function setUniqueLearnerNumber($uniqueLearnerNumber = null)
    {
        $this->setProperty('uniqueLearnerNumber', $uniqueLearnerNumber);
    }

    /**
     * @return LocalAuthority
     */
    public function getHomeLocalAuthority()
    {
        return $this->getProperty('homeLocalAuthority');
    }

    /**
     * @param LocalAuthority $homeLocalAuthority
     */
    public function setHomeLocalAuthority(LocalAuthority $homeLocalAuthority = null)
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
    public function setYouthSupportServicesAgreement($youthSupportServicesAgreement = null)
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
    public function setHoursAtSetting($hoursAtSetting = null)
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
    public function setFundedHours($fundedHours = null)
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
    public function setEthnicitySource($ethnicitySource = null)
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
    public function setNhsNumber($nhsNumber = null)
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
    public function setUcasPersonalIdentifier($ucasPersonalIdentifier = null)
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
    public function setExtendedHours($extendedHours = null)
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
    public function setThirtyHourCode($thirtyHourCode = null)
    {
        $this->setProperty('thirtyHourCode', $thirtyHourCode);
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
    public function setGcseEnglishGrade($gcseEnglishGrade = null)
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
    public function setGcseEnglishGradePrior($gcseEnglishGradePrior = null)
    {
        $this->setProperty('gcseEnglishGradePrior', $gcseEnglishGradePrior);
    }

    /**
     * @return GcseEnglishAchievementType
     */
    public function getGcseEnglishAchievementType()
    {
        return $this->getProperty('gcseEnglishAchievementType');
    }

    /**
     * @param GcseEnglishAchievementType $gcseEnglishAchievementType
     */
    public function setGcseEnglishAchievementType(GcseEnglishAchievementType $gcseEnglishAchievementType = null)
    {
        $this->setProperty('gcseEnglishAchievementType', $gcseEnglishAchievementType);
    }

    /**
     * @return GcseEnglishFundingExemptionType
     */
    public function getGcseEnglishFundingExemptionType()
    {
        return $this->getProperty('gcseEnglishFundingExemptionType');
    }

    /**
     * @param GcseEnglishFundingExemptionType $gcseEnglishFundingExemptionType
     */
    public function setGcseEnglishFundingExemptionType(GcseEnglishFundingExemptionType $gcseEnglishFundingExemptionType = null)
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
    public function setGcseMathsGrade($gcseMathsGrade = null)
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
    public function setGcseMathsGradePrior($gcseMathsGradePrior = null)
    {
        $this->setProperty('gcseMathsGradePrior', $gcseMathsGradePrior);
    }

    /**
     * @return GcseMathsAchievementType
     */
    public function getGcseMathsAchievementType()
    {
        return $this->getProperty('gcseMathsAchievementType');
    }

    /**
     * @param GcseMathsAchievementType $gcseMathsAchievementType
     */
    public function setGcseMathsAchievementType(GcseMathsAchievementType $gcseMathsAchievementType = null)
    {
        $this->setProperty('gcseMathsAchievementType', $gcseMathsAchievementType);
    }

    /**
     * @return GcseMathsFundingExemptionType
     */
    public function getGcseMathsFundingExemptionType()
    {
        return $this->getProperty('gcseMathsFundingExemptionType');
    }

    /**
     * @param GcseMathsFundingExemptionType $gcseMathsFundingExemptionType
     */
    public function setGcseMathsFundingExemptionType(GcseMathsFundingExemptionType $gcseMathsFundingExemptionType = null)
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
    public function setTLevelPlannedEepHours($tLevelPlannedEepHours = null)
    {
        $this->setProperty('tLevelPlannedEepHours', $tLevelPlannedEepHours);
    }
}
