<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffAbsence extends ModelBase
{
    public const STAFF = 'staff';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const STAFF_ABSENCE_CATEGORY = 'staffAbsenceCategory';

    public const SICKNESS_CATEGORY = 'sicknessCategory';

    public const SICKNESS_SUBCATEGORY = 'sicknessSubcategory';

    public const APPROVED_DATETIME = 'approvedDatetime';

    public const APPROVED_BY_STAFF = 'approvedByStaff';

    public const CALCULATED_WORKING_DAYS = 'calculatedWorkingDays';

    public const ACTUAL_WORKING_DAYS = 'actualWorkingDays';

    public const WORKING_DAYS = 'workingDays';

    public const CALCULATED_WORKING_HOURS = 'calculatedWorkingHours';

    public const ACTUAL_WORKING_HOURS = 'actualWorkingHours';

    public const WORKING_HOURS = 'workingHours';

    public const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::STAFF_ABSENCE;

    /**
     * @param Query $query
     * @return StaffAbsence[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_ABSENCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffAbsence
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_ABSENCE, $id);
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
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return \Arbor\Model\StaffAbsenceCategory
     */
    public function getStaffAbsenceCategory()
    {
        return $this->getProperty('staffAbsenceCategory');
    }

    /**
     * @param \Arbor\Model\StaffAbsenceCategory $staffAbsenceCategory
     */
    public function setStaffAbsenceCategory(\Arbor\Model\StaffAbsenceCategory $staffAbsenceCategory = null)
    {
        $this->setProperty('staffAbsenceCategory', $staffAbsenceCategory);
    }

    /**
     * @return \Arbor\Model\StaffAbsenceSicknessCategory
     */
    public function getSicknessCategory()
    {
        return $this->getProperty('sicknessCategory');
    }

    /**
     * @param \Arbor\Model\StaffAbsenceSicknessCategory $sicknessCategory
     */
    public function setSicknessCategory(\Arbor\Model\StaffAbsenceSicknessCategory $sicknessCategory = null)
    {
        $this->setProperty('sicknessCategory', $sicknessCategory);
    }

    /**
     * @return \Arbor\Model\StaffAbsenceSicknessSubcategory
     */
    public function getSicknessSubcategory()
    {
        return $this->getProperty('sicknessSubcategory');
    }

    /**
     * @param \Arbor\Model\StaffAbsenceSicknessSubcategory $sicknessSubcategory
     */
    public function setSicknessSubcategory(\Arbor\Model\StaffAbsenceSicknessSubcategory $sicknessSubcategory = null)
    {
        $this->setProperty('sicknessSubcategory', $sicknessSubcategory);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty('approvedDatetime');
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty('approvedDatetime', $approvedDatetime);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty('approvedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $approvedByStaff
     */
    public function setApprovedByStaff(\Arbor\Model\Staff $approvedByStaff = null)
    {
        $this->setProperty('approvedByStaff', $approvedByStaff);
    }

    /**
     * @return float
     */
    public function getCalculatedWorkingDays()
    {
        return $this->getProperty('calculatedWorkingDays');
    }

    /**
     * @param float $calculatedWorkingDays
     */
    public function setCalculatedWorkingDays(float $calculatedWorkingDays = null)
    {
        $this->setProperty('calculatedWorkingDays', $calculatedWorkingDays);
    }

    /**
     * @return float
     */
    public function getActualWorkingDays()
    {
        return $this->getProperty('actualWorkingDays');
    }

    /**
     * @param float $actualWorkingDays
     */
    public function setActualWorkingDays(float $actualWorkingDays = null)
    {
        $this->setProperty('actualWorkingDays', $actualWorkingDays);
    }

    /**
     * @return float
     */
    public function getWorkingDays()
    {
        return $this->getProperty('workingDays');
    }

    /**
     * @param float $workingDays
     */
    public function setWorkingDays(float $workingDays = null)
    {
        $this->setProperty('workingDays', $workingDays);
    }

    /**
     * @return float
     */
    public function getCalculatedWorkingHours()
    {
        return $this->getProperty('calculatedWorkingHours');
    }

    /**
     * @param float $calculatedWorkingHours
     */
    public function setCalculatedWorkingHours(float $calculatedWorkingHours = null)
    {
        $this->setProperty('calculatedWorkingHours', $calculatedWorkingHours);
    }

    /**
     * @return float
     */
    public function getActualWorkingHours()
    {
        return $this->getProperty('actualWorkingHours');
    }

    /**
     * @param float $actualWorkingHours
     */
    public function setActualWorkingHours(float $actualWorkingHours = null)
    {
        $this->setProperty('actualWorkingHours', $actualWorkingHours);
    }

    /**
     * @return float
     */
    public function getWorkingHours()
    {
        return $this->getProperty('workingHours');
    }

    /**
     * @param float $workingHours
     */
    public function setWorkingHours(float $workingHours = null)
    {
        $this->setProperty('workingHours', $workingHours);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
