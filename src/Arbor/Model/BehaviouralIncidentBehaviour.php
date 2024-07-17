<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviouralIncidentBehaviour extends ModelBase
{
    public const BEHAVIOURAL_INCIDENT = 'behaviouralIncident';

    public const STUDENT = 'student';

    public const BEHAVIOUR = 'behaviour';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_BEHAVIOUR;

    /**
     * @param Query $query
     * @return BehaviouralIncidentBehaviour[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_INCIDENT_BEHAVIOUR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralIncidentBehaviour
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT_BEHAVIOUR, $id);
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
     * @return \Arbor\Model\Behaviour
     */
    public function getBehaviour()
    {
        return $this->getProperty('behaviour');
    }

    /**
     * @param \Arbor\Model\Behaviour $behaviour
     */
    public function setBehaviour(\Arbor\Model\Behaviour $behaviour = null)
    {
        $this->setProperty('behaviour', $behaviour);
    }
}
