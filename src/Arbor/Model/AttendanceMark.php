<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class AttendanceMark extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ATTENDANCE_MARK = 'attendanceMark';

    const MARK_INDEX = 'markIndex';

    const MARK_DESCRIPTION = 'markDescription';

    const MARK_SHORT_DESCRIPTION = 'markShortDescription';

    const IS_LEGAL_PRESENT = 'isLegalPresent';

    const IS_LEGAL_APPROVED_EDUCATIONAL_ACTIVITY = 'isLegalApprovedEducationalActivity';

    const IS_LEGAL_NOT_REQUIRED = 'isLegalNotRequired';

    const IS_LEGAL_ABSENT = 'isLegalAbsent';

    const IS_STATISTICAL_PRESENT = 'isStatisticalPresent';

    const IS_STATISTICAL_AUTHORIZED_ABSENT = 'isStatisticalAuthorizedAbsent';

    const IS_STATISTICAL_UNAUTHORIZED_ABSENT = 'isStatisticalUnauthorizedAbsent';

    const IS_STATISTICAL_APPROVED_EDUCATIONAL_ACTIVITY = 'isStatisticalApprovedEducationalActivity';

    const IS_STATISTICAL_POSSIBLE_ATTENDANCE = 'isStatisticalPossibleAttendance';

    const IS_DEFAULT_PRESENT = 'isDefaultPresent';

    const IS_DEFAULT_LATE = 'isDefaultLate';

    const IS_DEFAULT_LATE_AFTER_REGISTER_CLOSED = 'isDefaultLateAfterRegisterClosed';

    const IS_DEFAULT_ABSENT = 'isDefaultAbsent';

    const IS_PHYSICAL_PRESENT = 'isPhysicalPresent';

    const IS_PHYSICAL_LATE = 'isPhysicalLate';

    const IS_PHYSICAL_ABSENT = 'isPhysicalAbsent';

    const IS_PHYSICAL_NOT_REQUIRED = 'isPhysicalNotRequired';

    const IS_PRESUMED_ABSENT = 'isPresumedAbsent';

    const IS_EXCLUDED = 'isExcluded';

    protected $_resourceType = ResourceType::ATTENDANCE_MARK;

    /**
     * @param \Arbor\Query\Query $query
     * @return AttendanceMark[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AttendanceMark");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AttendanceMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ATTENDANCE_MARK, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getAttendanceMark()
    {
        return $this->getProperty("attendanceMark");
    }

    /**
     * @param string $attendanceMark
     */
    public function setAttendanceMark($attendanceMark = null)
    {
        $this->setProperty("attendanceMark", $attendanceMark);
    }

    /**
     * @return int
     */
    public function getMarkIndex()
    {
        return $this->getProperty("markIndex");
    }

    /**
     * @param int $markIndex
     */
    public function setMarkIndex($markIndex = null)
    {
        $this->setProperty("markIndex", $markIndex);
    }

    /**
     * @return string
     */
    public function getMarkDescription()
    {
        return $this->getProperty("markDescription");
    }

    /**
     * @param string $markDescription
     */
    public function setMarkDescription($markDescription = null)
    {
        $this->setProperty("markDescription", $markDescription);
    }

    /**
     * @return string
     */
    public function getMarkShortDescription()
    {
        return $this->getProperty("markShortDescription");
    }

    /**
     * @param string $markShortDescription
     */
    public function setMarkShortDescription($markShortDescription = null)
    {
        $this->setProperty("markShortDescription", $markShortDescription);
    }

    /**
     * @return bool
     */
    public function getIsLegalPresent()
    {
        return $this->getProperty("isLegalPresent");
    }

    /**
     * @param bool $isLegalPresent
     */
    public function setIsLegalPresent($isLegalPresent = null)
    {
        $this->setProperty("isLegalPresent", $isLegalPresent);
    }

    /**
     * @return bool
     */
    public function getIsLegalApprovedEducationalActivity()
    {
        return $this->getProperty("isLegalApprovedEducationalActivity");
    }

    /**
     * @param bool $isLegalApprovedEducationalActivity
     */
    public function setIsLegalApprovedEducationalActivity($isLegalApprovedEducationalActivity = null)
    {
        $this->setProperty("isLegalApprovedEducationalActivity", $isLegalApprovedEducationalActivity);
    }

    /**
     * @return bool
     */
    public function getIsLegalNotRequired()
    {
        return $this->getProperty("isLegalNotRequired");
    }

    /**
     * @param bool $isLegalNotRequired
     */
    public function setIsLegalNotRequired($isLegalNotRequired = null)
    {
        $this->setProperty("isLegalNotRequired", $isLegalNotRequired);
    }

    /**
     * @return bool
     */
    public function getIsLegalAbsent()
    {
        return $this->getProperty("isLegalAbsent");
    }

    /**
     * @param bool $isLegalAbsent
     */
    public function setIsLegalAbsent($isLegalAbsent = null)
    {
        $this->setProperty("isLegalAbsent", $isLegalAbsent);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalPresent()
    {
        return $this->getProperty("isStatisticalPresent");
    }

    /**
     * @param bool $isStatisticalPresent
     */
    public function setIsStatisticalPresent($isStatisticalPresent = null)
    {
        $this->setProperty("isStatisticalPresent", $isStatisticalPresent);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalAuthorizedAbsent()
    {
        return $this->getProperty("isStatisticalAuthorizedAbsent");
    }

    /**
     * @param bool $isStatisticalAuthorizedAbsent
     */
    public function setIsStatisticalAuthorizedAbsent($isStatisticalAuthorizedAbsent = null)
    {
        $this->setProperty("isStatisticalAuthorizedAbsent", $isStatisticalAuthorizedAbsent);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalUnauthorizedAbsent()
    {
        return $this->getProperty("isStatisticalUnauthorizedAbsent");
    }

    /**
     * @param bool $isStatisticalUnauthorizedAbsent
     */
    public function setIsStatisticalUnauthorizedAbsent($isStatisticalUnauthorizedAbsent = null)
    {
        $this->setProperty("isStatisticalUnauthorizedAbsent", $isStatisticalUnauthorizedAbsent);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalApprovedEducationalActivity()
    {
        return $this->getProperty("isStatisticalApprovedEducationalActivity");
    }

    /**
     * @param bool $isStatisticalApprovedEducationalActivity
     */
    public function setIsStatisticalApprovedEducationalActivity($isStatisticalApprovedEducationalActivity = null)
    {
        $this->setProperty("isStatisticalApprovedEducationalActivity", $isStatisticalApprovedEducationalActivity);
    }

    /**
     * @return bool
     */
    public function getIsStatisticalPossibleAttendance()
    {
        return $this->getProperty("isStatisticalPossibleAttendance");
    }

    /**
     * @param bool $isStatisticalPossibleAttendance
     */
    public function setIsStatisticalPossibleAttendance($isStatisticalPossibleAttendance = null)
    {
        $this->setProperty("isStatisticalPossibleAttendance", $isStatisticalPossibleAttendance);
    }

    /**
     * @return bool
     */
    public function getIsDefaultPresent()
    {
        return $this->getProperty("isDefaultPresent");
    }

    /**
     * @param bool $isDefaultPresent
     */
    public function setIsDefaultPresent($isDefaultPresent = null)
    {
        $this->setProperty("isDefaultPresent", $isDefaultPresent);
    }

    /**
     * @return bool
     */
    public function getIsDefaultLate()
    {
        return $this->getProperty("isDefaultLate");
    }

    /**
     * @param bool $isDefaultLate
     */
    public function setIsDefaultLate($isDefaultLate = null)
    {
        $this->setProperty("isDefaultLate", $isDefaultLate);
    }

    /**
     * @return bool
     */
    public function getIsDefaultLateAfterRegisterClosed()
    {
        return $this->getProperty("isDefaultLateAfterRegisterClosed");
    }

    /**
     * @param bool $isDefaultLateAfterRegisterClosed
     */
    public function setIsDefaultLateAfterRegisterClosed($isDefaultLateAfterRegisterClosed = null)
    {
        $this->setProperty("isDefaultLateAfterRegisterClosed", $isDefaultLateAfterRegisterClosed);
    }

    /**
     * @return bool
     */
    public function getIsDefaultAbsent()
    {
        return $this->getProperty("isDefaultAbsent");
    }

    /**
     * @param bool $isDefaultAbsent
     */
    public function setIsDefaultAbsent($isDefaultAbsent = null)
    {
        $this->setProperty("isDefaultAbsent", $isDefaultAbsent);
    }

    /**
     * @return bool
     */
    public function getIsPhysicalPresent()
    {
        return $this->getProperty("isPhysicalPresent");
    }

    /**
     * @param bool $isPhysicalPresent
     */
    public function setIsPhysicalPresent($isPhysicalPresent = null)
    {
        $this->setProperty("isPhysicalPresent", $isPhysicalPresent);
    }

    /**
     * @return bool
     */
    public function getIsPhysicalLate()
    {
        return $this->getProperty("isPhysicalLate");
    }

    /**
     * @param bool $isPhysicalLate
     */
    public function setIsPhysicalLate($isPhysicalLate = null)
    {
        $this->setProperty("isPhysicalLate", $isPhysicalLate);
    }

    /**
     * @return bool
     */
    public function getIsPhysicalAbsent()
    {
        return $this->getProperty("isPhysicalAbsent");
    }

    /**
     * @param bool $isPhysicalAbsent
     */
    public function setIsPhysicalAbsent($isPhysicalAbsent = null)
    {
        $this->setProperty("isPhysicalAbsent", $isPhysicalAbsent);
    }

    /**
     * @return bool
     */
    public function getIsPhysicalNotRequired()
    {
        return $this->getProperty("isPhysicalNotRequired");
    }

    /**
     * @param bool $isPhysicalNotRequired
     */
    public function setIsPhysicalNotRequired($isPhysicalNotRequired = null)
    {
        $this->setProperty("isPhysicalNotRequired", $isPhysicalNotRequired);
    }

    /**
     * @return bool
     */
    public function getIsPresumedAbsent()
    {
        return $this->getProperty("isPresumedAbsent");
    }

    /**
     * @param bool $isPresumedAbsent
     */
    public function setIsPresumedAbsent($isPresumedAbsent = null)
    {
        $this->setProperty("isPresumedAbsent", $isPresumedAbsent);
    }

    /**
     * @return bool
     */
    public function getIsExcluded()
    {
        return $this->getProperty("isExcluded");
    }

    /**
     * @param bool $isExcluded
     */
    public function setIsExcluded($isExcluded = null)
    {
        $this->setProperty("isExcluded", $isExcluded);
    }


}
