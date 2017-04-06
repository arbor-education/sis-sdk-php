<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\Employer;
use \Arbor\Model\ProgrammeEnrolment;

class WorkPlacement extends ModelBase
{

    const STUDENT = 'student';

    const EMPLOYER = 'employer';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const WORK_PLACEMENT_MODE = 'workPlacementMode';

    const PROGRAMME_ENROLMENT = 'programmeEnrolment';

    protected $_resourceType = ResourceType::WORK_PLACEMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return WorkPlacement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("WorkPlacement");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return WorkPlacement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::WORK_PLACEMENT, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return Employer
     */
    public function getEmployer()
    {
        return $this->getProperty("employer");
    }

    /**
     * @param Employer $employer
     */
    public function setEmployer(Employer $employer = null)
    {
        $this->setProperty("employer", $employer);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return string
     */
    public function getWorkPlacementMode()
    {
        return $this->getProperty("workPlacementMode");
    }

    /**
     * @param string $workPlacementMode
     */
    public function setWorkPlacementMode($workPlacementMode = null)
    {
        $this->setProperty("workPlacementMode", $workPlacementMode);
    }

    /**
     * @return ProgrammeEnrolment
     */
    public function getProgrammeEnrolment()
    {
        return $this->getProperty("programmeEnrolment");
    }

    /**
     * @param ProgrammeEnrolment $programmeEnrolment
     */
    public function setProgrammeEnrolment(ProgrammeEnrolment $programmeEnrolment = null)
    {
        $this->setProperty("programmeEnrolment", $programmeEnrolment);
    }


}
