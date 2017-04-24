<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\LessonPlan;
use \Arbor\Model\CurriculumStatement;

class LessonPlanObjective extends ModelBase
{
    const LESSON_PLAN = 'lessonPlan';

    const OBJECTIVE_TITLE = 'objectiveTitle';

    const OBJECTIVE_DESCRIPTION = 'objectiveDescription';

    const CURRICULUM_STATEMENT = 'curriculumStatement';

    protected $_resourceType = ResourceType::LESSON_PLAN_OBJECTIVE;

    /**
     * @param \Arbor\Query\Query $query
     * @return LessonPlanObjective[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("LessonPlanObjective");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return LessonPlanObjective
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::LESSON_PLAN_OBJECTIVE, $id);
    }

    /**
     * @return LessonPlan
     */
    public function getLessonPlan()
    {
        return $this->getProperty("lessonPlan");
    }

    /**
     * @param LessonPlan $lessonPlan
     */
    public function setLessonPlan(LessonPlan $lessonPlan = null)
    {
        $this->setProperty("lessonPlan", $lessonPlan);
    }

    /**
     * @return string
     */
    public function getObjectiveTitle()
    {
        return $this->getProperty("objectiveTitle");
    }

    /**
     * @param string $objectiveTitle
     */
    public function setObjectiveTitle($objectiveTitle = null)
    {
        $this->setProperty("objectiveTitle", $objectiveTitle);
    }

    /**
     * @return string
     */
    public function getObjectiveDescription()
    {
        return $this->getProperty("objectiveDescription");
    }

    /**
     * @param string $objectiveDescription
     */
    public function setObjectiveDescription($objectiveDescription = null)
    {
        $this->setProperty("objectiveDescription", $objectiveDescription);
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
}
