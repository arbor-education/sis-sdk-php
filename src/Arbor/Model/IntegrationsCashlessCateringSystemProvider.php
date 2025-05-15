<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IntegrationsCashlessCateringSystemProvider extends ModelBase
{
    public const NAME = 'name';

    public const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    public const PROVIDER = 'provider';

    public const ENABLED = 'enabled';

    protected $_resourceType = ResourceType::INTEGRATIONS_CASHLESS_CATERING_SYSTEM_PROVIDER;

    /**
     * @param Query $query
     * @return IntegrationsCashlessCateringSystemProvider[] | Collection
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

        $query->setResourceType(ResourceType::INTEGRATIONS_CASHLESS_CATERING_SYSTEM_PROVIDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationsCashlessCateringSystemProvider
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATIONS_CASHLESS_CATERING_SYSTEM_PROVIDER, $id);
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

    /**
     * @return \Arbor\Model\CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty('customerAccountType');
    }

    /**
     * @param \Arbor\Model\CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(\Arbor\Model\CustomerAccountType $customerAccountType = null)
    {
        $this->setProperty('customerAccountType', $customerAccountType);
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

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->getProperty('enabled');
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled = null)
    {
        $this->setProperty('enabled', $enabled);
    }
}
