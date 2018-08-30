<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\PhysicalInterventionRecord;
use \Arbor\Model\PhysicalInterventionTechnique;

class PhysicalInterventionRecordTechnique extends ModelBase
{

    protected $_resourceType = ResourceType::PHYSICAL_INTERVENTION_RECORD_TECHNIQUE;

    /**
     * @param \Arbor\Query\Query $query
     * @return
     * \Arbor\Model\PhysicalInterventionRecordTechnique[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("PhysicalInterventionRecordTechnique");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\PhysicalInterventionRecordTechnique
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("PhysicalInterventionRecordTechnique", $id);
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
     * @return PhysicalInterventionTechnique
     */
    public function getPhysicalInterventionTechnique()
    {
        return $this->getProperty("physicalInterventionTechnique");
    }

    /**
     * @param PhysicalInterventionTechnique $physicalInterventionTechnique
     */
    public function setPhysicalInterventionTechnique(PhysicalInterventionTechnique $physicalInterventionTechnique = null)
    {
        $this->setProperty("physicalInterventionTechnique", $physicalInterventionTechnique);
    }


}
