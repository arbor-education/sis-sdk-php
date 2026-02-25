<?php

namespace Arbor\Model\Cymru;

use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\Cymru\ResourceType;

class StaffLeaverRetentionDetail extends ModelBase
{
    public const LEAVING_DATE = 'leavingDate';

    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const SCHOOL_WORKFORCE_CENSUS_BUSINESS_ROLE = 'schoolWorkforceCensusBusinessRole';

    public const STAFF = 'staff';

    public const STAFF_DESTINATION = 'staffDestination';

    public const SUBJECT = 'subject';

    public const TEACHING_EXPERIENCE = 'teachingExperience';

    protected $_resourceType = ResourceType::CYMRU_STAFF_LEAVER_RETENTION_DETAIL;

    /**
     * @param Query $query
     * @return StaffLeaverRetentionDetail[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_STAFF_LEAVER_RETENTION_DETAIL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffLeaverRetentionDetail
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_STAFF_LEAVER_RETENTION_DETAIL, $id);
    }

    /**
     * @return \DateTime
     */
    public function getLeavingDate()
    {
        return $this->getProperty('leavingDate');
    }

    /**
     * @param \DateTime $leavingDate
     */
    public function setLeavingDate(\DateTime $leavingDate = null)
    {
        $this->setProperty('leavingDate', $leavingDate);
    }

    /**
     * @return \Arbor\Model\CurriculumGrade
     */
    public function getCurriculumGrade()
    {
        return $this->getProperty('curriculumGrade');
    }

    /**
     * @param \Arbor\Model\CurriculumGrade $curriculumGrade
     */
    public function setCurriculumGrade(\Arbor\Model\CurriculumGrade $curriculumGrade = null)
    {
        $this->setProperty('curriculumGrade', $curriculumGrade);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole
     */
    public function getSchoolWorkforceCensusBusinessRole()
    {
        return $this->getProperty('schoolWorkforceCensusBusinessRole');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole
     * $schoolWorkforceCensusBusinessRole
     */
    public function setSchoolWorkforceCensusBusinessRole(\Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole $schoolWorkforceCensusBusinessRole = null)
    {
        $this->setProperty('schoolWorkforceCensusBusinessRole', $schoolWorkforceCensusBusinessRole);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return \Arbor\Model\StaffDestination
     */
    public function getStaffDestination()
    {
        return $this->getProperty('staffDestination');
    }

    /**
     * @param \Arbor\Model\StaffDestination $staffDestination
     */
    public function setStaffDestination(\Arbor\Model\StaffDestination $staffDestination = null)
    {
        $this->setProperty('staffDestination', $staffDestination);
    }

    /**
     * @return \Arbor\Model\Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param \Arbor\Model\Subject $subject
     */
    public function setSubject(\Arbor\Model\Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return int
     */
    public function getTeachingExperience()
    {
        return $this->getProperty('teachingExperience');
    }

    /**
     * @param int $teachingExperience
     */
    public function setTeachingExperience(int $teachingExperience = null)
    {
        $this->setProperty('teachingExperience', $teachingExperience);
    }
}
