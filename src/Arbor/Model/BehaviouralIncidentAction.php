<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviouralIncidentAction extends ModelBase
{
    public const BEHAVIOURAL_INCIDENT = 'behaviouralIncident';

    public const STUDENT = 'student';

    public const ACTION = 'action';

    public const IS_AUTOMATIC = 'isAutomatic';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_ACTION;

    /**
     * @param Query $query
     * @return BehaviouralIncidentAction[] | Collection
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
     * @return \Arbor\Model\BehaviouralIncident
     */
    public function getBehaviouralIncident()
    {
        return $this->getProperty('behaviouralIncident');
    }

    /**
     * @param \Arbor\Model\BehaviouralIncident $behaviouralIncident
     */
    public function setBehaviouralIncident(\Arbor\Model\BehaviouralIncident $behaviouralIncident = null)
    {
        $this->setProperty('behaviouralIncident', $behaviouralIncident);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
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
    public function setAction(\ModelBase $action = null)
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
    public function setIsAutomatic(bool $isAutomatic = null)
    {
        $this->setProperty('isAutomatic', $isAutomatic);
    }
}
