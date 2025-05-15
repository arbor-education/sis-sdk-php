<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ObservationTheme extends ModelBase
{
    public const OBSERVATION_TYPE = 'observationType';

    public const NAME = 'name';

    protected $_resourceType = ResourceType::OBSERVATION_THEME;

    /**
     * @param Query $query
     * @return ObservationTheme[] | Collection
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
     * @return \Arbor\Model\ObservationType
     */
    public function getObservationType()
    {
        return $this->getProperty('observationType');
    }

    /**
     * @param \Arbor\Model\ObservationType $observationType
     */
    public function setObservationType(\Arbor\Model\ObservationType $observationType = null)
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
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }
}
