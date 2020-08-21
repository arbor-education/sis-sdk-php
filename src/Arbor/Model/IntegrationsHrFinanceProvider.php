<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IntegrationsHrFinanceProvider extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const NAME = 'name';

    const CONFIGURATION = 'configuration';

    const ENABLED = 'enabled';

    protected $_resourceType = ResourceType::INTEGRATIONS_HR_FINANCE_PROVIDER;

    /**
     * @param Query $query
     * @return IntegrationsHrFinanceProvider[] | Collection
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

        $query->setResourceType(ResourceType::INTEGRATIONS_HR_FINANCE_PROVIDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationsHrFinanceProvider
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATIONS_HR_FINANCE_PROVIDER, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
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

    /**
     * @return string
     */
    public function getConfiguration()
    {
        return $this->getProperty('configuration');
    }

    /**
     * @param string $configuration
     */
    public function setConfiguration($configuration = null)
    {
        $this->setProperty('configuration', $configuration);
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
    public function setEnabled($enabled = null)
    {
        $this->setProperty('enabled', $enabled);
    }
}
