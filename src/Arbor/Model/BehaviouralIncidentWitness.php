<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviouralIncidentWitness extends ModelBase
{
    const BEHAVIOURAL_INCIDENT = 'behaviouralIncident';

    const WITNESS = 'witness';

    const NARRATIVE = 'narrative';

    const CONFIRMED_DATETIME = 'confirmedDatetime';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_WITNESS;

    /**
     * @param Query $query
     * @return BehaviouralIncidentWitness[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_INCIDENT_WITNESS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralIncidentWitness
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT_WITNESS, $id);
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
     * @return ModelBase
     */
    public function getWitness()
    {
        return $this->getProperty('witness');
    }

    /**
     * @param ModelBase $witness
     */
    public function setWitness(ModelBase $witness = null)
    {
        $this->setProperty('witness', $witness);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

    /**
     * @return \DateTime
     */
    public function getConfirmedDatetime()
    {
        return $this->getProperty('confirmedDatetime');
    }

    /**
     * @param \DateTime $confirmedDatetime
     */
    public function setConfirmedDatetime(\DateTime $confirmedDatetime = null)
    {
        $this->setProperty('confirmedDatetime', $confirmedDatetime);
    }
}
