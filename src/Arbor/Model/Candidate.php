<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Candidate extends ModelBase
{
    public const STUDENT = 'student';

    public const CANDIDATE_NUMBER = 'candidateNumber';

    protected $_resourceType = ResourceType::CANDIDATE;

    /**
     * @param Query $query
     * @return Candidate[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Candidate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE, $id);
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
    public function getCandidateNumber()
    {
        return $this->getProperty('candidateNumber');
    }

    /**
     * @param int $candidateNumber
     */
    public function setCandidateNumber(int $candidateNumber = null)
    {
        $this->setProperty('candidateNumber', $candidateNumber);
    }
}
