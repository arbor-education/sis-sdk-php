<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceMark extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ATTENDANCE_MARK = 'attendanceMark';

    public const MARK_INDEX = 'markIndex';

    public const MARK_DESCRIPTION = 'markDescription';

    public const MARK_SHORT_DESCRIPTION = 'markShortDescription';

    public const IS_LEGAL_PRESENT = 'isLegalPresent';

    public const IS_LEGAL_APPROVED_EDUCATIONAL_ACTIVITY = 'isLegalApprovedEducationalActivity';

    public const IS_LEGAL_NOT_REQUIRED = 'isLegalNotRequired';

    public const IS_LEGAL_ABSENT = 'isLegalAbsent';

    public const IS_STATISTICAL_PRESENT = 'isStatisticalPresent';

    public const IS_STATISTICAL_AUTHORIZED_ABSENT = 'isStatisticalAuthorizedAbsent';

    public const IS_STATISTICAL_UNAUTHORIZED_ABSENT = 'isStatisticalUnauthorizedAbsent';

    public const IS_STATISTICAL_APPROVED_EDUCATIONAL_ACTIVITY = 'isStatisticalApprovedEducationalActivity';

    public const IS_STATISTICAL_POSSIBLE_ATTENDANCE = 'isStatisticalPossibleAttendance';

    public const IS_DEFAULT_PRESENT = 'isDefaultPresent';

    public const IS_DEFAULT_LATE = 'isDefaultLate';

    public const IS_DEFAULT_LATE_AFTER_REGISTER_CLOSED = 'isDefaultLateAfterRegisterClosed';

    public const IS_DEFAULT_ABSENT = 'isDefaultAbsent';

    public const IS_PHYSICAL_PRESENT = 'isPhysicalPresent';

    public const IS_PHYSICAL_LATE = 'isPhysicalLate';

    public const IS_PHYSICAL_ABSENT = 'isPhysicalAbsent';

    public const IS_PHYSICAL_NOT_REQUIRED = 'isPhysicalNotRequired';

    public const IS_PRESUMED_ABSENT = 'isPresumedAbsent';

    public const IS_EXCLUDED = 'isExcluded';

    public const SHOW_IN_REGISTER = 'showInRegister';

    protected $_resourceType = ResourceType::ATTENDANCE_MARK;

    /**
     * @param Query $query
     * @return AttendanceMark[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_MARK, $id);
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
     * @return int
     */
    public function getMarkIndex()
    {
        return $this->getProperty('markIndex');
    }

    /**
     * @param int $markIndex
     */
    public function setMarkIndex(int $markIndex = null)
    {
        $this->setProperty('markIndex', $markIndex);
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
    public function getIsLegalApprovedEducationalActivity()
    {
        return $this->getProperty('isLegalApprovedEducationalActivity');
    }

    /**
     * @param bool $isLegalApprovedEducationalActivity
     */
    public function setIsLegalApprovedEducationalActivity(bool $isLegalApprovedEducationalActivity = null)
    {
        $this->setProperty('isLegalApprovedEducationalActivity', $isLegalApprovedEducationalActivity);
    }

    /**
     * @return bool
     */
    public function getIsLegalNotRequired()
    {
        return $this->getProperty('isLegalNotRequired');
    }

    /**
     * @param bool $isLegalNotRequired
     */
    public function setIsLegalNotRequired(bool $isLegalNotRequired = null)
    {
        $this->setProperty('isLegalNotRequired', $isLegalNotRequired);
    }

    /**
     * @return bool
     */
    public function getIsLegalAbsent()
    {
        return $this->getProperty('isLegalAbsent');
    }

    /**
     * @param bool $isLegalAbsent
     */
    public function setIsLegalAbsent(bool $isLegalAbsent = null)
    {
        $this->setProperty('isLegalAbsent', $isLegalAbsent);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalPresent()
    {
        return $this->getProperty('isStatisticalPresent');
    }

    /**
     * @param bool $isStatisticalPresent
     */
    public function setIsStatisticalPresent(bool $isStatisticalPresent = null)
    {
        $this->setProperty('isStatisticalPresent', $isStatisticalPresent);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalAuthorizedAbsent()
    {
        return $this->getProperty('isStatisticalAuthorizedAbsent');
    }

    /**
     * @param bool $isStatisticalAuthorizedAbsent
     */
    public function setIsStatisticalAuthorizedAbsent(bool $isStatisticalAuthorizedAbsent = null)
    {
        $this->setProperty('isStatisticalAuthorizedAbsent', $isStatisticalAuthorizedAbsent);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalUnauthorizedAbsent()
    {
        return $this->getProperty('isStatisticalUnauthorizedAbsent');
    }

    /**
     * @param bool $isStatisticalUnauthorizedAbsent
     */
    public function setIsStatisticalUnauthorizedAbsent(bool $isStatisticalUnauthorizedAbsent = null)
    {
        $this->setProperty('isStatisticalUnauthorizedAbsent', $isStatisticalUnauthorizedAbsent);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalApprovedEducationalActivity()
    {
        return $this->getProperty('isStatisticalApprovedEducationalActivity');
    }

    /**
     * @param bool $isStatisticalApprovedEducationalActivity
     */
    public function setIsStatisticalApprovedEducationalActivity(bool $isStatisticalApprovedEducationalActivity = null)
    {
        $this->setProperty('isStatisticalApprovedEducationalActivity', $isStatisticalApprovedEducationalActivity);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalPossibleAttendance()
    {
        return $this->getProperty('isStatisticalPossibleAttendance');
    }

    /**
     * @param bool $isStatisticalPossibleAttendance
     */
    public function setIsStatisticalPossibleAttendance(bool $isStatisticalPossibleAttendance = null)
    {
        $this->setProperty('isStatisticalPossibleAttendance', $isStatisticalPossibleAttendance);
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
    public function getIsDefaultLateAfterRegisterClosed()
    {
        return $this->getProperty('isDefaultLateAfterRegisterClosed');
    }

    /**
     * @param bool $isDefaultLateAfterRegisterClosed
     */
    public function setIsDefaultLateAfterRegisterClosed(bool $isDefaultLateAfterRegisterClosed = null)
    {
        $this->setProperty('isDefaultLateAfterRegisterClosed', $isDefaultLateAfterRegisterClosed);
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

    /**
     * @return bool
     */
    public function getIsPresumedAbsent()
    {
        return $this->getProperty('isPresumedAbsent');
    }

    /**
     * @param bool $isPresumedAbsent
     */
    public function setIsPresumedAbsent(bool $isPresumedAbsent = null)
    {
        $this->setProperty('isPresumedAbsent', $isPresumedAbsent);
    }

    /**
     * @return bool
     */
    public function getIsExcluded()
    {
        return $this->getProperty('isExcluded');
    }

    /**
     * @param bool $isExcluded
     */
    public function setIsExcluded(bool $isExcluded = null)
    {
        $this->setProperty('isExcluded', $isExcluded);
    }

    /**
     * @return bool
     */
    public function getShowInRegister()
    {
        return $this->getProperty('showInRegister');
    }

    /**
     * @param bool $showInRegister
     */
    public function setShowInRegister(bool $showInRegister = null)
    {
        $this->setProperty('showInRegister', $showInRegister);
    }
}
