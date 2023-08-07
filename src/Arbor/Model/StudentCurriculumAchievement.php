<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentCurriculumAchievement extends \ModelBase
{
    public const STUDENT = 'student';

    public const CURRICULUM_STATEMENT = 'curriculumStatement';

    public const ACHIEVEMENT_LEVEL = 'achievementLevel';

    public const ACHIEVEMENT_VALUE = 'achievementValue';

    public const ASSESSMENT_TYPE = 'assessmentType';

    public const ACHIEVEMENT_DATE = 'achievementDate';

    protected $_resourceType = ResourceType::STUDENT_CURRICULUM_ACHIEVEMENT;

    /**
     * @param Query $query
     * @return StudentCurriculumAchievement[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_CURRICULUM_ACHIEVEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentCurriculumAchievement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_CURRICULUM_ACHIEVEMENT, $id);
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
     * @return AchievementLevel
     */
    public function getAchievementLevel()
    {
        return $this->getProperty('achievementLevel');
    }

    /**
     * @param AchievementLevel $achievementLevel
     */
    public function setAchievementLevel(\AchievementLevel $achievementLevel = null)
    {
        $this->setProperty('achievementLevel', $achievementLevel);
    }

    /**
     * @return float
     */
    public function getAchievementValue()
    {
        return $this->getProperty('achievementValue');
    }

    /**
     * @param float $achievementValue
     */
    public function setAchievementValue(float $achievementValue = null)
    {
        $this->setProperty('achievementValue', $achievementValue);
    }

    /**
     * @return string
     */
    public function getAssessmentType()
    {
        return $this->getProperty('assessmentType');
    }

    /**
     * @param string $assessmentType
     */
    public function setAssessmentType(string $assessmentType = null)
    {
        $this->setProperty('assessmentType', $assessmentType);
    }

    /**
     * @return \DateTime
     */
    public function getAchievementDate()
    {
        return $this->getProperty('achievementDate');
    }

    /**
     * @param \DateTime $achievementDate
     */
    public function setAchievementDate(\DateTime $achievementDate = null)
    {
        $this->setProperty('achievementDate', $achievementDate);
    }
}
