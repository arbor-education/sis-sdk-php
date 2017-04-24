<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Behaviour;

class BehaviouralIncident extends ModelBase
{
    const BEHAVIOUR = 'behaviour';

    const INCIDENT_NAME = 'incidentName';

    const NARRATIVE = 'narrative';

    const INCIDENT_DATETIME = 'incidentDatetime';

    const SEVERITY = 'severity';

    const EVENT = 'event';

    const LOCATION = 'location';

    const RESOLVED_DATETIME = 'resolvedDatetime';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return BehaviouralIncident[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("BehaviouralIncident");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BehaviouralIncident
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT, $id);
    }

    /**
     * @return Behaviour
     */
    public function getBehaviour()
    {
        return $this->getProperty("behaviour");
    }

    /**
     * @param Behaviour $behaviour
     */
    public function setBehaviour(Behaviour $behaviour = null)
    {
        $this->setProperty("behaviour", $behaviour);
    }

    /**
     * @return string
     */
    public function getIncidentName()
    {
        return $this->getProperty("incidentName");
    }

    /**
     * @param string $incidentName
     */
    public function setIncidentName($incidentName = null)
    {
        $this->setProperty("incidentName", $incidentName);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }

    /**
     * @return \DateTime
     */
    public function getIncidentDatetime()
    {
        return $this->getProperty("incidentDatetime");
    }

    /**
     * @param \DateTime $incidentDatetime
     */
    public function setIncidentDatetime(\DateTime $incidentDatetime = null)
    {
        $this->setProperty("incidentDatetime", $incidentDatetime);
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->getProperty("severity");
    }

    /**
     * @param string $severity
     */
    public function setSeverity($severity = null)
    {
        $this->setProperty("severity", $severity);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty("event");
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(ModelBase $event = null)
    {
        $this->setProperty("event", $event);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty("location");
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(ModelBase $location = null)
    {
        $this->setProperty("location", $location);
    }

    /**
     * @return \DateTime
     */
    public function getResolvedDatetime()
    {
        return $this->getProperty("resolvedDatetime");
    }

    /**
     * @param \DateTime $resolvedDatetime
     */
    public function setResolvedDatetime(\DateTime $resolvedDatetime = null)
    {
        $this->setProperty("resolvedDatetime", $resolvedDatetime);
    }
}
