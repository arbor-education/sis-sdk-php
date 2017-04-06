<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\LocalAuthority;
use \Arbor\Model\Person;
use \Arbor\Model\Religion;
use \Arbor\Model\Ethnicity;

class Student extends ModelBase
{

    const UNIQUE_LEARNER_NUMBER = 'uniqueLearnerNumber';

    const RESPONSIBLE_LOCAL_AUTHORITY = 'responsibleLocalAuthority';

    const HOME_LOCAL_AUTHORITY = 'homeLocalAuthority';

    const TRAVELLER_STATUS = 'travellerStatus';

    const YOUTH_SUPPORT_SERVICES_AGREEMENT = 'youthSupportServicesAgreement';

    const HOURS_AT_SETTING = 'hoursAtSetting';

    const FUNDED_HOURS = 'fundedHours';

    const ETHNICITY_SOURCE = 'ethnicitySource';

    const PERSON = 'person';

    const RELIGION = 'religion';

    const ETHNICITY = 'ethnicity';

    const BLOOD_GROUP = 'bloodGroup';

    const PREGNANCY_LENGTH = 'pregnancyLength';

    const BIRTH_DELIVERY = 'birthDelivery';

    const HANDEDNESS = 'handedness';

    const STUDENT_NUMBER = 'studentNumber';

    const PRIMARY_GUARDIANS_SALUTATION = 'primaryGuardiansSalutation';

    const PRIMARY_GUARDIANS_ADDRESSEE = 'primaryGuardiansAddressee';

    protected $_resourceType = ResourceType::STUDENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return Student[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Student");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Student
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT, $id);
    }

    /**
     * @return int
     */
    public function getUniqueLearnerNumber()
    {
        return $this->getProperty("uniqueLearnerNumber");
    }

    /**
     * @param int $uniqueLearnerNumber
     */
    public function setUniqueLearnerNumber($uniqueLearnerNumber = null)
    {
        $this->setProperty("uniqueLearnerNumber", $uniqueLearnerNumber);
    }

    /**
     * @return LocalAuthority
     */
    public function getResponsibleLocalAuthority()
    {
        return $this->getProperty("responsibleLocalAuthority");
    }

    /**
     * @param LocalAuthority $responsibleLocalAuthority
     */
    public function setResponsibleLocalAuthority(LocalAuthority $responsibleLocalAuthority = null)
    {
        $this->setProperty("responsibleLocalAuthority", $responsibleLocalAuthority);
    }

    /**
     * @return LocalAuthority
     */
    public function getHomeLocalAuthority()
    {
        return $this->getProperty("homeLocalAuthority");
    }

    /**
     * @param LocalAuthority $homeLocalAuthority
     */
    public function setHomeLocalAuthority(LocalAuthority $homeLocalAuthority = null)
    {
        $this->setProperty("homeLocalAuthority", $homeLocalAuthority);
    }

    /**
     * @return bool
     */
    public function getTravellerStatus()
    {
        return $this->getProperty("travellerStatus");
    }

    /**
     * @param bool $travellerStatus
     */
    public function setTravellerStatus($travellerStatus = null)
    {
        $this->setProperty("travellerStatus", $travellerStatus);
    }

    /**
     * @return string
     */
    public function getYouthSupportServicesAgreement()
    {
        return $this->getProperty("youthSupportServicesAgreement");
    }

    /**
     * @param string $youthSupportServicesAgreement
     */
    public function setYouthSupportServicesAgreement($youthSupportServicesAgreement = null)
    {
        $this->setProperty("youthSupportServicesAgreement", $youthSupportServicesAgreement);
    }

    /**
     * @return string
     */
    public function getHoursAtSetting()
    {
        return $this->getProperty("hoursAtSetting");
    }

    /**
     * @param string $hoursAtSetting
     */
    public function setHoursAtSetting($hoursAtSetting = null)
    {
        $this->setProperty("hoursAtSetting", $hoursAtSetting);
    }

    /**
     * @return string
     */
    public function getFundedHours()
    {
        return $this->getProperty("fundedHours");
    }

    /**
     * @param string $fundedHours
     */
    public function setFundedHours($fundedHours = null)
    {
        $this->setProperty("fundedHours", $fundedHours);
    }

    /**
     * @return string
     */
    public function getEthnicitySource()
    {
        return $this->getProperty("ethnicitySource");
    }

    /**
     * @param string $ethnicitySource
     */
    public function setEthnicitySource($ethnicitySource = null)
    {
        $this->setProperty("ethnicitySource", $ethnicitySource);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return Religion
     */
    public function getReligion()
    {
        return $this->getProperty("religion");
    }

    /**
     * @param Religion $religion
     */
    public function setReligion(Religion $religion = null)
    {
        $this->setProperty("religion", $religion);
    }

    /**
     * @return Ethnicity
     */
    public function getEthnicity()
    {
        return $this->getProperty("ethnicity");
    }

    /**
     * @param Ethnicity $ethnicity
     */
    public function setEthnicity(Ethnicity $ethnicity = null)
    {
        $this->setProperty("ethnicity", $ethnicity);
    }

    /**
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->getProperty("bloodGroup");
    }

    /**
     * @param string $bloodGroup
     */
    public function setBloodGroup($bloodGroup = null)
    {
        $this->setProperty("bloodGroup", $bloodGroup);
    }

    /**
     * @return string
     */
    public function getPregnancyLength()
    {
        return $this->getProperty("pregnancyLength");
    }

    /**
     * @param string $pregnancyLength
     */
    public function setPregnancyLength($pregnancyLength = null)
    {
        $this->setProperty("pregnancyLength", $pregnancyLength);
    }

    /**
     * @return string
     */
    public function getBirthDelivery()
    {
        return $this->getProperty("birthDelivery");
    }

    /**
     * @param string $birthDelivery
     */
    public function setBirthDelivery($birthDelivery = null)
    {
        $this->setProperty("birthDelivery", $birthDelivery);
    }

    /**
     * @return string
     */
    public function getHandedness()
    {
        return $this->getProperty("handedness");
    }

    /**
     * @param string $handedness
     */
    public function setHandedness($handedness = null)
    {
        $this->setProperty("handedness", $handedness);
    }

    /**
     * @return string
     */
    public function getStudentNumber()
    {
        return $this->getProperty("studentNumber");
    }

    /**
     * @param string $studentNumber
     */
    public function setStudentNumber($studentNumber = null)
    {
        $this->setProperty("studentNumber", $studentNumber);
    }

    /**
     * @return string
     */
    public function getPrimaryGuardiansSalutation()
    {
        return $this->getProperty("primaryGuardiansSalutation");
    }

    /**
     * @param string $primaryGuardiansSalutation
     */
    public function setPrimaryGuardiansSalutation($primaryGuardiansSalutation = null)
    {
        $this->setProperty("primaryGuardiansSalutation", $primaryGuardiansSalutation);
    }

    /**
     * @return string
     */
    public function getPrimaryGuardiansAddressee()
    {
        return $this->getProperty("primaryGuardiansAddressee");
    }

    /**
     * @param string $primaryGuardiansAddressee
     */
    public function setPrimaryGuardiansAddressee($primaryGuardiansAddressee = null)
    {
        $this->setProperty("primaryGuardiansAddressee", $primaryGuardiansAddressee);
    }


}
