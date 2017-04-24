<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class BusinessRole extends ModelBase
{
    const SWF_CENSUS_IDENTIFIER = 'swfCensusIdentifier';

    const MANAGED_BY_CLIENT = 'managedByClient';

    protected $_resourceType = ResourceType::UK_DFE_BUSINESS_ROLE;

    /**
     * @param \Arbor\Query\Query $query
     * @return BusinessRole[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_BusinessRole");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BusinessRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_BUSINESS_ROLE, $id);
    }

    /**
     * @return string
     */
    public function getSwfCensusIdentifier()
    {
        return $this->getProperty("swfCensusIdentifier");
    }

    /**
     * @param string $swfCensusIdentifier
     */
    public function setSwfCensusIdentifier($swfCensusIdentifier = null)
    {
        $this->setProperty("swfCensusIdentifier", $swfCensusIdentifier);
    }

    /**
     * @return bool
     */
    public function getManagedByClient()
    {
        return $this->getProperty("managedByClient");
    }

    /**
     * @param bool $managedByClient
     */
    public function setManagedByClient($managedByClient = null)
    {
        $this->setProperty("managedByClient", $managedByClient);
    }
}
