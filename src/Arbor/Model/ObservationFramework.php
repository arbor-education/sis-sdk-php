<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ObservationFramework extends ModelBase
{
    const OBSERVATION_TYPE = 'observationType';

    const NAME = 'name';

    protected $_resourceType = ResourceType::OBSERVATION_FRAMEWORK;

    /**
     * @param Query $query
     * @return ObservationFramework[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION_FRAMEWORK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ObservationFramework
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION_FRAMEWORK, $id);
    }

    /**
     * @return ObservationType
     */
    public function getObservationType()
    {
        return $this->getProperty('observationType');
    }

    /**
     * @param ObservationType $observationType
     */
    public function setObservationType(ObservationType $observationType = null)
    {
        $this->setProperty('observationType', $observationType);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }
}
