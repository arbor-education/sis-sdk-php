<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffAttendanceMark extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ATTENDANCE_MARK = 'attendanceMark';

    public const MARK_DESCRIPTION = 'markDescription';

    public const MARK_SHORT_DESCRIPTION = 'markShortDescription';

    public const IS_DEFAULT_PRESENT = 'isDefaultPresent';

    public const IS_DEFAULT_ABSENT = 'isDefaultAbsent';

    public const IS_DEFAULT_LATE = 'isDefaultLate';

    public const IS_LEGAL_PRESENT = 'isLegalPresent';

    public const IS_LEGAL_HOLIDAY_LEAVE = 'isLegalHolidayLeave';

    public const IS_LEGAL_MEDICAL_LEAVE = 'isLegalMedicalLeave';

    public const IS_LEGAL_ILLNESS = 'isLegalIllness';

    public const IS_PHYSICAL_PRESENT = 'isPhysicalPresent';

    public const IS_PHYSICAL_LATE = 'isPhysicalLate';

    public const IS_PHYSICAL_ABSENT = 'isPhysicalAbsent';

    public const IS_PHYSICAL_NOT_REQUIRED = 'isPhysicalNotRequired';

    protected $_resourceType = ResourceType::STAFF_ATTENDANCE_MARK;

    /**
     * @param Query $query
     * @return StaffAttendanceMark[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_ATTENDANCE_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffAttendanceMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_ATTENDANCE_MARK, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getAttendanceMark()
    {
        return $this->getProperty('attendanceMark');
    }

    /**
     * @param string $attendanceMark
     */
    public function setAttendanceMark(string $attendanceMark = null)
    {
        $this->setProperty('attendanceMark', $attendanceMark);
    }

    /**
     * @return string
     */
    public function getMarkDescription()
    {
        return $this->getProperty('markDescription');
    }

    /**
     * @param string $markDescription
     */
    public function setMarkDescription(string $markDescription = null)
    {
        $this->setProperty('markDescription', $markDescription);
    }

    /**
     * @return string
     */
    public function getMarkShortDescription()
    {
        return $this->getProperty('markShortDescription');
    }

    /**
     * @param string $markShortDescription
     */
    public function setMarkShortDescription(string $markShortDescription = null)
    {
        $this->setProperty('markShortDescription', $markShortDescription);
    }

    /**
     * @return bool
     */
    public function getIsDefaultPresent()
    {
        return $this->getProperty('isDefaultPresent');
    }

    /**
     * @param bool $isDefaultPresent
     */
    public function setIsDefaultPresent(bool $isDefaultPresent = null)
    {
        $this->setProperty('isDefaultPresent', $isDefaultPresent);
    }

    /**
     * @return bool
     */
    public function getIsDefaultAbsent()
    {
        return $this->getProperty('isDefaultAbsent');
    }

    /**
     * @param bool $isDefaultAbsent
     */
    public function setIsDefaultAbsent(bool $isDefaultAbsent = null)
    {
        $this->setProperty('isDefaultAbsent', $isDefaultAbsent);
    }

    /**
     * @return bool
     */
    public function getIsDefaultLate()
    {
        return $this->getProperty('isDefaultLate');
    }

    /**
     * @param bool $isDefaultLate
     */
    public function setIsDefaultLate(bool $isDefaultLate = null)
    {
        $this->setProperty('isDefaultLate', $isDefaultLate);
    }

    /**
     * @return bool
     */
    public function getIsLegalPresent()
    {
        return $this->getProperty('isLegalPresent');
    }

    /**
     * @param bool $isLegalPresent
     */
    public function setIsLegalPresent(bool $isLegalPresent = null)
    {
        $this->setProperty('isLegalPresent', $isLegalPresent);
    }

    /**
     * @return bool
     */
    public function getIsLegalHolidayLeave()
    {
        return $this->getProperty('isLegalHolidayLeave');
    }

    /**
     * @param bool $isLegalHolidayLeave
     */
    public function setIsLegalHolidayLeave(bool $isLegalHolidayLeave = null)
    {
        $this->setProperty('isLegalHolidayLeave', $isLegalHolidayLeave);
    }

    /**
     * @return bool
     */
    public function getIsLegalMedicalLeave()
    {
        return $this->getProperty('isLegalMedicalLeave');
    }

    /**
     * @param bool $isLegalMedicalLeave
     */
    public function setIsLegalMedicalLeave(bool $isLegalMedicalLeave = null)
    {
        $this->setProperty('isLegalMedicalLeave', $isLegalMedicalLeave);
    }

    /**
     * @return bool
     */
    public function getIsLegalIllness()
    {
        return $this->getProperty('isLegalIllness');
    }

    /**
     * @param bool $isLegalIllness
     */
    public function setIsLegalIllness(bool $isLegalIllness = null)
    {
        $this->setProperty('isLegalIllness', $isLegalIllness);
    }

    /**
     * @return bool
     */
    public function getIsPhysicalPresent()
    {
        return $this->getProperty('isPhysicalPresent');
    }

    /**
     * @param bool $isPhysicalPresent
     */
    public function setIsPhysicalPresent(bool $isPhysicalPresent = null)
    {
        $this->setProperty('isPhysicalPresent', $isPhysicalPresent);
    }

    /**
     * @return bool
     */
    public function getIsPhysicalLate()
    {
        return $this->getProperty('isPhysicalLate');
    }

    /**
     * @param bool $isPhysicalLate
     */
    public function setIsPhysicalLate(bool $isPhysicalLate = null)
    {
        $this->setProperty('isPhysicalLate', $isPhysicalLate);
    }

    /**
     * @return bool
     */
    public function getIsPhysicalAbsent()
    {
        return $this->getProperty('isPhysicalAbsent');
    }

    /**
     * @param bool $isPhysicalAbsent
     */
    public function setIsPhysicalAbsent(bool $isPhysicalAbsent = null)
    {
        $this->setProperty('isPhysicalAbsent', $isPhysicalAbsent);
    }

    /**
     * @return bool
     */
    public function getIsPhysicalNotRequired()
    {
        return $this->getProperty('isPhysicalNotRequired');
    }

    /**
     * @param bool $isPhysicalNotRequired
     */
    public function setIsPhysicalNotRequired(bool $isPhysicalNotRequired = null)
    {
        $this->setProperty('isPhysicalNotRequired', $isPhysicalNotRequired);
    }
}
