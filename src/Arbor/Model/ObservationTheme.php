<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ObservationTheme extends ModelBase
{
    const OBSERVATION_TYPE = 'observationType';

    const NAME = 'name';

    protected $_resourceType = ResourceType::OBSERVATION_THEME;

    /**
     * @param Query $query
     * @return ObservationTheme[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION_THEME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ObservationTheme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION_THEME, $id);
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
