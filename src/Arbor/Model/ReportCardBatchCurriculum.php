<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ReportCardBatchCurriculum extends ModelBase
{
    public const REPORT_CARD_BATCH = 'reportCardBatch';

    public const ORDER = 'order';

    public const CURRICULUM = 'curriculum';

    public const INCLUDE_STATEMENTS = 'includeStatements';

    public const LOWER_ACHIEVEMENT_LEVEL = 'lowerAchievementLevel';

    public const LOWER_ACHIEVEMENT_VALUE = 'lowerAchievementValue';

    public const UPPER_ACHIEVEMENT_LEVEL = 'upperAchievementLevel';

    public const UPPER_ACHIEVEMENT_VALUE = 'upperAchievementValue';

    public const REPORTING_MODE = 'reportingMode';

    public const INCLUDE_SUMMATIVE_GRADE = 'includeSummativeGrade';

    public const SUMMATIVE_GRADE_TYPE = 'summativeGradeType';

    public const SUMMATIVE_GRADE_ACHIEVEMENT_LEVEL_SET = 'summativeGradeAchievementLevelSet';

    protected $_resourceType = ResourceType::REPORT_CARD_BATCH_CURRICULUM;

    /**
     * @param Query $query
     * @return ReportCardBatchCurriculum[] | Collection
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

        $query->setResourceType(ResourceType::REPORT_CARD_BATCH_CURRICULUM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ReportCardBatchCurriculum
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REPORT_CARD_BATCH_CURRICULUM, $id);
    }

    /**
     * @return \Arbor\Model\NewReportCardBatch
     */
    public function getReportCardBatch()
    {
        return $this->getProperty('reportCardBatch');
    }

    /**
     * @param \Arbor\Model\NewReportCardBatch $reportCardBatch
     */
    public function setReportCardBatch(\Arbor\Model\NewReportCardBatch $reportCardBatch = null)
    {
        $this->setProperty('reportCardBatch', $reportCardBatch);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->getProperty('order');
    }

    /**
     * @param int $order
     */
    public function setOrder(int $order = null)
    {
        $this->setProperty('order', $order);
    }

    /**
     * @return \Arbor\Model\Curriculum
     */
    public function getCurriculum()
    {
        return $this->getProperty('curriculum');
    }

    /**
     * @param \Arbor\Model\Curriculum $curriculum
     */
    public function setCurriculum(\Arbor\Model\Curriculum $curriculum = null)
    {
        $this->setProperty('curriculum', $curriculum);
    }

    /**
     * @return bool
     */
    public function getIncludeStatements()
    {
        return $this->getProperty('includeStatements');
    }

    /**
     * @param bool $includeStatements
     */
    public function setIncludeStatements(bool $includeStatements = null)
    {
        $this->setProperty('includeStatements', $includeStatements);
    }

    /**
     * @return \Arbor\Model\AchievementLevel
     */
    public function getLowerAchievementLevel()
    {
        return $this->getProperty('lowerAchievementLevel');
    }

    /**
     * @param \Arbor\Model\AchievementLevel $lowerAchievementLevel
     */
    public function setLowerAchievementLevel(\Arbor\Model\AchievementLevel $lowerAchievementLevel = null)
    {
        $this->setProperty('lowerAchievementLevel', $lowerAchievementLevel);
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
     * @return \Arbor\Model\AchievementLevel
     */
    public function getUpperAchievementLevel()
    {
        return $this->getProperty('upperAchievementLevel');
    }

    /**
     * @param \Arbor\Model\AchievementLevel $upperAchievementLevel
     */
    public function setUpperAchievementLevel(\Arbor\Model\AchievementLevel $upperAchievementLevel = null)
    {
        $this->setProperty('upperAchievementLevel', $upperAchievementLevel);
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
     * @return string
     */
    public function getReportingMode()
    {
        return $this->getProperty('reportingMode');
    }

    /**
     * @param string $reportingMode
     */
    public function setReportingMode(string $reportingMode = null)
    {
        $this->setProperty('reportingMode', $reportingMode);
    }

    /**
     * @return bool
     */
    public function getIncludeSummativeGrade()
    {
        return $this->getProperty('includeSummativeGrade');
    }

    /**
     * @param bool $includeSummativeGrade
     */
    public function setIncludeSummativeGrade(bool $includeSummativeGrade = null)
    {
        $this->setProperty('includeSummativeGrade', $includeSummativeGrade);
    }

    /**
     * @return string
     */
    public function getSummativeGradeType()
    {
        return $this->getProperty('summativeGradeType');
    }

    /**
     * @param string $summativeGradeType
     */
    public function setSummativeGradeType(string $summativeGradeType = null)
    {
        $this->setProperty('summativeGradeType', $summativeGradeType);
    }

    /**
     * @return \Arbor\Model\AchievementLevelSet
     */
    public function getSummativeGradeAchievementLevelSet()
    {
        return $this->getProperty('summativeGradeAchievementLevelSet');
    }

    /**
     * @param \Arbor\Model\AchievementLevelSet $summativeGradeAchievementLevelSet
     */
    public function setSummativeGradeAchievementLevelSet(\Arbor\Model\AchievementLevelSet $summativeGradeAchievementLevelSet = null)
    {
        $this->setProperty('summativeGradeAchievementLevelSet', $summativeGradeAchievementLevelSet);
    }
}
