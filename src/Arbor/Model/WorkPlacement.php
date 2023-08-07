<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class WorkPlacement extends \ModelBase
{
    public const STUDENT = 'student';

    public const EMPLOYER = 'employer';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const WORK_PLACEMENT_MODE = 'workPlacementMode';

    public const PLANNED_HOURS = 'plannedHours';

    public const PROGRAMME_ENROLMENT = 'programmeEnrolment';

    protected $_resourceType = ResourceType::WORK_PLACEMENT;

    /**
     * @param Query $query
     * @return WorkPlacement[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::WORK_PLACEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return WorkPlacement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::WORK_PLACEMENT, $id);
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
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return Employer
     */
    public function getEmployer()
    {
        return $this->getProperty('employer');
    }

    /**
     * @param Employer $employer
     */
    public function setEmployer(\Employer $employer = null)
    {
        $this->setProperty('employer', $employer);
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
     * @return string
     */
    public function getWorkPlacementMode()
    {
        return $this->getProperty('workPlacementMode');
    }

    /**
     * @param string $workPlacementMode
     */
    public function setWorkPlacementMode(string $workPlacementMode = null)
    {
        $this->setProperty('workPlacementMode', $workPlacementMode);
    }

    /**
     * @return string
     */
    public function getPlannedHours()
    {
        return $this->getProperty('plannedHours');
    }

    /**
     * @param string $plannedHours
     */
    public function setPlannedHours(string $plannedHours = null)
    {
        $this->setProperty('plannedHours', $plannedHours);
    }

    /**
     * @return ProgrammeEnrolment
     */
    public function getProgrammeEnrolment()
    {
        return $this->getProperty('programmeEnrolment');
    }

    /**
     * @param ProgrammeEnrolment $programmeEnrolment
     */
    public function setProgrammeEnrolment(\ProgrammeEnrolment $programmeEnrolment = null)
    {
        $this->setProperty('programmeEnrolment', $programmeEnrolment);
    }
}
