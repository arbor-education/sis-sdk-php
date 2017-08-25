<?php

namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class BusinessRole extends ModelBase
{
    const SWF_CENSUS_IDENTIFIER = 'swfCensusIdentifier';

    const MANAGED_BY_CLIENT = 'managedByClient';

    protected $_resourceType = ResourceType::UK_DFE_BUSINESS_ROLE;

    /**
     * @param Query $query
     * @return BusinessRole[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_BUSINESS_ROLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BusinessRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_BUSINESS_ROLE, $id);
    }

    /**
     * @return string
     */
    public function getSwfCensusIdentifier()
    {
        return $this->getProperty('swfCensusIdentifier');
    }

    /**
     * @param string $swfCensusIdentifier
     */
    public function setSwfCensusIdentifier($swfCensusIdentifier = null)
    {
        $this->setProperty('swfCensusIdentifier', $swfCensusIdentifier);
    }

    /**
     * @return bool
     */
    public function getManagedByClient()
    {
        return $this->getProperty('managedByClient');
    }

    /**
     * @param bool $managedByClient
     */
    public function setManagedByClient($managedByClient = null)
    {
        $this->setProperty('managedByClient', $managedByClient);
    }
}
