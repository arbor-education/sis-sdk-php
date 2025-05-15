<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Staff extends ModelBase
{
    public const PERSON = 'person';

    public const ETHNICITY = 'ethnicity';

    public const RELIGION = 'religion';

    public const BLOOD_GROUP = 'bloodGroup';

    public const STAFF_NUMBER = 'staffNumber';

    public const CONTINUOUS_SERVICE_START_DATE = 'continuousServiceStartDate';

    public const ZENDESK_USER = 'zendeskUser';

    public const TIMETABLE_ABBREVIATION = 'timetableAbbreviation';

    public const LEGACY_SYSTEM_ID = 'legacySystemId';

    public const EXTERNAL_PERSON_ID = 'externalPersonId';

    public const INCLUDE_IN_COVER = 'includeInCover';

    public const ELIGIBLE_FOR_SCHOOL_WORKFORCE_RETURN = 'eligibleForSchoolWorkforceReturn';

    public const QUALIFIED_TEACHER_STATUS = 'qualifiedTeacherStatus';

    public const QUALIFIED_TEACHER_LEARNING_AND_SKILLS_STATUS = 'qualifiedTeacherLearningAndSkillsStatus';

    public const EARLY_YEARS_TEACHER_STATUS = 'earlyYearsTeacherStatus';

    public const QUALIFIED_TEACHER_ROUTE = 'qualifiedTeacherRoute';

    public const HLTA_STATUS = 'hltaStatus';

    public const NEWLY_QUALIFIED_TEACHER_DATE = 'newlyQualifiedTeacherDate';

    public const SLT_STATUS_FOR_SWC = 'sltStatusForSwc';

    protected $_resourceType = ResourceType::STAFF;

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
     * @return \Arbor\Model\Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param \Arbor\Model\Person $person
     */
    public function setPerson(\Arbor\Model\Person $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return \Arbor\Model\Ethnicity
     */
    public function getEthnicity()
    {
        return $this->getProperty('ethnicity');
    }

    /**
     * @param \Arbor\Model\Ethnicity $ethnicity
     */
    public function setEthnicity(\Arbor\Model\Ethnicity $ethnicity = null)
    {
        $this->setProperty('ethnicity', $ethnicity);
    }

    /**
     * @return \Arbor\Model\Religion
     */
    public function getReligion()
    {
        return $this->getProperty('religion');
    }

    /**
     * @param \Arbor\Model\Religion $religion
     */
    public function setReligion(\Arbor\Model\Religion $religion = null)
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
    public function setBloodGroup(string $bloodGroup = null)
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
    public function setStaffNumber(string $staffNumber = null)
    {
        $this->setProperty('staffNumber', $staffNumber);
    }

    /**
     * @return \DateTime
     */
    public function getContinuousServiceStartDate()
    {
        return $this->getProperty('continuousServiceStartDate');
    }

    /**
     * @param \DateTime $continuousServiceStartDate
     */
    public function setContinuousServiceStartDate(\DateTime $continuousServiceStartDate = null)
    {
        $this->setProperty('continuousServiceStartDate', $continuousServiceStartDate);
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
    public function setZendeskUser(string $zendeskUser = null)
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
    public function setTimetableAbbreviation(string $timetableAbbreviation = null)
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
    public function setLegacySystemId(string $legacySystemId = null)
    {
        $this->setProperty('legacySystemId', $legacySystemId);
    }

    /**
     * @return string
     */
    public function getExternalPersonId()
    {
        return $this->getProperty('externalPersonId');
    }

    /**
     * @param string $externalPersonId
     */
    public function setExternalPersonId(string $externalPersonId = null)
    {
        $this->setProperty('externalPersonId', $externalPersonId);
    }

    /**
     * @return bool
     */
    public function getIncludeInCover()
    {
        return $this->getProperty('includeInCover');
    }

    /**
     * @param bool $includeInCover
     */
    public function setIncludeInCover(bool $includeInCover = null)
    {
        $this->setProperty('includeInCover', $includeInCover);
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
     * @return bool
     */
    public function getQualifiedTeacherLearningAndSkillsStatus()
    {
        return $this->getProperty('qualifiedTeacherLearningAndSkillsStatus');
    }

    /**
     * @param bool $qualifiedTeacherLearningAndSkillsStatus
     */
    public function setQualifiedTeacherLearningAndSkillsStatus(bool $qualifiedTeacherLearningAndSkillsStatus = null)
    {
        $this->setProperty('qualifiedTeacherLearningAndSkillsStatus', $qualifiedTeacherLearningAndSkillsStatus);
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
     * @return \Arbor\Model\UkDfe\QualifiedTeacherRoute
     */
    public function getQualifiedTeacherRoute()
    {
        return $this->getProperty('qualifiedTeacherRoute');
    }

    /**
     * @param \Arbor\Model\UkDfe\QualifiedTeacherRoute $qualifiedTeacherRoute
     */
    public function setQualifiedTeacherRoute(\Arbor\Model\UkDfe\QualifiedTeacherRoute $qualifiedTeacherRoute = null)
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
    public function setHltaStatus(bool $hltaStatus = null)
    {
        $this->setProperty('hltaStatus', $hltaStatus);
    }

    /**
     * @return \DateTime
     */
    public function getNewlyQualifiedTeacherDate()
    {
        return $this->getProperty('newlyQualifiedTeacherDate');
    }

    /**
     * @param \DateTime $newlyQualifiedTeacherDate
     */
    public function setNewlyQualifiedTeacherDate(\DateTime $newlyQualifiedTeacherDate = null)
    {
        $this->setProperty('newlyQualifiedTeacherDate', $newlyQualifiedTeacherDate);
    }

    /**
     * @return string
     */
    public function getSltStatusForSwc()
    {
        return $this->getProperty('sltStatusForSwc');
    }

    /**
     * @param string $sltStatusForSwc
     */
    public function setSltStatusForSwc(string $sltStatusForSwc = null)
    {
        $this->setProperty('sltStatusForSwc', $sltStatusForSwc);
    }
}
