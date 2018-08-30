<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\BehaviouralIncident;

class BehaviouralIncidentWitness extends ModelBase
{

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_WITNESS;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\BehaviouralIncidentWitness[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("BehaviouralIncidentWitness");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\BehaviouralIncidentWitness
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("BehaviouralIncidentWitness", $id);
    }

    /**
     * @return BehaviouralIncident
     */
    public function getBehaviouralIncident()
    {
        return $this->getProperty("behaviouralIncident");
    }

    /**
     * @param BehaviouralIncident $behaviouralIncident
     */
    public function setBehaviouralIncident(BehaviouralIncident $behaviouralIncident = null)
    {
        $this->setProperty("behaviouralIncident", $behaviouralIncident);
    }

    /**
     * @return ModelBase
     */
    public function getWitness()
    {
        return $this->getProperty("witness");
    }

    /**
     * @param ModelBase $witness
     */
    public function setWitness(ModelBase $witness = null)
    {
        $this->setProperty("witness", $witness);
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
    public function getConfirmedDatetime()
    {
        return $this->getProperty("confirmedDatetime");
    }

    /**
     * @param \DateTime $confirmedDatetime
     */
    public function setConfirmedDatetime(\DateTime $confirmedDatetime = null)
    {
        $this->setProperty("confirmedDatetime", $confirmedDatetime);
    }


}
