<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;
use Arbor\Model\EducationalInstitution;
use Arbor\Model\Company;

class AlternativeProvisionPlacement extends ModelBase
{
    const STUDENT = 'student';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const COMPANY = 'company';

    const ALTERNATIVE_PROVISION_PLACEMENT_REASON = 'alternativeProvisionPlacementReason';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const SETTING_TYPE = 'settingType';

    const ATTENDANCE_PATTERN = 'attendancePattern';

    const SESSIONS_PER_WEEK = 'sessionsPerWeek';

    protected $_resourceType = ResourceType::UK_DFE_ALTERNATIVE_PROVISION_PLACEMENT;

    /**
     * @param Query $query
     * @return AlternativeProvisionPlacement[] | Collection
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
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty('educationalInstitution', $educationalInstitution);
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->getProperty('company');
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company = null)
    {
        $this->setProperty('company', $company);
    }

    /**
     * @return AlternativeProvisionPlacementReason
     */
    public function getAlternativeProvisionPlacementReason()
    {
        return $this->getProperty('alternativeProvisionPlacementReason');
    }

    /**
     * @param AlternativeProvisionPlacementReason $alternativeProvisionPlacementReason
     */
    public function setAlternativeProvisionPlacementReason(AlternativeProvisionPlacementReason $alternativeProvisionPlacementReason = null)
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
    public function setSettingType($settingType = null)
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
    public function setAttendancePattern($attendancePattern = null)
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
    public function setSessionsPerWeek($sessionsPerWeek = null)
    {
        $this->setProperty('sessionsPerWeek', $sessionsPerWeek);
    }
}
