<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgrammeEnrolment extends ModelBase
{
    public const PROGRAMME_INSTANCE = 'programmeInstance';

    public const STUDENT = 'student';

    public const MAIN_PROGRAMME = 'mainProgramme';

    public const PROGRAMME_CLASSIFICATION = 'programmeClassification';

    public const PLANNED_START_DATE = 'plannedStartDate';

    public const PLANNED_END_DATE = 'plannedEndDate';

    public const ACTUAL_END_DATE = 'actualEndDate';

    public const COMPLETION_STATUS = 'completionStatus';

    public const WITHDRAWAL_REASON = 'withdrawalReason';

    protected $_resourceType = ResourceType::PROGRAMME_ENROLMENT;

    /**
     * @param Query $query
     * @return ProgrammeEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::PROGRAMME_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRAMME_ENROLMENT, $id);
    }

    /**
     * @return \Arbor\Model\ProgrammeInstance
     */
    public function getProgrammeInstance()
    {
        return $this->getProperty('programmeInstance');
    }

    /**
     * @param \Arbor\Model\ProgrammeInstance $programmeInstance
     */
    public function setProgrammeInstance(\Arbor\Model\ProgrammeInstance $programmeInstance = null)
    {
        $this->setProperty('programmeInstance', $programmeInstance);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return bool
     */
    public function getMainProgramme()
    {
        return $this->getProperty('mainProgramme');
    }

    /**
     * @param bool $mainProgramme
     */
    public function setMainProgramme(bool $mainProgramme = null)
    {
        $this->setProperty('mainProgramme', $mainProgramme);
    }

    /**
     * @return \Arbor\Model\ProgrammeClassification
     */
    public function getProgrammeClassification()
    {
        return $this->getProperty('programmeClassification');
    }

    /**
     * @param \Arbor\Model\ProgrammeClassification $programmeClassification
     */
    public function setProgrammeClassification(\Arbor\Model\ProgrammeClassification $programmeClassification = null)
    {
        $this->setProperty('programmeClassification', $programmeClassification);
    }

    /**
     * @return \DateTime
     */
    public function getPlannedStartDate()
    {
        return $this->getProperty('plannedStartDate');
    }

    /**
     * @param \DateTime $plannedStartDate
     */
    public function setPlannedStartDate(\DateTime $plannedStartDate = null)
    {
        $this->setProperty('plannedStartDate', $plannedStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getPlannedEndDate()
    {
        return $this->getProperty('plannedEndDate');
    }

    /**
     * @param \DateTime $plannedEndDate
     */
    public function setPlannedEndDate(\DateTime $plannedEndDate = null)
    {
        $this->setProperty('plannedEndDate', $plannedEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getActualEndDate()
    {
        return $this->getProperty('actualEndDate');
    }

    /**
     * @param \DateTime $actualEndDate
     */
    public function setActualEndDate(\DateTime $actualEndDate = null)
    {
        $this->setProperty('actualEndDate', $actualEndDate);
    }

    /**
     * @return string
     */
    public function getCompletionStatus()
    {
        return $this->getProperty('completionStatus');
    }

    /**
     * @param string $completionStatus
     */
    public function setCompletionStatus(string $completionStatus = null)
    {
        $this->setProperty('completionStatus', $completionStatus);
    }

    /**
     * @return \Arbor\Model\ProgrammeWithdrawalReason
     */
    public function getWithdrawalReason()
    {
        return $this->getProperty('withdrawalReason');
    }

    /**
     * @param \Arbor\Model\ProgrammeWithdrawalReason $withdrawalReason
     */
    public function setWithdrawalReason(\Arbor\Model\ProgrammeWithdrawalReason $withdrawalReason = null)
    {
        $this->setProperty('withdrawalReason', $withdrawalReason);
    }
}
