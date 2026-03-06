<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviouralIncidentWitness extends ModelBase
{
    public const BEHAVIOURAL_INCIDENT = 'behaviouralIncident';

    public const WITNESS = 'witness';

    public const NARRATIVE = 'narrative';

    public const CONFIRMED_DATETIME = 'confirmedDatetime';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_WITNESS;

    /**
     * @param Query $query
     * @return BehaviouralIncidentWitness[] | Collection
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
     * @return ModelBase
     */
    public function getWitness()
    {
        return $this->getProperty('witness');
    }

    /**
     * @param ModelBase $witness
     */
    public function setWitness(\ModelBase $witness = null)
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
    public function setNarrative(string $narrative = null)
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
