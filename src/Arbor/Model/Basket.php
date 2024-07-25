<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Basket extends ModelBase
{
    public const GUARDIAN = 'guardian';

    protected $_resourceType = ResourceType::BASKET;

    /**
     * @param Query $query
     * @return Basket[] | Collection
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

        $query->setResourceType(ResourceType::BASKET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Basket
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BASKET, $id);
    }

    /**
     * @return \Arbor\Model\Guardian
     */
    public function getGuardian()
    {
        return $this->getProperty('guardian');
    }

    /**
     * @param \Arbor\Model\Guardian $guardian
     */
    public function setGuardian(\Arbor\Model\Guardian $guardian = null)
    {
        $this->setProperty('guardian', $guardian);
    }
}
