<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class StaffSpecialSchoolTeacherQualification extends ModelBase
{
    public const STAFF = 'staff';

    public const STAFF_SPECIAL_SCHOOL_TEACHER_QUALIFICATION_TYPE = 'staffSpecialSchoolTeacherQualificationType';

    protected $_resourceType = ResourceType::CYMRU_STAFF_SPECIAL_SCHOOL_TEACHER_QUALIFICATION;

    /**
     * @param Query $query
     * @return StaffSpecialSchoolTeacherQualification[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_STAFF_SPECIAL_SCHOOL_TEACHER_QUALIFICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffSpecialSchoolTeacherQualification
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_STAFF_SPECIAL_SCHOOL_TEACHER_QUALIFICATION, $id);
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
     * @return \Arbor\Model\Cymru\StaffSpecialSchoolTeacherQualificationType
     */
    public function getStaffSpecialSchoolTeacherQualificationType()
    {
        return $this->getProperty('staffSpecialSchoolTeacherQualificationType');
    }

    /**
     * @param \Arbor\Model\Cymru\StaffSpecialSchoolTeacherQualificationType
     * $staffSpecialSchoolTeacherQualificationType
     */
    public function setStaffSpecialSchoolTeacherQualificationType(\Arbor\Model\Cymru\StaffSpecialSchoolTeacherQualificationType $staffSpecialSchoolTeacherQualificationType = null)
    {
        $this->setProperty('staffSpecialSchoolTeacherQualificationType', $staffSpecialSchoolTeacherQualificationType);
    }
}
