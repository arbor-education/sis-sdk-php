<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicYearEnrolment extends ModelBase
{
    public const ACADEMIC_YEAR = 'academicYear';

    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const UNENROLMENT_REASON = 'unenrolmentReason';

    public const ENROLMENT_NOTES = 'enrolmentNotes';

    public const PLANNED_LEARNING_HOURS = 'plannedLearningHours';

    public const PLANNED_EEP_HOURS = 'plannedEepHours';

    public const T_LEVEL_PLANNED_LEARNING_HOURS = 'tLevelPlannedLearningHours';

    protected $_resourceType = ResourceType::ACADEMIC_YEAR_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicYearEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_YEAR_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicYearEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_YEAR_ENROLMENT, $id);
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
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return \Arbor\Model\UnenrolmentReason
     */
    public function getUnenrolmentReason()
    {
        return $this->getProperty('unenrolmentReason');
    }

    /**
     * @param \Arbor\Model\UnenrolmentReason $unenrolmentReason
     */
    public function setUnenrolmentReason(\Arbor\Model\UnenrolmentReason $unenrolmentReason = null)
    {
        $this->setProperty('unenrolmentReason', $unenrolmentReason);
    }

    /**
     * @return string
     */
    public function getEnrolmentNotes()
    {
        return $this->getProperty('enrolmentNotes');
    }

    /**
     * @param string $enrolmentNotes
     */
    public function setEnrolmentNotes(string $enrolmentNotes = null)
    {
        $this->setProperty('enrolmentNotes', $enrolmentNotes);
    }

    /**
     * @return int
     */
    public function getPlannedLearningHours()
    {
        return $this->getProperty('plannedLearningHours');
    }

    /**
     * @param int $plannedLearningHours
     */
    public function setPlannedLearningHours(int $plannedLearningHours = null)
    {
        $this->setProperty('plannedLearningHours', $plannedLearningHours);
    }

    /**
     * @return int
     */
    public function getPlannedEepHours()
    {
        return $this->getProperty('plannedEepHours');
    }

    /**
     * @param int $plannedEepHours
     */
    public function setPlannedEepHours(int $plannedEepHours = null)
    {
        $this->setProperty('plannedEepHours', $plannedEepHours);
    }

    /**
     * @return int
     */
    public function getTLevelPlannedLearningHours()
    {
        return $this->getProperty('tLevelPlannedLearningHours');
    }

    /**
     * @param int $tLevelPlannedLearningHours
     */
    public function setTLevelPlannedLearningHours(int $tLevelPlannedLearningHours = null)
    {
        $this->setProperty('tLevelPlannedLearningHours', $tLevelPlannedLearningHours);
    }
}
