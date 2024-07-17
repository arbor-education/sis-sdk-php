<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Behaviour extends ModelBase
{
    public const BEHAVIOUR_NAME = 'behaviourName';

    public const DESCRIPTION = 'description';

    public const BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW = 'behaviouralIncidentLevelWorkflow';

    public const SEVERITY = 'severity';

    public const ACTIVE = 'active';

    public const IS_MY_CLASSROOM_DEFAULT = 'isMyClassroomDefault';

    protected $_resourceType = ResourceType::BEHAVIOUR;

    /**
     * @param Query $query
     * @return Behaviour[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOUR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Behaviour
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOUR, $id);
    }

    /**
     * @return string
     */
    public function getBehaviourName()
    {
        return $this->getProperty('behaviourName');
    }

    /**
     * @param string $behaviourName
     */
    public function setBehaviourName(string $behaviourName = null)
    {
        $this->setProperty('behaviourName', $behaviourName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return \Arbor\Model\BehaviouralIncidentLevelWorkflow
     */
    public function getBehaviouralIncidentLevelWorkflow()
    {
        return $this->getProperty('behaviouralIncidentLevelWorkflow');
    }

    /**
     * @param \Arbor\Model\BehaviouralIncidentLevelWorkflow
     * $behaviouralIncidentLevelWorkflow
     */
    public function setBehaviouralIncidentLevelWorkflow(\Arbor\Model\BehaviouralIncidentLevelWorkflow $behaviouralIncidentLevelWorkflow = null)
    {
        $this->setProperty('behaviouralIncidentLevelWorkflow', $behaviouralIncidentLevelWorkflow);
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->getProperty('severity');
    }

    /**
     * @param string $severity
     */
    public function setSeverity(string $severity = null)
    {
        $this->setProperty('severity', $severity);
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
     * @return bool
     */
    public function getIsMyClassroomDefault()
    {
        return $this->getProperty('isMyClassroomDefault');
    }

    /**
     * @param bool $isMyClassroomDefault
     */
    public function setIsMyClassroomDefault(bool $isMyClassroomDefault = null)
    {
        $this->setProperty('isMyClassroomDefault', $isMyClassroomDefault);
    }
}
