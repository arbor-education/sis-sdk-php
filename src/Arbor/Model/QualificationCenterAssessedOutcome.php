<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationCenterAssessedOutcome extends ModelBase
{
    public const QUALIFICATION_ASPECT = 'qualificationAspect';

    public const QUALIFICATION_GRADE = 'qualificationGrade';

    public const NUMERIC_VALUE = 'numericValue';

    public const STUDENT = 'student';

    public const CANDIDATE_ENTRY = 'candidateEntry';

    public const ASSESSMENT_DATE = 'assessmentDate';

    public const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::QUALIFICATION_CENTER_ASSESSED_OUTCOME;

    /**
     * @param Query $query
     * @return QualificationCenterAssessedOutcome[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_CENTER_ASSESSED_OUTCOME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationCenterAssessedOutcome
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_CENTER_ASSESSED_OUTCOME, $id);
    }

    /**
     * @return \Arbor\Model\QualificationAspect
     */
    public function getQualificationAspect()
    {
        return $this->getProperty('qualificationAspect');
    }

    /**
     * @param \Arbor\Model\QualificationAspect $qualificationAspect
     */
    public function setQualificationAspect(\Arbor\Model\QualificationAspect $qualificationAspect = null)
    {
        $this->setProperty('qualificationAspect', $qualificationAspect);
    }

    /**
     * @return \Arbor\Model\QualificationGrade
     */
    public function getQualificationGrade()
    {
        return $this->getProperty('qualificationGrade');
    }

    /**
     * @param \Arbor\Model\QualificationGrade $qualificationGrade
     */
    public function setQualificationGrade(\Arbor\Model\QualificationGrade $qualificationGrade = null)
    {
        $this->setProperty('qualificationGrade', $qualificationGrade);
    }

    /**
     * @return float
     */
    public function getNumericValue()
    {
        return $this->getProperty('numericValue');
    }

    /**
     * @param float $numericValue
     */
    public function setNumericValue(float $numericValue = null)
    {
        $this->setProperty('numericValue', $numericValue);
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
     * @return \Arbor\Model\CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty('candidateEntry');
    }

    /**
     * @param \Arbor\Model\CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(\Arbor\Model\CandidateEntry $candidateEntry = null)
    {
        $this->setProperty('candidateEntry', $candidateEntry);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty('assessmentDate');
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty('assessmentDate', $assessmentDate);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
