<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PhysicalInterventionRecordWitness extends ModelBase
{
    public const PHYSICAL_INTERVENTION_RECORD = 'physicalInterventionRecord';

    public const WITNESS = 'witness';

    public const NARRATIVE = 'narrative';

    public const CONFIRMED_DATETIME = 'confirmedDatetime';

    public const REJECTED_DATETIME = 'rejectedDatetime';

    protected $_resourceType = ResourceType::PHYSICAL_INTERVENTION_RECORD_WITNESS;

    /**
     * @param Query $query
     * @return PhysicalInterventionRecordWitness[] | Collection
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

        $query->setResourceType(ResourceType::PHYSICAL_INTERVENTION_RECORD_WITNESS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PhysicalInterventionRecordWitness
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PHYSICAL_INTERVENTION_RECORD_WITNESS, $id);
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

    /**
     * @return \DateTime
     */
    public function getRejectedDatetime()
    {
        return $this->getProperty('rejectedDatetime');
    }

    /**
     * @param \DateTime $rejectedDatetime
     */
    public function setRejectedDatetime(\DateTime $rejectedDatetime = null)
    {
        $this->setProperty('rejectedDatetime', $rejectedDatetime);
    }
}
