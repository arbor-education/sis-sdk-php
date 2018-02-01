<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentInterventionGoal extends ModelBase
{

    const STUDENT_INTERVENTION = 'studentIntervention';

    const TARGET_DATE = 'targetDate';

    const OBJECTIVES = 'objectives';

    protected $_resourceType = ResourceType::STUDENT_INTERVENTION_GOAL;

    /**
     * @param Query $query
     * @return StudentInterventionGoal[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_INTERVENTION_GOAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentInterventionGoal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_INTERVENTION_GOAL, $id);
    }

    /**
     * @return StudentIntervention
     */
    public function getStudentIntervention()
    {
        return $this->getProperty('studentIntervention');
    }

    /**
     * @param StudentIntervention $studentIntervention
     */
    public function setStudentIntervention(StudentIntervention $studentIntervention = null)
    {
        $this->setProperty('studentIntervention', $studentIntervention);
    }

    /**
     * @return \DateTime
     */
    public function getTargetDate()
    {
        return $this->getProperty('targetDate');
    }

    /**
     * @param \DateTime $targetDate
     */
    public function setTargetDate(\DateTime $targetDate = null)
    {
        $this->setProperty('targetDate', $targetDate);
    }

    /**
     * @return string
     */
    public function getObjectives()
    {
        return $this->getProperty('objectives');
    }

    /**
     * @param string $objectives
     */
    public function setObjectives($objectives = null)
    {
        $this->setProperty('objectives', $objectives);
    }


}
