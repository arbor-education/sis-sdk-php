<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Basket extends \ModelBase
{
    public const GUARDIAN = 'guardian';

    protected $_resourceType = ResourceType::BASKET;

    /**
     * @param Query $query
     * @return Basket[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
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
     * @return Guardian
     */
    public function getGuardian()
    {
        return $this->getProperty('guardian');
    }

    /**
     * @param Guardian $guardian
     */
    public function setGuardian(\Guardian $guardian = null)
    {
        $this->setProperty('guardian', $guardian);
    }
}
