<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Curriculum extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const GRADE_POINT_SCALE = 'gradePointScale';

    const CURRICULUM_TIER = 'curriculumTier';

    const LOWER_CURRICULUM_GRADE = 'lowerCurriculumGrade';

    const UPPER_CURRICULUM_GRADE = 'upperCurriculumGrade';

    const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    const LOWER_BENCHMARK_GRADE = 'lowerBenchmarkGrade';

    const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    const UPPER_BENCHMARK_GRADE = 'upperBenchmarkGrade';

    const ACHIEVEMENT_LEVEL_SET = 'achievementLevelSet';

    const ASSESSMENT = 'assessment';

    const SUBJECT = 'subject';

    const VALID_FROM_DATE = 'validFromDate';

    const VALID_UNTIL_DATE = 'validUntilDate';

    protected $_resourceType = ResourceType::CURRICULUM;

    /**
     * @param Query $query
     * @return Curriculum[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
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
    public function setName($name = null)
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
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param GradePointScale $gradePointScale
     */
    public function setGradePointScale(GradePointScale $gradePointScale = null)
    {
        $this->setProperty('gradePointScale', $gradePointScale);
    }

    /**
     * @return CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(CurriculumTier $curriculumTier = null)
    {
        $this->setProperty('curriculumTier', $curriculumTier);
    }

    /**
     * @return CurriculumGrade
     */
    public function getLowerCurriculumGrade()
    {
        return $this->getProperty('lowerCurriculumGrade');
    }

    /**
     * @param CurriculumGrade $lowerCurriculumGrade
     */
    public function setLowerCurriculumGrade(CurriculumGrade $lowerCurriculumGrade = null)
    {
        $this->setProperty('lowerCurriculumGrade', $lowerCurriculumGrade);
    }

    /**
     * @return CurriculumGrade
     */
    public function getUpperCurriculumGrade()
    {
        return $this->getProperty('upperCurriculumGrade');
    }

    /**
     * @param CurriculumGrade $upperCurriculumGrade
     */
    public function setUpperCurriculumGrade(CurriculumGrade $upperCurriculumGrade = null)
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
    public function setLowerGradePointScaleValue($lowerGradePointScaleValue = null)
    {
        $this->setProperty('lowerGradePointScaleValue', $lowerGradePointScaleValue);
    }

    /**
     * @return Grade
     */
    public function getLowerBenchmarkGrade()
    {
        return $this->getProperty('lowerBenchmarkGrade');
    }

    /**
     * @param Grade $lowerBenchmarkGrade
     */
    public function setLowerBenchmarkGrade(Grade $lowerBenchmarkGrade = null)
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
    public function setUpperGradePointScaleValue($upperGradePointScaleValue = null)
    {
        $this->setProperty('upperGradePointScaleValue', $upperGradePointScaleValue);
    }

    /**
     * @return Grade
     */
    public function getUpperBenchmarkGrade()
    {
        return $this->getProperty('upperBenchmarkGrade');
    }

    /**
     * @param Grade $upperBenchmarkGrade
     */
    public function setUpperBenchmarkGrade(Grade $upperBenchmarkGrade = null)
    {
        $this->setProperty('upperBenchmarkGrade', $upperBenchmarkGrade);
    }

    /**
     * @return AchievementLevelSet
     */
    public function getAchievementLevelSet()
    {
        return $this->getProperty('achievementLevelSet');
    }

    /**
     * @param AchievementLevelSet $achievementLevelSet
     */
    public function setAchievementLevelSet(AchievementLevelSet $achievementLevelSet = null)
    {
        $this->setProperty('achievementLevelSet', $achievementLevelSet);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param Subject $subject
     */
    public function setSubject(Subject $subject = null)
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
