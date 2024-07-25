<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AlternativeProvisionPlacement extends ModelBase
{
    public const STUDENT = 'student';

    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const COMPANY = 'company';

    public const ALTERNATIVE_PROVISION_PLACEMENT_REASON = 'alternativeProvisionPlacementReason';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const SETTING_TYPE = 'settingType';

    public const ATTENDANCE_PATTERN = 'attendancePattern';

    public const SESSIONS_PER_WEEK = 'sessionsPerWeek';

    protected $_resourceType = ResourceType::UK_DFE_ALTERNATIVE_PROVISION_PLACEMENT;

    /**
     * @param Query $query
     * @return AlternativeProvisionPlacement[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ALTERNATIVE_PROVISION_PLACEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AlternativeProvisionPlacement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ALTERNATIVE_PROVISION_PLACEMENT, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(\Arbor\Model\EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty('educationalInstitution', $educationalInstitution);
    }

    /**
     * @return \Arbor\Model\Company
     */
    public function getCompany()
    {
        return $this->getProperty('company');
    }

    /**
     * @param \Arbor\Model\Company $company
     */
    public function setCompany(\Arbor\Model\Company $company = null)
    {
        $this->setProperty('company', $company);
    }

    /**
     * @return \Arbor\Model\UkDfe\AlternativeProvisionPlacementReason
     */
    public function getAlternativeProvisionPlacementReason()
    {
        return $this->getProperty('alternativeProvisionPlacementReason');
    }

    /**
     * @param \Arbor\Model\UkDfe\AlternativeProvisionPlacementReason
     * $alternativeProvisionPlacementReason
     */
    public function setAlternativeProvisionPlacementReason(\Arbor\Model\UkDfe\AlternativeProvisionPlacementReason $alternativeProvisionPlacementReason = null)
    {
        $this->setProperty('alternativeProvisionPlacementReason', $alternativeProvisionPlacementReason);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getSettingType()
    {
        return $this->getProperty('settingType');
    }

    /**
     * @param string $settingType
     */
    public function setSettingType(string $settingType = null)
    {
        $this->setProperty('settingType', $settingType);
    }

    /**
     * @return string
     */
    public function getAttendancePattern()
    {
        return $this->getProperty('attendancePattern');
    }

    /**
     * @param string $attendancePattern
     */
    public function setAttendancePattern(string $attendancePattern = null)
    {
        $this->setProperty('attendancePattern', $attendancePattern);
    }

    /**
     * @return int
     */
    public function getSessionsPerWeek()
    {
        return $this->getProperty('sessionsPerWeek');
    }

    /**
     * @param int $sessionsPerWeek
     */
    public function setSessionsPerWeek(int $sessionsPerWeek = null)
    {
        $this->setProperty('sessionsPerWeek', $sessionsPerWeek);
    }
}
