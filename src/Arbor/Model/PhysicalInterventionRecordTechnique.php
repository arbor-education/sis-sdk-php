<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PhysicalInterventionRecordTechnique extends ModelBase
{
    public const PHYSICAL_INTERVENTION_RECORD = 'physicalInterventionRecord';

    public const PHYSICAL_INTERVENTION_TECHNIQUE = 'physicalInterventionTechnique';

    protected $_resourceType = ResourceType::PHYSICAL_INTERVENTION_RECORD_TECHNIQUE;

    /**
     * @param Query $query
     * @return PhysicalInterventionRecordTechnique[] | Collection
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
     * @return \Arbor\Model\PhysicalInterventionRecord
     */
    public function getPhysicalInterventionRecord()
    {
        return $this->getProperty('physicalInterventionRecord');
    }

    /**
     * @param \Arbor\Model\PhysicalInterventionRecord $physicalInterventionRecord
     */
    public function setPhysicalInterventionRecord(\Arbor\Model\PhysicalInterventionRecord $physicalInterventionRecord = null)
    {
        $this->setProperty('physicalInterventionRecord', $physicalInterventionRecord);
    }

    /**
     * @return \Arbor\Model\PhysicalInterventionTechnique
     */
    public function getPhysicalInterventionTechnique()
    {
        return $this->getProperty('physicalInterventionTechnique');
    }

    /**
     * @param \Arbor\Model\PhysicalInterventionTechnique $physicalInterventionTechnique
     */
    public function setPhysicalInterventionTechnique(\Arbor\Model\PhysicalInterventionTechnique $physicalInterventionTechnique = null)
    {
        $this->setProperty('physicalInterventionTechnique', $physicalInterventionTechnique);
    }
}
