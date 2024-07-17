<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentCurriculumEvidence extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\CurriculumStatement
     */
    public function getCurriculumStatement()
    {
        return $this->getProperty('curriculumStatement');
    }

    /**
     * @param \Arbor\Model\CurriculumStatement $curriculumStatement
     */
    public function setCurriculumStatement(\Arbor\Model\CurriculumStatement $curriculumStatement = null)
    {
        $this->setProperty('curriculumStatement', $curriculumStatement);
    }

    /**
     * @return \Arbor\Model\StudentCurriculumAchievement
     */
    public function getStudentCurriculumAchievement()
    {
        return $this->getProperty('studentCurriculumAchievement');
    }

    /**
     * @param \Arbor\Model\StudentCurriculumAchievement $studentCurriculumAchievement
     */
    public function setStudentCurriculumAchievement(\Arbor\Model\StudentCurriculumAchievement $studentCurriculumAchievement = null)
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
     * @return \Arbor\Model\Staff
     */
    public function getObservationStaff()
    {
        return $this->getProperty('observationStaff');
    }

    /**
     * @param \Arbor\Model\Staff $observationStaff
     */
    public function setObservationStaff(\Arbor\Model\Staff $observationStaff = null)
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
