<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\Student;

class InHouseCandidate extends ModelBase
{

    protected $_resourceType = ResourceType::IN_HOUSE_CANDIDATE;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\InHouseCandidate[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("InHouseCandidate");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\InHouseCandidate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("InHouseCandidate", $id);
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
     * @return int
     */
    public function getCandidateNumber()
    {
        return $this->getProperty("candidateNumber");
    }

    /**
     * @param int $candidateNumber
     */
    public function setCandidateNumber($candidateNumber = null)
    {
        $this->setProperty("candidateNumber", $candidateNumber);
    }


}
