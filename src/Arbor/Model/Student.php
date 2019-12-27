<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

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

    const UNIQUE_LEARNER_NUMBER = 'uniqueLearnerNumber';

    const HOME_LOCAL_AUTHORITY = 'homeLocalAuthority';

    const YOUTH_SUPPORT_SERVICES_AGREEMENT = 'youthSupportServicesAgreement';

    const HOURS_AT_SETTING = 'hoursAtSetting';

    const FUNDED_HOURS = 'fundedHours';

    const ETHNICITY_SOURCE = 'ethnicitySource';

    const NHS_NUMBER = 'nhsNumber';

    const EXTENDED_HOURS = 'extendedHours';

    const THIRTY_HOUR_CODE = 'thirtyHourCode';

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


}
