<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DataSource extends ModelBase
{
    public const DOMAIN = 'domain';

    public const PROVIDER = 'provider';

    protected $_resourceType = ResourceType::DATA_SOURCE;

    /**
     * @param Query $query
     * @return DataSource[] | Collection
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

        $query->setResourceType(ResourceType::DATA_SOURCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataSource
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_SOURCE, $id);
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->getProperty('domain');
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain = null)
    {
        $this->setProperty('domain', $domain);
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }

    /**
     * @param string $provider
     */
    public function setProvider(string $provider = null)
    {
        $this->setProperty('provider', $provider);
    }
}
