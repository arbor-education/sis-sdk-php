<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TrainingProvider extends ModelBase
{
    public const NAME = 'name';

    public const IDENTIFIER = 'identifier';

    protected $_resourceType = ResourceType::TRAINING_PROVIDER;

    /**
     * @param Query $query
     * @return TrainingProvider[] | Collection
     * @throws Exception
     */
    public static function query(?\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::TRAINING_PROVIDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TrainingProvider
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRAINING_PROVIDER, $id);
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
    public function setName(?string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty('identifier');
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(?string $identifier = null)
    {
        $this->setProperty('identifier', $identifier);
    }
}
