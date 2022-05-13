<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class OptionsImportResult extends ModelBase
{

    const ACADEMIC_YEAR = 'academicYear';

    const STEPS_COMPLETED = 'stepsCompleted';

    const STEP_IN_PROGRESS = 'stepInProgress';

    const STARTED_DATETIME = 'startedDatetime';

    const COMPLETED_DATETIME = 'completedDatetime';

    const ENROLMENT_START_DATE = 'enrolmentStartDate';

    const ENROLMENT_END_DATE = 'enrolmentEndDate';

    protected $_resourceType = ResourceType::OPTIONS_IMPORT_RESULT;

    /**
     * @param Query $query
     * @return OptionsImportResult[] | Collection
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

        $query->setResourceType(ResourceType::OPTIONS_IMPORT_RESULT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OptionsImportResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OPTIONS_IMPORT_RESULT, $id);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return int
     */
    public function getStepsCompleted()
    {
        return $this->getProperty('stepsCompleted');
    }

    /**
     * @param int $stepsCompleted
     */
    public function setStepsCompleted($stepsCompleted = null)
    {
        $this->setProperty('stepsCompleted', $stepsCompleted);
    }

    /**
     * @return int
     */
    public function getStepInProgress()
    {
        return $this->getProperty('stepInProgress');
    }

    /**
     * @param int $stepInProgress
     */
    public function setStepInProgress($stepInProgress = null)
    {
        $this->setProperty('stepInProgress', $stepInProgress);
    }

    /**
     * @return \DateTime
     */
    public function getStartedDatetime()
    {
        return $this->getProperty('startedDatetime');
    }

    /**
     * @param \DateTime $startedDatetime
     */
    public function setStartedDatetime(\DateTime $startedDatetime = null)
    {
        $this->setProperty('startedDatetime', $startedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentStartDate()
    {
        return $this->getProperty('enrolmentStartDate');
    }

    /**
     * @param \DateTime $enrolmentStartDate
     */
    public function setEnrolmentStartDate(\DateTime $enrolmentStartDate = null)
    {
        $this->setProperty('enrolmentStartDate', $enrolmentStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentEndDate()
    {
        return $this->getProperty('enrolmentEndDate');
    }

    /**
     * @param \DateTime $enrolmentEndDate
     */
    public function setEnrolmentEndDate(\DateTime $enrolmentEndDate = null)
    {
        $this->setProperty('enrolmentEndDate', $enrolmentEndDate);
    }


}
