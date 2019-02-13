<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class LessonPlanObjective extends ModelBase
{

    const OBJECTIVE_TITLE = 'objectiveTitle';

    const OBJECTIVE_DESCRIPTION = 'objectiveDescription';

    const CURRICULUM_STATEMENT = 'curriculumStatement';

    protected $_resourceType = ResourceType::LESSON_PLAN_OBJECTIVE;

    /**
     * @param Query $query
     * @return LessonPlanObjective[] | Collection
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
    public function setObjectiveTitle($objectiveTitle = null)
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
    public function setObjectiveDescription($objectiveDescription = null)
    {
        $this->setProperty('objectiveDescription', $objectiveDescription);
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
    public function setCurriculumStatement(CurriculumStatement $curriculumStatement = null)
    {
        $this->setProperty('curriculumStatement', $curriculumStatement);
    }


}
