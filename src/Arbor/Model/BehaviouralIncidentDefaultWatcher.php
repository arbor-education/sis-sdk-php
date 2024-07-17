<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviouralIncidentDefaultWatcher extends ModelBase
{
    public const LEVEL_OF_INCIDENT = 'levelOfIncident';

    public const BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW = 'behaviouralIncidentLevelWorkflow';

    public const RELATION_TO_STUDENT = 'relationToStudent';

    public const STAFF = 'staff';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_DEFAULT_WATCHER;

    /**
     * @param Query $query
     * @return BehaviouralIncidentDefaultWatcher[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_INCIDENT_DEFAULT_WATCHER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralIncidentDefaultWatcher
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT_DEFAULT_WATCHER, $id);
    }

    /**
     * @return int
     */
    public function getLevelOfIncident()
    {
        return $this->getProperty('levelOfIncident');
    }

    /**
     * @param int $levelOfIncident
     */
    public function setLevelOfIncident(int $levelOfIncident = null)
    {
        $this->setProperty('levelOfIncident', $levelOfIncident);
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
    public function getRelationToStudent()
    {
        return $this->getProperty('relationToStudent');
    }

    /**
     * @param string $relationToStudent
     */
    public function setRelationToStudent(string $relationToStudent = null)
    {
        $this->setProperty('relationToStudent', $relationToStudent);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }
}
