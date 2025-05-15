<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class LessonPlanObjective extends ModelBase
{
    public const OBJECTIVE_TITLE = 'objectiveTitle';

    public const OBJECTIVE_DESCRIPTION = 'objectiveDescription';

    public const CURRICULUM_STATEMENT = 'curriculumStatement';

    protected $_resourceType = ResourceType::LESSON_PLAN_OBJECTIVE;

    /**
     * @param Query $query
     * @return LessonPlanObjective[] | Collection
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

        $query->setResourceType(ResourceType::LESSON_PLAN_OBJECTIVE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LessonPlanObjective
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LESSON_PLAN_OBJECTIVE, $id);
    }

    /**
     * @return string
     */
    public function getObjectiveTitle()
    {
        return $this->getProperty('objectiveTitle');
    }

    /**
     * @param string $objectiveTitle
     */
    public function setObjectiveTitle(string $objectiveTitle = null)
    {
        $this->setProperty('objectiveTitle', $objectiveTitle);
    }

    /**
     * @return string
     */
    public function getObjectiveDescription()
    {
        return $this->getProperty('objectiveDescription');
    }

    /**
     * @param string $objectiveDescription
     */
    public function setObjectiveDescription(string $objectiveDescription = null)
    {
        $this->setProperty('objectiveDescription', $objectiveDescription);
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
}
