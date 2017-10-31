<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StaffAbsence extends ModelBase
{
    const STAFF = 'staff';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const STAFF_ABSENCE_CATEGORY = 'staffAbsenceCategory';

    const SICKNESS_CATEGORY = 'sicknessCategory';

    const SICKNESS_SUBCATEGORY = 'sicknessSubcategory';

    const APPROVED_DATETIME = 'approvedDatetime';

    const APPROVED_BY_STAFF = 'approvedByStaff';

    const CALCULATED_WORKING_DAYS = 'calculatedWorkingDays';

    const ACTUAL_WORKING_DAYS = 'actualWorkingDays';

    const WORKING_DAYS = 'workingDays';

    const CALCULATED_WORKING_HOURS = 'calculatedWorkingHours';

    const ACTUAL_WORKING_HOURS = 'actualWorkingHours';

    const WORKING_HOURS = 'workingHours';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::STAFF_ABSENCE;

    /**
     * @param Query $query
     * @return StaffAbsence[] | Collection
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
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
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
     * @return StaffAbsenceCategory
     */
    public function getStaffAbsenceCategory()
    {
        return $this->getProperty('staffAbsenceCategory');
    }

    /**
     * @param StaffAbsenceCategory $staffAbsenceCategory
     */
    public function setStaffAbsenceCategory(StaffAbsenceCategory $staffAbsenceCategory = null)
    {
        $this->setProperty('staffAbsenceCategory', $staffAbsenceCategory);
    }

    /**
     * @return StaffAbsenceSicknessCategory
     */
    public function getSicknessCategory()
    {
        return $this->getProperty('sicknessCategory');
    }

    /**
     * @param StaffAbsenceSicknessCategory $sicknessCategory
     */
    public function setSicknessCategory(StaffAbsenceSicknessCategory $sicknessCategory = null)
    {
        $this->setProperty('sicknessCategory', $sicknessCategory);
    }

    /**
     * @return StaffAbsenceSicknessSubcategory
     */
    public function getSicknessSubcategory()
    {
        return $this->getProperty('sicknessSubcategory');
    }

    /**
     * @param StaffAbsenceSicknessSubcategory $sicknessSubcategory
     */
    public function setSicknessSubcategory(StaffAbsenceSicknessSubcategory $sicknessSubcategory = null)
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
     * @return Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty('approvedByStaff');
    }

    /**
     * @param Staff $approvedByStaff
     */
    public function setApprovedByStaff(Staff $approvedByStaff = null)
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
    public function setCalculatedWorkingDays($calculatedWorkingDays = null)
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
    public function setActualWorkingDays($actualWorkingDays = null)
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
    public function setWorkingDays($workingDays = null)
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
    public function setCalculatedWorkingHours($calculatedWorkingHours = null)
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
    public function setActualWorkingHours($actualWorkingHours = null)
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
    public function setWorkingHours($workingHours = null)
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
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
