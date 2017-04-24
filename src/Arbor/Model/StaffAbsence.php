<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Staff;
use \Arbor\Model\StaffAbsenceCategory;

class StaffAbsence extends ModelBase
{
    const STAFF = 'staff';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const STAFF_ABSENCE_CATEGORY = 'staffAbsenceCategory';

    const APPROVED_DATETIME = 'approvedDatetime';

    const APPROVED_BY_STAFF = 'approvedByStaff';

    const PAID_SICK_LEAVE_USED = 'paidSickLeaveUsed';

    const UNPAID_SICK_LEAVE_USED = 'unpaidSickLeaveUsed';

    const PAID_HOLIDAY_USED = 'paidHolidayUsed';

    const UNPAID_HOLIDAY_USED = 'unpaidHolidayUsed';

    const PAID_OTHER_LEAVE = 'paidOtherLeave';

    const UNPAID_OTHER_LEAVE = 'unpaidOtherLeave';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::STAFF_ABSENCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return StaffAbsence[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StaffAbsence");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StaffAbsence
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STAFF_ABSENCE, $id);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty("staff");
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty("staff", $staff);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }

    /**
     * @return StaffAbsenceCategory
     */
    public function getStaffAbsenceCategory()
    {
        return $this->getProperty("staffAbsenceCategory");
    }

    /**
     * @param StaffAbsenceCategory $staffAbsenceCategory
     */
    public function setStaffAbsenceCategory(StaffAbsenceCategory $staffAbsenceCategory = null)
    {
        $this->setProperty("staffAbsenceCategory", $staffAbsenceCategory);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty("approvedDatetime");
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty("approvedDatetime", $approvedDatetime);
    }

    /**
     * @return Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty("approvedByStaff");
    }

    /**
     * @param Staff $approvedByStaff
     */
    public function setApprovedByStaff(Staff $approvedByStaff = null)
    {
        $this->setProperty("approvedByStaff", $approvedByStaff);
    }

    /**
     * @return float
     */
    public function getPaidSickLeaveUsed()
    {
        return $this->getProperty("paidSickLeaveUsed");
    }

    /**
     * @param float $paidSickLeaveUsed
     */
    public function setPaidSickLeaveUsed($paidSickLeaveUsed = null)
    {
        $this->setProperty("paidSickLeaveUsed", $paidSickLeaveUsed);
    }

    /**
     * @return float
     */
    public function getUnpaidSickLeaveUsed()
    {
        return $this->getProperty("unpaidSickLeaveUsed");
    }

    /**
     * @param float $unpaidSickLeaveUsed
     */
    public function setUnpaidSickLeaveUsed($unpaidSickLeaveUsed = null)
    {
        $this->setProperty("unpaidSickLeaveUsed", $unpaidSickLeaveUsed);
    }

    /**
     * @return float
     */
    public function getPaidHolidayUsed()
    {
        return $this->getProperty("paidHolidayUsed");
    }

    /**
     * @param float $paidHolidayUsed
     */
    public function setPaidHolidayUsed($paidHolidayUsed = null)
    {
        $this->setProperty("paidHolidayUsed", $paidHolidayUsed);
    }

    /**
     * @return float
     */
    public function getUnpaidHolidayUsed()
    {
        return $this->getProperty("unpaidHolidayUsed");
    }

    /**
     * @param float $unpaidHolidayUsed
     */
    public function setUnpaidHolidayUsed($unpaidHolidayUsed = null)
    {
        $this->setProperty("unpaidHolidayUsed", $unpaidHolidayUsed);
    }

    /**
     * @return float
     */
    public function getPaidOtherLeave()
    {
        return $this->getProperty("paidOtherLeave");
    }

    /**
     * @param float $paidOtherLeave
     */
    public function setPaidOtherLeave($paidOtherLeave = null)
    {
        $this->setProperty("paidOtherLeave", $paidOtherLeave);
    }

    /**
     * @return float
     */
    public function getUnpaidOtherLeave()
    {
        return $this->getProperty("unpaidOtherLeave");
    }

    /**
     * @param float $unpaidOtherLeave
     */
    public function setUnpaidOtherLeave($unpaidOtherLeave = null)
    {
        $this->setProperty("unpaidOtherLeave", $unpaidOtherLeave);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }
}
