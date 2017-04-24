<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\QualificationAspect;
use \Arbor\Model\QualificationGrade;
use \Arbor\Model\Student;
use \Arbor\Model\CandidateEntry;

class QualificationCenterAssessedOutcome extends ModelBase
{
    const QUALIFICATION_ASPECT = 'qualificationAspect';

    const QUALIFICATION_GRADE = 'qualificationGrade';

    const NUMERIC_VALUE = 'numericValue';

    const STUDENT = 'student';

    const CANDIDATE_ENTRY = 'candidateEntry';

    const ASSESSMENT_DATE = 'assessmentDate';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::QUALIFICATION_CENTER_ASSESSED_OUTCOME;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationCenterAssessedOutcome[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("QualificationCenterAssessedOutcome");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationCenterAssessedOutcome
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::QUALIFICATION_CENTER_ASSESSED_OUTCOME, $id);
    }

    /**
     * @return QualificationAspect
     */
    public function getQualificationAspect()
    {
        return $this->getProperty("qualificationAspect");
    }

    /**
     * @param QualificationAspect $qualificationAspect
     */
    public function setQualificationAspect(QualificationAspect $qualificationAspect = null)
    {
        $this->setProperty("qualificationAspect", $qualificationAspect);
    }

    /**
     * @return QualificationGrade
     */
    public function getQualificationGrade()
    {
        return $this->getProperty("qualificationGrade");
    }

    /**
     * @param QualificationGrade $qualificationGrade
     */
    public function setQualificationGrade(QualificationGrade $qualificationGrade = null)
    {
        $this->setProperty("qualificationGrade", $qualificationGrade);
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
     * @return CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty("candidateEntry");
    }

    /**
     * @param CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(CandidateEntry $candidateEntry = null)
    {
        $this->setProperty("candidateEntry", $candidateEntry);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty("assessmentDate");
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty("assessmentDate", $assessmentDate);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }
}
