<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\StudentIntervention;

class StudentInterventionGoal extends ModelBase
{
    const STUDENT_INTERVENTION = 'studentIntervention';

    const TARGET_DATE = 'targetDate';

    const OBJECTIVES = 'objectives';

    protected $_resourceType = ResourceType::STUDENT_INTERVENTION_GOAL;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentInterventionGoal[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StudentInterventionGoal");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentInterventionGoal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STUDENT_INTERVENTION_GOAL, $id);
    }

    /**
     * @return StudentIntervention
     */
    public function getStudentIntervention()
    {
        return $this->getProperty("studentIntervention");
    }

    /**
     * @param StudentIntervention $studentIntervention
     */
    public function setStudentIntervention(StudentIntervention $studentIntervention = null)
    {
        $this->setProperty("studentIntervention", $studentIntervention);
    }

    /**
     * @return \DateTime
     */
    public function getTargetDate()
    {
        return $this->getProperty("targetDate");
    }

    /**
     * @param \DateTime $targetDate
     */
    public function setTargetDate(\DateTime $targetDate = null)
    {
        $this->setProperty("targetDate", $targetDate);
    }

    /**
     * @return string
     */
    public function getObjectives()
    {
        return $this->getProperty("objectives");
    }

    /**
     * @param string $objectives
     */
    public function setObjectives($objectives = null)
    {
        $this->setProperty("objectives", $objectives);
    }
}
