<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\UkDfe\QualifiedTeacherRoute;

class Staff extends ModelBase
{

    const PERSON = 'person';

    const ETHNICITY = 'ethnicity';

    const RELIGION = 'religion';

    const BLOOD_GROUP = 'bloodGroup';

    const STAFF_NUMBER = 'staffNumber';

    const ZENDESK_USER = 'zendeskUser';

    const TIMETABLE_ABBREVIATION = 'timetableAbbreviation';

    const LEGACY_SYSTEM_ID = 'legacySystemId';

    const ELIGIBLE_FOR_SCHOOL_WORKFORCE_RETURN = 'eligibleForSchoolWorkforceReturn';

    const QUALIFIED_TEACHER_STATUS = 'qualifiedTeacherStatus';

    const QUALIFIED_TEACHER_ROUTE = 'qualifiedTeacherRoute';

    const HLTA_STATUS = 'hltaStatus';

    protected $_resourceType = ResourceType::STAFF;

    /**
     * @param Query $query
     * @return Staff[] | Collection
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

        $query->setResourceType(ResourceType::STAFF);

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

        return $gateway->retrieve(ResourceType::STAFF, $id);
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
    public function getStaffNumber()
    {
        return $this->getProperty('staffNumber');
    }

    /**
     * @param string $staffNumber
     */
    public function setStaffNumber($staffNumber = null)
    {
        $this->setProperty('staffNumber', $staffNumber);
    }

    /**
     * @return string
     */
    public function getZendeskUser()
    {
        return $this->getProperty('zendeskUser');
    }

    /**
     * @param string $zendeskUser
     */
    public function setZendeskUser($zendeskUser = null)
    {
        $this->setProperty('zendeskUser', $zendeskUser);
    }

    /**
     * @return string
     */
    public function getTimetableAbbreviation()
    {
        return $this->getProperty('timetableAbbreviation');
    }

    /**
     * @param string $timetableAbbreviation
     */
    public function setTimetableAbbreviation($timetableAbbreviation = null)
    {
        $this->setProperty('timetableAbbreviation', $timetableAbbreviation);
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
     * @return bool
     */
    public function getEligibleForSchoolWorkforceReturn()
    {
        return $this->getProperty('eligibleForSchoolWorkforceReturn');
    }

    /**
     * @param bool $eligibleForSchoolWorkforceReturn
     */
    public function setEligibleForSchoolWorkforceReturn($eligibleForSchoolWorkforceReturn = null)
    {
        $this->setProperty('eligibleForSchoolWorkforceReturn', $eligibleForSchoolWorkforceReturn);
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
    public function setQualifiedTeacherStatus($qualifiedTeacherStatus = null)
    {
        $this->setProperty('qualifiedTeacherStatus', $qualifiedTeacherStatus);
    }

    /**
     * @return QualifiedTeacherRoute
     */
    public function getQualifiedTeacherRoute()
    {
        return $this->getProperty('qualifiedTeacherRoute');
    }

    /**
     * @param QualifiedTeacherRoute $qualifiedTeacherRoute
     */
    public function setQualifiedTeacherRoute(QualifiedTeacherRoute $qualifiedTeacherRoute = null)
    {
        $this->setProperty('qualifiedTeacherRoute', $qualifiedTeacherRoute);
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
    public function setHltaStatus($hltaStatus = null)
    {
        $this->setProperty('hltaStatus', $hltaStatus);
    }


}
