<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Curriculum extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const GRADE_POINT_SCALE = 'gradePointScale';

    public const CURRICULUM_TIER = 'curriculumTier';

    public const LOWER_CURRICULUM_GRADE = 'lowerCurriculumGrade';

    public const UPPER_CURRICULUM_GRADE = 'upperCurriculumGrade';

    public const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    public const LOWER_BENCHMARK_GRADE = 'lowerBenchmarkGrade';

    public const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    public const UPPER_BENCHMARK_GRADE = 'upperBenchmarkGrade';

    public const ACHIEVEMENT_LEVEL_SET = 'achievementLevelSet';

    public const ASSESSMENT = 'assessment';

    public const SUBJECT = 'subject';

    public const VALID_FROM_DATE = 'validFromDate';

    public const VALID_UNTIL_DATE = 'validUntilDate';

    protected $_resourceType = ResourceType::CURRICULUM;

    /**
     * @param Query $query
     * @return Curriculum[] | Collection
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

        $query->setResourceType(ResourceType::CURRICULUM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Curriculum
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CURRICULUM, $id);
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
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
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
     * @return \Arbor\Model\GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param \Arbor\Model\GradePointScale $gradePointScale
     */
    public function setGradePointScale(\Arbor\Model\GradePointScale $gradePointScale = null)
    {
        $this->setProperty('gradePointScale', $gradePointScale);
    }

    /**
     * @return \Arbor\Model\CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param \Arbor\Model\CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(\Arbor\Model\CurriculumTier $curriculumTier = null)
    {
        $this->setProperty('curriculumTier', $curriculumTier);
    }

    /**
     * @return \Arbor\Model\CurriculumGrade
     */
    public function getLowerCurriculumGrade()
    {
        return $this->getProperty('lowerCurriculumGrade');
    }

    /**
     * @param \Arbor\Model\CurriculumGrade $lowerCurriculumGrade
     */
    public function setLowerCurriculumGrade(\Arbor\Model\CurriculumGrade $lowerCurriculumGrade = null)
    {
        $this->setProperty('lowerCurriculumGrade', $lowerCurriculumGrade);
    }

    /**
     * @return \Arbor\Model\CurriculumGrade
     */
    public function getUpperCurriculumGrade()
    {
        return $this->getProperty('upperCurriculumGrade');
    }

    /**
     * @param \Arbor\Model\CurriculumGrade $upperCurriculumGrade
     */
    public function setUpperCurriculumGrade(\Arbor\Model\CurriculumGrade $upperCurriculumGrade = null)
    {
        $this->setProperty('upperCurriculumGrade', $upperCurriculumGrade);
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
     * @return \Arbor\Model\Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param \Arbor\Model\Assessment $assessment
     */
    public function setAssessment(\Arbor\Model\Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return \Arbor\Model\Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param \Arbor\Model\Subject $subject
     */
    public function setSubject(\Arbor\Model\Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return \DateTime
     */
    public function getValidFromDate()
    {
        return $this->getProperty('validFromDate');
    }

    /**
     * @param \DateTime $validFromDate
     */
    public function setValidFromDate(\DateTime $validFromDate = null)
    {
        $this->setProperty('validFromDate', $validFromDate);
    }

    /**
     * @return \DateTime
     */
    public function getValidUntilDate()
    {
        return $this->getProperty('validUntilDate');
    }

    /**
     * @param \DateTime $validUntilDate
     */
    public function setValidUntilDate(\DateTime $validUntilDate = null)
    {
        $this->setProperty('validUntilDate', $validUntilDate);
    }
}
