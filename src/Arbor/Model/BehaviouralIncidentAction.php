<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviouralIncidentAction extends ModelBase
{
    const BEHAVIOURAL_INCIDENT = 'behaviouralIncident';

    const STUDENT = 'student';

    const ACTION = 'action';

    const IS_AUTOMATIC = 'isAutomatic';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_ACTION;

    /**
     * @param Query $query
     * @return BehaviouralIncidentAction[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_INCIDENT_ACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralIncidentAction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT_ACTION, $id);
    }

    /**
     * @return BehaviouralIncident
     */
    public function getBehaviouralIncident()
    {
        return $this->getProperty('behaviouralIncident');
    }

    /**
     * @param BehaviouralIncident $behaviouralIncident
     */
    public function setBehaviouralIncident(BehaviouralIncident $behaviouralIncident = null)
    {
        $this->setProperty('behaviouralIncident', $behaviouralIncident);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return ModelBase
     */
    public function getAction()
    {
        return $this->getProperty('action');
    }

    /**
     * @param ModelBase $action
     */
    public function setAction(ModelBase $action = null)
    {
        $this->setProperty('action', $action);
    }

    /**
     * @return bool
     */
    public function getIsAutomatic()
    {
        return $this->getProperty('isAutomatic');
    }

    /**
     * @param bool $isAutomatic
     */
    public function setIsAutomatic($isAutomatic = null)
    {
        $this->setProperty('isAutomatic', $isAutomatic);
    }
}
