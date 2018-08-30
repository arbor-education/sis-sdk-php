<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\InHouseExam;
use \Arbor\Model\Student;
use \Arbor\Model\InHouseExamEntry;
use \Arbor\Model\InHouseExamGrade;

class InHouseExamResult extends ModelBase
{

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_RESULT;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\InHouseExamResult[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("InHouseExamResult");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\InHouseExamResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("InHouseExamResult", $id);
    }

    /**
     * @return InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty("inHouseExam");
    }

    /**
     * @param InHouseExam $inHouseExam
     */
    public function setInHouseExam(InHouseExam $inHouseExam = null)
    {
        $this->setProperty("inHouseExam", $inHouseExam);
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
     * @return InHouseExamEntry
     */
    public function getInHouseExamEntry()
    {
        return $this->getProperty("inHouseExamEntry");
    }

    /**
     * @param InHouseExamEntry $inHouseExamEntry
     */
    public function setInHouseExamEntry(InHouseExamEntry $inHouseExamEntry = null)
    {
        $this->setProperty("inHouseExamEntry", $inHouseExamEntry);
    }

    /**
     * @return float
     */
    public function getNumericValue()
    {
        return $this->getProperty("numericValue");
    }

    /**
     * @param float $numericValue
     */
    public function setNumericValue($numericValue = null)
    {
        $this->setProperty("numericValue", $numericValue);
    }

    /**
     * @return InHouseExamGrade
     */
    public function getInHouseExamGrade()
    {
        return $this->getProperty("inHouseExamGrade");
    }

    /**
     * @param InHouseExamGrade $inHouseExamGrade
     */
    public function setInHouseExamGrade(InHouseExamGrade $inHouseExamGrade = null)
    {
        $this->setProperty("inHouseExamGrade", $inHouseExamGrade);
    }

    /**
     * @return \DateTime
     */
    public function getResultDate()
    {
        return $this->getProperty("resultDate");
    }

    /**
     * @param \DateTime $resultDate
     */
    public function setResultDate(\DateTime $resultDate = null)
    {
        $this->setProperty("resultDate", $resultDate);
    }


}
