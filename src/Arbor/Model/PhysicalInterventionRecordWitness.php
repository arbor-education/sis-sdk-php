<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\PhysicalInterventionRecord;

class PhysicalInterventionRecordWitness extends ModelBase
{

    protected $_resourceType = ResourceType::PHYSICAL_INTERVENTION_RECORD_WITNESS;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\PhysicalInterventionRecordWitness[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("PhysicalInterventionRecordWitness");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\PhysicalInterventionRecordWitness
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("PhysicalInterventionRecordWitness", $id);
    }

    /**
     * @return PhysicalInterventionRecord
     */
    public function getPhysicalInterventionRecord()
    {
        return $this->getProperty("physicalInterventionRecord");
    }

    /**
     * @param PhysicalInterventionRecord $physicalInterventionRecord
     */
    public function setPhysicalInterventionRecord(PhysicalInterventionRecord $physicalInterventionRecord = null)
    {
        $this->setProperty("physicalInterventionRecord", $physicalInterventionRecord);
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

    /**
     * @return \DateTime
     */
    public function getRejectedDatetime()
    {
        return $this->getProperty("rejectedDatetime");
    }

    /**
     * @param \DateTime $rejectedDatetime
     */
    public function setRejectedDatetime(\DateTime $rejectedDatetime = null)
    {
        $this->setProperty("rejectedDatetime", $rejectedDatetime);
    }


}
