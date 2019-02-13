<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PhysicalInterventionRecordTechnique extends ModelBase
{

    const PHYSICAL_INTERVENTION_RECORD = 'physicalInterventionRecord';

    const PHYSICAL_INTERVENTION_TECHNIQUE = 'physicalInterventionTechnique';

    protected $_resourceType = ResourceType::PHYSICAL_INTERVENTION_RECORD_TECHNIQUE;

    /**
     * @param Query $query
     * @return PhysicalInterventionRecordTechnique[] | Collection
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

        $query->setResourceType(ResourceType::PHYSICAL_INTERVENTION_RECORD_TECHNIQUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PhysicalInterventionRecordTechnique
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PHYSICAL_INTERVENTION_RECORD_TECHNIQUE, $id);
    }

    /**
     * @return PhysicalInterventionRecord
     */
    public function getPhysicalInterventionRecord()
    {
        return $this->getProperty('physicalInterventionRecord');
    }

    /**
     * @param PhysicalInterventionRecord $physicalInterventionRecord
     */
    public function setPhysicalInterventionRecord(PhysicalInterventionRecord $physicalInterventionRecord = null)
    {
        $this->setProperty('physicalInterventionRecord', $physicalInterventionRecord);
    }

    /**
     * @return PhysicalInterventionTechnique
     */
    public function getPhysicalInterventionTechnique()
    {
        return $this->getProperty('physicalInterventionTechnique');
    }

    /**
     * @param PhysicalInterventionTechnique $physicalInterventionTechnique
     */
    public function setPhysicalInterventionTechnique(PhysicalInterventionTechnique $physicalInterventionTechnique = null)
    {
        $this->setProperty('physicalInterventionTechnique', $physicalInterventionTechnique);
    }


}
