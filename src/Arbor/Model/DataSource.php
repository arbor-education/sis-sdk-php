<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class DataSource extends ModelBase
{
    const DOMAIN = 'domain';

    const PROVIDER = 'provider';

    protected $_resourceType = ResourceType::DATA_SOURCE;

    /**
     * @param \Arbor\Query\Query $query
     * @return DataSource[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("DataSource");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DataSource
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::DATA_SOURCE, $id);
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->getProperty("domain");
    }

    /**
     * @param string $domain
     */
    public function setDomain($domain = null)
    {
        $this->setProperty("domain", $domain);
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->getProperty("provider");
    }

    /**
     * @param string $provider
     */
    public function setProvider($provider = null)
    {
        $this->setProperty("provider", $provider);
    }
}
