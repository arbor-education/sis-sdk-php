<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AchievementLevel extends ModelBase
{
    public const CODE = 'code';

    public const ACHIEVEMENT_LEVEL_SET = 'achievementLevelSet';

    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const ACHIEVEMENT_VALUE = 'achievementValue';

    public const LOWER_ACHIEVEMENT_VALUE = 'lowerAchievementValue';

    public const UPPER_ACHIEVEMENT_VALUE = 'upperAchievementValue';

    public const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    public const LOWER_BENCHMARK_GRADE = 'lowerBenchmarkGrade';

    public const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    public const UPPER_BENCHMARK_GRADE = 'upperBenchmarkGrade';

    protected $_resourceType = ResourceType::ACHIEVEMENT_LEVEL;

    /**
     * @param Query $query
     * @return AchievementLevel[] | Collection
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

        $query->setResourceType(ResourceType::ACHIEVEMENT_LEVEL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AchievementLevel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACHIEVEMENT_LEVEL, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return \Arbor\Model\AchievementLevelSet
     */
    public function getAchievementLevelSet()
    {
        return $this->getProperty('achievementLevelSet');
    }

    /**
     * @param \Arbor\Model\AchievementLevelSet $achievementLevelSet
     */
    public function setAchievementLevelSet(\Arbor\Model\AchievementLevelSet $achievementLevelSet = null)
    {
        $this->setProperty('achievementLevelSet', $achievementLevelSet);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
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
     * @return float
     */
    public function getLowerAchievementValue()
    {
        return $this->getProperty('lowerAchievementValue');
    }

    /**
     * @param float $lowerAchievementValue
     */
    public function setLowerAchievementValue(float $lowerAchievementValue = null)
    {
        $this->setProperty('lowerAchievementValue', $lowerAchievementValue);
    }

    /**
     * @return float
     */
    public function getUpperAchievementValue()
    {
        return $this->getProperty('upperAchievementValue');
    }

    /**
     * @param float $upperAchievementValue
     */
    public function setUpperAchievementValue(float $upperAchievementValue = null)
    {
        $this->setProperty('upperAchievementValue', $upperAchievementValue);
    }

    /**
     * @return float
     */
    public function getLowerGradePointScaleValue()
    {
        return $this->getProperty('lowerGradePointScaleValue');
    }

    /**
     * @param float $lowerGradePointScaleValue
     */
    public function setLowerGradePointScaleValue(float $lowerGradePointScaleValue = null)
    {
        $this->setProperty('lowerGradePointScaleValue', $lowerGradePointScaleValue);
    }

    /**
     * @return \Arbor\Model\Grade
     */
    public function getLowerBenchmarkGrade()
    {
        return $this->getProperty('lowerBenchmarkGrade');
    }

    /**
     * @param \Arbor\Model\Grade $lowerBenchmarkGrade
     */
    public function setLowerBenchmarkGrade(\Arbor\Model\Grade $lowerBenchmarkGrade = null)
    {
        $this->setProperty('lowerBenchmarkGrade', $lowerBenchmarkGrade);
    }

    /**
     * @return float
     */
    public function getUpperGradePointScaleValue()
    {
        return $this->getProperty('upperGradePointScaleValue');
    }

    /**
     * @param float $upperGradePointScaleValue
     */
    public function setUpperGradePointScaleValue(float $upperGradePointScaleValue = null)
    {
        $this->setProperty('upperGradePointScaleValue', $upperGradePointScaleValue);
    }

    /**
     * @return \Arbor\Model\Grade
     */
    public function getUpperBenchmarkGrade()
    {
        return $this->getProperty('upperBenchmarkGrade');
    }

    /**
     * @param \Arbor\Model\Grade $upperBenchmarkGrade
     */
    public function setUpperBenchmarkGrade(\Arbor\Model\Grade $upperBenchmarkGrade = null)
    {
        $this->setProperty('upperBenchmarkGrade', $upperBenchmarkGrade);
    }
}
