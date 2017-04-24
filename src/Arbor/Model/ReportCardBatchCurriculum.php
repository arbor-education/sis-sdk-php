<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\NewReportCardBatch;
use \Arbor\Model\Curriculum;
use \Arbor\Model\AchievementLevel;
use \Arbor\Model\AchievementLevelSet;

class ReportCardBatchCurriculum extends ModelBase
{
    const REPORT_CARD_BATCH = 'reportCardBatch';

    const CURRICULUM = 'curriculum';

    const INCLUDE_STATEMENTS = 'includeStatements';

    const LOWER_ACHIEVEMENT_LEVEL = 'lowerAchievementLevel';

    const LOWER_ACHIEVEMENT_VALUE = 'lowerAchievementValue';

    const UPPER_ACHIEVEMENT_LEVEL = 'upperAchievementLevel';

    const UPPER_ACHIEVEMENT_VALUE = 'upperAchievementValue';

    const REPORTING_MODE = 'reportingMode';

    const INCLUDE_SUMMATIVE_GRADE = 'includeSummativeGrade';

    const SUMMATIVE_GRADE_TYPE = 'summativeGradeType';

    const SUMMATIVE_GRADE_ACHIEVEMENT_LEVEL_SET = 'summativeGradeAchievementLevelSet';

    protected $_resourceType = ResourceType::REPORT_CARD_BATCH_CURRICULUM;

    /**
     * @param \Arbor\Query\Query $query
     * @return ReportCardBatchCurriculum[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ReportCardBatchCurriculum");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ReportCardBatchCurriculum
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::REPORT_CARD_BATCH_CURRICULUM, $id);
    }

    /**
     * @return NewReportCardBatch
     */
    public function getReportCardBatch()
    {
        return $this->getProperty("reportCardBatch");
    }

    /**
     * @param NewReportCardBatch $reportCardBatch
     */
    public function setReportCardBatch(NewReportCardBatch $reportCardBatch = null)
    {
        $this->setProperty("reportCardBatch", $reportCardBatch);
    }

    /**
     * @return Curriculum
     */
    public function getCurriculum()
    {
        return $this->getProperty("curriculum");
    }

    /**
     * @param Curriculum $curriculum
     */
    public function setCurriculum(Curriculum $curriculum = null)
    {
        $this->setProperty("curriculum", $curriculum);
    }

    /**
     * @return bool
     */
    public function getIncludeStatements()
    {
        return $this->getProperty("includeStatements");
    }

    /**
     * @param bool $includeStatements
     */
    public function setIncludeStatements($includeStatements = null)
    {
        $this->setProperty("includeStatements", $includeStatements);
    }

    /**
     * @return AchievementLevel
     */
    public function getLowerAchievementLevel()
    {
        return $this->getProperty("lowerAchievementLevel");
    }

    /**
     * @param AchievementLevel $lowerAchievementLevel
     */
    public function setLowerAchievementLevel(AchievementLevel $lowerAchievementLevel = null)
    {
        $this->setProperty("lowerAchievementLevel", $lowerAchievementLevel);
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
     * @return AchievementLevel
     */
    public function getUpperAchievementLevel()
    {
        return $this->getProperty("upperAchievementLevel");
    }

    /**
     * @param AchievementLevel $upperAchievementLevel
     */
    public function setUpperAchievementLevel(AchievementLevel $upperAchievementLevel = null)
    {
        $this->setProperty("upperAchievementLevel", $upperAchievementLevel);
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
     * @return string
     */
    public function getReportingMode()
    {
        return $this->getProperty("reportingMode");
    }

    /**
     * @param string $reportingMode
     */
    public function setReportingMode($reportingMode = null)
    {
        $this->setProperty("reportingMode", $reportingMode);
    }

    /**
     * @return bool
     */
    public function getIncludeSummativeGrade()
    {
        return $this->getProperty("includeSummativeGrade");
    }

    /**
     * @param bool $includeSummativeGrade
     */
    public function setIncludeSummativeGrade($includeSummativeGrade = null)
    {
        $this->setProperty("includeSummativeGrade", $includeSummativeGrade);
    }

    /**
     * @return string
     */
    public function getSummativeGradeType()
    {
        return $this->getProperty("summativeGradeType");
    }

    /**
     * @param string $summativeGradeType
     */
    public function setSummativeGradeType($summativeGradeType = null)
    {
        $this->setProperty("summativeGradeType", $summativeGradeType);
    }

    /**
     * @return AchievementLevelSet
     */
    public function getSummativeGradeAchievementLevelSet()
    {
        return $this->getProperty("summativeGradeAchievementLevelSet");
    }

    /**
     * @param AchievementLevelSet $summativeGradeAchievementLevelSet
     */
    public function setSummativeGradeAchievementLevelSet(AchievementLevelSet $summativeGradeAchievementLevelSet = null)
    {
        $this->setProperty("summativeGradeAchievementLevelSet", $summativeGradeAchievementLevelSet);
    }
}
