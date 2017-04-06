<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AchievementLevelSet;
use \Arbor\Model\Grade;

class AchievementLevel extends ModelBase
{

    const CODE = 'code';

    const ACHIEVEMENT_LEVEL_SET = 'achievementLevelSet';

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const ACHIEVEMENT_VALUE = 'achievementValue';

    const LOWER_ACHIEVEMENT_VALUE = 'lowerAchievementValue';

    const UPPER_ACHIEVEMENT_VALUE = 'upperAchievementValue';

    const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    const LOWER_BENCHMARK_GRADE = 'lowerBenchmarkGrade';

    const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    const UPPER_BENCHMARK_GRADE = 'upperBenchmarkGrade';

    protected $_resourceType = ResourceType::ACHIEVEMENT_LEVEL;

    /**
     * @param \Arbor\Query\Query $query
     * @return AchievementLevel[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AchievementLevel");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AchievementLevel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ACHIEVEMENT_LEVEL, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return AchievementLevelSet
     */
    public function getAchievementLevelSet()
    {
        return $this->getProperty("achievementLevelSet");
    }

    /**
     * @param AchievementLevelSet $achievementLevelSet
     */
    public function setAchievementLevelSet(AchievementLevelSet $achievementLevelSet = null)
    {
        $this->setProperty("achievementLevelSet", $achievementLevelSet);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
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
     * @return float
     */
    public function getLowerAchievementValue()
    {
        return $this->getProperty("lowerAchievementValue");
    }

    /**
     * @param float $lowerAchievementValue
     */
    public function setLowerAchievementValue($lowerAchievementValue = null)
    {
        $this->setProperty("lowerAchievementValue", $lowerAchievementValue);
    }

    /**
     * @return float
     */
    public function getUpperAchievementValue()
    {
        return $this->getProperty("upperAchievementValue");
    }

    /**
     * @param float $upperAchievementValue
     */
    public function setUpperAchievementValue($upperAchievementValue = null)
    {
        $this->setProperty("upperAchievementValue", $upperAchievementValue);
    }

    /**
     * @return float
     */
    public function getLowerGradePointScaleValue()
    {
        return $this->getProperty("lowerGradePointScaleValue");
    }

    /**
     * @param float $lowerGradePointScaleValue
     */
    public function setLowerGradePointScaleValue($lowerGradePointScaleValue = null)
    {
        $this->setProperty("lowerGradePointScaleValue", $lowerGradePointScaleValue);
    }

    /**
     * @return Grade
     */
    public function getLowerBenchmarkGrade()
    {
        return $this->getProperty("lowerBenchmarkGrade");
    }

    /**
     * @param Grade $lowerBenchmarkGrade
     */
    public function setLowerBenchmarkGrade(Grade $lowerBenchmarkGrade = null)
    {
        $this->setProperty("lowerBenchmarkGrade", $lowerBenchmarkGrade);
    }

    /**
     * @return float
     */
    public function getUpperGradePointScaleValue()
    {
        return $this->getProperty("upperGradePointScaleValue");
    }

    /**
     * @param float $upperGradePointScaleValue
     */
    public function setUpperGradePointScaleValue($upperGradePointScaleValue = null)
    {
        $this->setProperty("upperGradePointScaleValue", $upperGradePointScaleValue);
    }

    /**
     * @return Grade
     */
    public function getUpperBenchmarkGrade()
    {
        return $this->getProperty("upperBenchmarkGrade");
    }

    /**
     * @param Grade $upperBenchmarkGrade
     */
    public function setUpperBenchmarkGrade(Grade $upperBenchmarkGrade = null)
    {
        $this->setProperty("upperBenchmarkGrade", $upperBenchmarkGrade);
    }


}
