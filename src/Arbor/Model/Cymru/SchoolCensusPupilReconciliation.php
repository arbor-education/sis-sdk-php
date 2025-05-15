<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolCensusPupilReconciliation extends ModelBase
{
    public const SCHOOL_CENSUS = 'schoolCensus';

    public const FRANCHISED_PUPILS = 'franchisedPupils';

    public const COST_RECOVERY_PUPILS = 'costRecoveryPupils';

    public const OTHER_FUNDED_PUPILS = 'otherFundedPupils';

    public const FULL_TIME_ATTENDANCE = 'fullTimeAttendance';

    public const PART_TIME_ATTENDANCE = 'partTimeAttendance';

    public const MORNING_ATTENDANCE = 'morningAttendance';

    public const AFTERNOON_ATTENDANCE = 'afternoonAttendance';

    public const OTHER_ATTENDANCE = 'otherAttendance';

    public const LEA_SPECIAL_CLASS = 'leaSpecialClass';

    public const LEA_SPECIAL_CLASS_PUPILS = 'leaSpecialClassPupils';

    public const LEA_SPECIAL_CLASS_OTHER_SCHOOL_PUPILS = 'leaSpecialClassOtherSchoolPupils';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_CENSUS_PUPIL_RECONCILIATION;

    /**
     * @param Query $query
     * @return SchoolCensusPupilReconciliation[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_CENSUS_PUPIL_RECONCILIATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolCensusPupilReconciliation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_CENSUS_PUPIL_RECONCILIATION, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolCensus
     */
    public function getSchoolCensus()
    {
        return $this->getProperty('schoolCensus');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolCensus $schoolCensus
     */
    public function setSchoolCensus(\Arbor\Model\Cymru\SchoolCensus $schoolCensus = null)
    {
        $this->setProperty('schoolCensus', $schoolCensus);
    }

    /**
     * @return int
     */
    public function getFranchisedPupils()
    {
        return $this->getProperty('franchisedPupils');
    }

    /**
     * @param int $franchisedPupils
     */
    public function setFranchisedPupils(int $franchisedPupils = null)
    {
        $this->setProperty('franchisedPupils', $franchisedPupils);
    }

    /**
     * @return int
     */
    public function getCostRecoveryPupils()
    {
        return $this->getProperty('costRecoveryPupils');
    }

    /**
     * @param int $costRecoveryPupils
     */
    public function setCostRecoveryPupils(int $costRecoveryPupils = null)
    {
        $this->setProperty('costRecoveryPupils', $costRecoveryPupils);
    }

    /**
     * @return int
     */
    public function getOtherFundedPupils()
    {
        return $this->getProperty('otherFundedPupils');
    }

    /**
     * @param int $otherFundedPupils
     */
    public function setOtherFundedPupils(int $otherFundedPupils = null)
    {
        $this->setProperty('otherFundedPupils', $otherFundedPupils);
    }

    /**
     * @return int
     */
    public function getFullTimeAttendance()
    {
        return $this->getProperty('fullTimeAttendance');
    }

    /**
     * @param int $fullTimeAttendance
     */
    public function setFullTimeAttendance(int $fullTimeAttendance = null)
    {
        $this->setProperty('fullTimeAttendance', $fullTimeAttendance);
    }

    /**
     * @return int
     */
    public function getPartTimeAttendance()
    {
        return $this->getProperty('partTimeAttendance');
    }

    /**
     * @param int $partTimeAttendance
     */
    public function setPartTimeAttendance(int $partTimeAttendance = null)
    {
        $this->setProperty('partTimeAttendance', $partTimeAttendance);
    }

    /**
     * @return int
     */
    public function getMorningAttendance()
    {
        return $this->getProperty('morningAttendance');
    }

    /**
     * @param int $morningAttendance
     */
    public function setMorningAttendance(int $morningAttendance = null)
    {
        $this->setProperty('morningAttendance', $morningAttendance);
    }

    /**
     * @return int
     */
    public function getAfternoonAttendance()
    {
        return $this->getProperty('afternoonAttendance');
    }

    /**
     * @param int $afternoonAttendance
     */
    public function setAfternoonAttendance(int $afternoonAttendance = null)
    {
        $this->setProperty('afternoonAttendance', $afternoonAttendance);
    }

    /**
     * @return int
     */
    public function getOtherAttendance()
    {
        return $this->getProperty('otherAttendance');
    }

    /**
     * @param int $otherAttendance
     */
    public function setOtherAttendance(int $otherAttendance = null)
    {
        $this->setProperty('otherAttendance', $otherAttendance);
    }

    /**
     * @return int
     */
    public function getLeaSpecialClass()
    {
        return $this->getProperty('leaSpecialClass');
    }

    /**
     * @param int $leaSpecialClass
     */
    public function setLeaSpecialClass(int $leaSpecialClass = null)
    {
        $this->setProperty('leaSpecialClass', $leaSpecialClass);
    }

    /**
     * @return int
     */
    public function getLeaSpecialClassPupils()
    {
        return $this->getProperty('leaSpecialClassPupils');
    }

    /**
     * @param int $leaSpecialClassPupils
     */
    public function setLeaSpecialClassPupils(int $leaSpecialClassPupils = null)
    {
        $this->setProperty('leaSpecialClassPupils', $leaSpecialClassPupils);
    }

    /**
     * @return int
     */
    public function getLeaSpecialClassOtherSchoolPupils()
    {
        return $this->getProperty('leaSpecialClassOtherSchoolPupils');
    }

    /**
     * @param int $leaSpecialClassOtherSchoolPupils
     */
    public function setLeaSpecialClassOtherSchoolPupils(int $leaSpecialClassOtherSchoolPupils = null)
    {
        $this->setProperty('leaSpecialClassOtherSchoolPupils', $leaSpecialClassOtherSchoolPupils);
    }
}
