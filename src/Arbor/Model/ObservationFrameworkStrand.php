<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ObservationFrameworkStrand extends ModelBase
{
    public const OBSERVATION_FRAMEWORK = 'observationFramework';

    public const OBSERVATION_STRAND = 'observationStrand';

    protected $_resourceType = ResourceType::OBSERVATION_FRAMEWORK_STRAND;

    /**
     * @param Query $query
     * @return ObservationFrameworkStrand[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION_FRAMEWORK_STRAND);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ObservationFrameworkStrand
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION_FRAMEWORK_STRAND, $id);
    }

    /**
     * @return \Arbor\Model\ObservationFramework
     */
    public function getObservationFramework()
    {
        return $this->getProperty('observationFramework');
    }

    /**
     * @param \Arbor\Model\ObservationFramework $observationFramework
     */
    public function setObservationFramework(\Arbor\Model\ObservationFramework $observationFramework = null)
    {
        $this->setProperty('observationFramework', $observationFramework);
    }

    /**
     * @return \Arbor\Model\ObservationStrand
     */
    public function getObservationStrand()
    {
        return $this->getProperty('observationStrand');
    }

    /**
     * @param \Arbor\Model\ObservationStrand $observationStrand
     */
    public function setObservationStrand(\Arbor\Model\ObservationStrand $observationStrand = null)
    {
        $this->setProperty('observationStrand', $observationStrand);
    }
}
