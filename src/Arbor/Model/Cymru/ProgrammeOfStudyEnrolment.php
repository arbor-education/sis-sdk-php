<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ProgrammeOfStudyEnrolment extends ModelBase
{
    public const PROGRAMME_OF_STUDY_INSTANCE = 'programmeOfStudyInstance';

    public const STUDENT = 'student';

    public const GUIDED_CONTACT_HOURS = 'guidedContactHours';

    public const PLANNED_START_DATE = 'plannedStartDate';

    public const PLANNED_END_DATE = 'plannedEndDate';

    public const ACTUAL_END_DATE = 'actualEndDate';

    public const LENGTH_OF_PROGRAMME = 'lengthOfProgramme';

    public const YEAR_OF_PROGRAMME = 'yearOfProgramme';

    public const COMPLETION_STATUS = 'completionStatus';

    protected $_resourceType = ResourceType::CYMRU_PROGRAMME_OF_STUDY_ENROLMENT;

    /**
     * @param Query $query
     * @return ProgrammeOfStudyEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PROGRAMME_OF_STUDY_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeOfStudyEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PROGRAMME_OF_STUDY_ENROLMENT, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\ProgrammeOfStudyInstance
     */
    public function getProgrammeOfStudyInstance()
    {
        return $this->getProperty('programmeOfStudyInstance');
    }

    /**
     * @param \Arbor\Model\Cymru\ProgrammeOfStudyInstance $programmeOfStudyInstance
     */
    public function setProgrammeOfStudyInstance(\Arbor\Model\Cymru\ProgrammeOfStudyInstance $programmeOfStudyInstance = null)
    {
        $this->setProperty('programmeOfStudyInstance', $programmeOfStudyInstance);
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
     * @return int
     */
    public function getGuidedContactHours()
    {
        return $this->getProperty('guidedContactHours');
    }

    /**
     * @param int $guidedContactHours
     */
    public function setGuidedContactHours(int $guidedContactHours = null)
    {
        $this->setProperty('guidedContactHours', $guidedContactHours);
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
     * @return int
     */
    public function getLengthOfProgramme()
    {
        return $this->getProperty('lengthOfProgramme');
    }

    /**
     * @param int $lengthOfProgramme
     */
    public function setLengthOfProgramme(int $lengthOfProgramme = null)
    {
        $this->setProperty('lengthOfProgramme', $lengthOfProgramme);
    }

    /**
     * @return int
     */
    public function getYearOfProgramme()
    {
        return $this->getProperty('yearOfProgramme');
    }

    /**
     * @param int $yearOfProgramme
     */
    public function setYearOfProgramme(int $yearOfProgramme = null)
    {
        $this->setProperty('yearOfProgramme', $yearOfProgramme);
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
}
