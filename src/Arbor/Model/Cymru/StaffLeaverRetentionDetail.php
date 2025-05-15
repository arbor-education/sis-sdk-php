<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class StaffLeaverRetentionDetail extends ModelBase
{
    public const CURRICULUM_GRADE = 'curriculumGrade';

    public const POSITION_CATEGORY = 'positionCategory';

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
     * @return \Arbor\Model\Cymru\PositionCategory
     */
    public function getPositionCategory()
    {
        return $this->getProperty('positionCategory');
    }

    /**
     * @param \Arbor\Model\Cymru\PositionCategory $positionCategory
     */
    public function setPositionCategory(\Arbor\Model\Cymru\PositionCategory $positionCategory = null)
    {
        $this->setProperty('positionCategory', $positionCategory);
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
