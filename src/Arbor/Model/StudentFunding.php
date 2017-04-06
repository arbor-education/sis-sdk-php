<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\StudentFundingType;

class StudentFunding extends ModelBase
{

    const STUDENT = 'student';

    const STUDENT_FUNDING_TYPE = 'studentFundingType';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const NOTE = 'note';

    protected $_resourceType = ResourceType::STUDENT_FUNDING;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentFunding[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentFunding");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentFunding
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_FUNDING, $id);
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
     * @return StudentFundingType
     */
    public function getStudentFundingType()
    {
        return $this->getProperty("studentFundingType");
    }

    /**
     * @param StudentFundingType $studentFundingType
     */
    public function setStudentFundingType(StudentFundingType $studentFundingType = null)
    {
        $this->setProperty("studentFundingType", $studentFundingType);
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
    public function getNote()
    {
        return $this->getProperty("note");
    }

    /**
     * @param string $note
     */
    public function setNote($note = null)
    {
        $this->setProperty("note", $note);
    }


}
