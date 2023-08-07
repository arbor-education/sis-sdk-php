<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentCurriculumEvidence extends \ModelBase
{
    public const STUDENT = 'student';

    public const CURRICULUM_STATEMENT = 'curriculumStatement';

    public const STUDENT_CURRICULUM_ACHIEVEMENT = 'studentCurriculumAchievement';

    public const SUMMARY = 'summary';

    public const DETAILS = 'details';

    public const OBSERVATION_DATE = 'observationDate';

    public const OBSERVATION_STAFF = 'observationStaff';

    public const EVIDENCE = 'evidence';

    protected $_resourceType = ResourceType::STUDENT_CURRICULUM_EVIDENCE;

    /**
     * @param Query $query
     * @return StudentCurriculumEvidence[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_CURRICULUM_EVIDENCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentCurriculumEvidence
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_CURRICULUM_EVIDENCE, $id);
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
     * @return CurriculumStatement
     */
    public function getCurriculumStatement()
    {
        return $this->getProperty('curriculumStatement');
    }

    /**
     * @param CurriculumStatement $curriculumStatement
     */
    public function setCurriculumStatement(\CurriculumStatement $curriculumStatement = null)
    {
        $this->setProperty('curriculumStatement', $curriculumStatement);
    }

    /**
     * @return StudentCurriculumAchievement
     */
    public function getStudentCurriculumAchievement()
    {
        return $this->getProperty('studentCurriculumAchievement');
    }

    /**
     * @param StudentCurriculumAchievement $studentCurriculumAchievement
     */
    public function setStudentCurriculumAchievement(\StudentCurriculumAchievement $studentCurriculumAchievement = null)
    {
        $this->setProperty('studentCurriculumAchievement', $studentCurriculumAchievement);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty('summary');
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary = null)
    {
        $this->setProperty('summary', $summary);
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->getProperty('details');
    }

    /**
     * @param string $details
     */
    public function setDetails(string $details = null)
    {
        $this->setProperty('details', $details);
    }

    /**
     * @return \DateTime
     */
    public function getObservationDate()
    {
        return $this->getProperty('observationDate');
    }

    /**
     * @param \DateTime $observationDate
     */
    public function setObservationDate(\DateTime $observationDate = null)
    {
        $this->setProperty('observationDate', $observationDate);
    }

    /**
     * @return Staff
     */
    public function getObservationStaff()
    {
        return $this->getProperty('observationStaff');
    }

    /**
     * @param Staff $observationStaff
     */
    public function setObservationStaff(\Staff $observationStaff = null)
    {
        $this->setProperty('observationStaff', $observationStaff);
    }

    /**
     * @return ModelBase
     */
    public function getEvidence()
    {
        return $this->getProperty('evidence');
    }

    /**
     * @param ModelBase $evidence
     */
    public function setEvidence(\ModelBase $evidence = null)
    {
        $this->setProperty('evidence', $evidence);
    }
}
