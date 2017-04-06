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
use \Arbor\Model\AchievementLevel;

class StudentCurriculumAchievement extends ModelBase
{

    const STUDENT = 'student';

    const CURRICULUM_STATEMENT = 'curriculumStatement';

    const ACHIEVEMENT_LEVEL = 'achievementLevel';

    const ACHIEVEMENT_VALUE = 'achievementValue';

    const ASSESSMENT_TYPE = 'assessmentType';

    const ACHIEVEMENT_DATE = 'achievementDate';

    protected $_resourceType = ResourceType::STUDENT_CURRICULUM_ACHIEVEMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentCurriculumAchievement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentCurriculumAchievement");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentCurriculumAchievement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_CURRICULUM_ACHIEVEMENT, $id);
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
     * @return AchievementLevel
     */
    public function getAchievementLevel()
    {
        return $this->getProperty("achievementLevel");
    }

    /**
     * @param AchievementLevel $achievementLevel
     */
    public function setAchievementLevel(AchievementLevel $achievementLevel = null)
    {
        $this->setProperty("achievementLevel", $achievementLevel);
    }

    /**
     * @return float
     */
    public function getAchievementValue()
    {
        return $this->getProperty("achievementValue");
    }

    /**
     * @param float $achievementValue
     */
    public function setAchievementValue($achievementValue = null)
    {
        $this->setProperty("achievementValue", $achievementValue);
    }

    /**
     * @return string
     */
    public function getAssessmentType()
    {
        return $this->getProperty("assessmentType");
    }

    /**
     * @param string $assessmentType
     */
    public function setAssessmentType($assessmentType = null)
    {
        $this->setProperty("assessmentType", $assessmentType);
    }

    /**
     * @return \DateTime
     */
    public function getAchievementDate()
    {
        return $this->getProperty("achievementDate");
    }

    /**
     * @param \DateTime $achievementDate
     */
    public function setAchievementDate(\DateTime $achievementDate = null)
    {
        $this->setProperty("achievementDate", $achievementDate);
    }


}
