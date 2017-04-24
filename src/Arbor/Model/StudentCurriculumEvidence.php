<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\CurriculumStatement;
use \Arbor\Model\StudentCurriculumAchievement;
use \Arbor\Model\Staff;

class StudentCurriculumEvidence extends ModelBase
{
    const STUDENT = 'student';

    const CURRICULUM_STATEMENT = 'curriculumStatement';

    const STUDENT_CURRICULUM_ACHIEVEMENT = 'studentCurriculumAchievement';

    const SUMMARY = 'summary';

    const DETAILS = 'details';

    const OBSERVATION_DATE = 'observationDate';

    const OBSERVATION_STAFF = 'observationStaff';

    const EVIDENCE = 'evidence';

    protected $_resourceType = ResourceType::STUDENT_CURRICULUM_EVIDENCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentCurriculumEvidence[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StudentCurriculumEvidence");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentCurriculumEvidence
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STUDENT_CURRICULUM_EVIDENCE, $id);
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
     * @return CurriculumStatement
     */
    public function getCurriculumStatement()
    {
        return $this->getProperty("curriculumStatement");
    }

    /**
     * @param CurriculumStatement $curriculumStatement
     */
    public function setCurriculumStatement(CurriculumStatement $curriculumStatement = null)
    {
        $this->setProperty("curriculumStatement", $curriculumStatement);
    }

    /**
     * @return StudentCurriculumAchievement
     */
    public function getStudentCurriculumAchievement()
    {
        return $this->getProperty("studentCurriculumAchievement");
    }

    /**
     * @param StudentCurriculumAchievement $studentCurriculumAchievement
     */
    public function setStudentCurriculumAchievement(StudentCurriculumAchievement $studentCurriculumAchievement = null)
    {
        $this->setProperty("studentCurriculumAchievement", $studentCurriculumAchievement);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty("summary");
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary = null)
    {
        $this->setProperty("summary", $summary);
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->getProperty("details");
    }

    /**
     * @param string $details
     */
    public function setDetails($details = null)
    {
        $this->setProperty("details", $details);
    }

    /**
     * @return \DateTime
     */
    public function getObservationDate()
    {
        return $this->getProperty("observationDate");
    }

    /**
     * @param \DateTime $observationDate
     */
    public function setObservationDate(\DateTime $observationDate = null)
    {
        $this->setProperty("observationDate", $observationDate);
    }

    /**
     * @return Staff
     */
    public function getObservationStaff()
    {
        return $this->getProperty("observationStaff");
    }

    /**
     * @param Staff $observationStaff
     */
    public function setObservationStaff(Staff $observationStaff = null)
    {
        $this->setProperty("observationStaff", $observationStaff);
    }

    /**
     * @return ModelBase
     */
    public function getEvidence()
    {
        return $this->getProperty("evidence");
    }

    /**
     * @param ModelBase $evidence
     */
    public function setEvidence(ModelBase $evidence = null)
    {
        $this->setProperty("evidence", $evidence);
    }
}
