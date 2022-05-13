<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgrammeEnrolment extends ModelBase
{
    const PROGRAMME_INSTANCE = 'programmeInstance';

    const STUDENT = 'student';

    const MAIN_PROGRAMME = 'mainProgramme';

    const PROGRAMME_CLASSIFICATION = 'programmeClassification';

    const PLANNED_START_DATE = 'plannedStartDate';

    const PLANNED_END_DATE = 'plannedEndDate';

    const ACTUAL_END_DATE = 'actualEndDate';

    const COMPLETION_STATUS = 'completionStatus';

    const WITHDRAWAL_REASON = 'withdrawalReason';

    protected $_resourceType = ResourceType::PROGRAMME_ENROLMENT;

    /**
     * @param Query $query
     * @return ProgrammeEnrolment[] | Collection
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
     * @return ProgrammeInstance
     */
    public function getProgrammeInstance()
    {
        return $this->getProperty('programmeInstance');
    }

    /**
     * @param ProgrammeInstance $programmeInstance
     */
    public function setProgrammeInstance(ProgrammeInstance $programmeInstance = null)
    {
        $this->setProperty('programmeInstance', $programmeInstance);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
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
    public function setMainProgramme($mainProgramme = null)
    {
        $this->setProperty('mainProgramme', $mainProgramme);
    }

    /**
     * @return ProgrammeClassification
     */
    public function getProgrammeClassification()
    {
        return $this->getProperty('programmeClassification');
    }

    /**
     * @param ProgrammeClassification $programmeClassification
     */
    public function setProgrammeClassification(ProgrammeClassification $programmeClassification = null)
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
    public function setCompletionStatus($completionStatus = null)
    {
        $this->setProperty('completionStatus', $completionStatus);
    }

    /**
     * @return ProgrammeWithdrawalReason
     */
    public function getWithdrawalReason()
    {
        return $this->getProperty('withdrawalReason');
    }

    /**
     * @param ProgrammeWithdrawalReason $withdrawalReason
     */
    public function setWithdrawalReason(ProgrammeWithdrawalReason $withdrawalReason = null)
    {
        $this->setProperty('withdrawalReason', $withdrawalReason);
    }
}
