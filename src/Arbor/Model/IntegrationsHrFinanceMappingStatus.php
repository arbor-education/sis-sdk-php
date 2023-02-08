<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IntegrationsHrFinanceMappingStatus extends ModelBase
{

    const INTEGRATIONS_HR_FINANCE_PROVIDER = 'integrationsHrFinanceProvider';

    const ERRORS = 'errors';

    const STATUS = 'status';

    const MAPPING_TYPE = 'mappingType';

    protected $_resourceType = ResourceType::INTEGRATIONS_HR_FINANCE_MAPPING_STATUS;

    /**
     * @param Query $query
     * @return IntegrationsHrFinanceMappingStatus[] | Collection
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

        $query->setResourceType(ResourceType::INTEGRATIONS_HR_FINANCE_MAPPING_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationsHrFinanceMappingStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATIONS_HR_FINANCE_MAPPING_STATUS, $id);
    }

    /**
     * @return IntegrationsHrFinanceProvider
     */
    public function getIntegrationsHrFinanceProvider()
    {
        return $this->getProperty('integrationsHrFinanceProvider');
    }

    /**
     * @param IntegrationsHrFinanceProvider $integrationsHrFinanceProvider
     */
    public function setIntegrationsHrFinanceProvider(IntegrationsHrFinanceProvider $integrationsHrFinanceProvider = null)
    {
        $this->setProperty('integrationsHrFinanceProvider', $integrationsHrFinanceProvider);
    }

    /**
     * @return string
     */
    public function getErrors()
    {
        return $this->getProperty('errors');
    }

    /**
     * @param string $errors
     */
    public function setErrors($errors = null)
    {
        $this->setProperty('errors', $errors);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return string
     */
    public function getMappingType()
    {
        return $this->getProperty('mappingType');
    }

    /**
     * @param string $mappingType
     */
    public function setMappingType($mappingType = null)
    {
        $this->setProperty('mappingType', $mappingType);
    }


}
