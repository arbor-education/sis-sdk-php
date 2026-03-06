<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentCurriculumAchievement extends ModelBase
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
    public static function query(\Arbor\Query\Query $query = null)
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
     * @return \Arbor\Model\AchievementLevel
     */
    public function getAchievementLevel()
    {
        return $this->getProperty('achievementLevel');
    }

    /**
     * @param \Arbor\Model\AchievementLevel $achievementLevel
     */
    public function setAchievementLevel(\Arbor\Model\AchievementLevel $achievementLevel = null)
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
