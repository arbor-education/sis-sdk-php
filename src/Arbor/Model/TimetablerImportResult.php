<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TimetablerImportResult extends ModelBase
{
    public const ACADEMIC_YEAR = 'academicYear';

    public const STEPS_COMPLETED = 'stepsCompleted';

    public const STEP_IN_PROGRESS = 'stepInProgress';

    public const STARTED_DATETIME = 'startedDatetime';

    public const COMPLETED_DATETIME = 'completedDatetime';

    public const TIMETABLE_EFFECTIVE_DATE = 'timetableEffectiveDate';

    public const TIMETABLE_END_DATE = 'timetableEndDate';

    public const FILE_HASH = 'fileHash';

    protected $_resourceType = ResourceType::TIMETABLER_IMPORT_RESULT;

    /**
     * @param Query $query
     * @return TimetablerImportResult[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLER_IMPORT_RESULT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetablerImportResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLER_IMPORT_RESULT, $id);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
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
    public function setStepsCompleted(int $stepsCompleted = null)
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
    public function setStepInProgress(int $stepInProgress = null)
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
    public function getTimetableEffectiveDate()
    {
        return $this->getProperty('timetableEffectiveDate');
    }

    /**
     * @param \DateTime $timetableEffectiveDate
     */
    public function setTimetableEffectiveDate(\DateTime $timetableEffectiveDate = null)
    {
        $this->setProperty('timetableEffectiveDate', $timetableEffectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getTimetableEndDate()
    {
        return $this->getProperty('timetableEndDate');
    }

    /**
     * @param \DateTime $timetableEndDate
     */
    public function setTimetableEndDate(\DateTime $timetableEndDate = null)
    {
        $this->setProperty('timetableEndDate', $timetableEndDate);
    }

    /**
     * @return string
     */
    public function getFileHash()
    {
        return $this->getProperty('fileHash');
    }

    /**
     * @param string $fileHash
     */
    public function setFileHash(string $fileHash = null)
    {
        $this->setProperty('fileHash', $fileHash);
    }
}
