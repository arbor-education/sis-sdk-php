<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IntegrationsHrFinanceTestRunResult extends ModelBase
{
    public const INTEGRATIONS_HR_FINANCE_TEST_RUN = 'integrationsHrFinanceTestRun';

    public const TYPE = 'type';

    public const ACTION = 'action';

    public const EXTERNAL_PERSON_IDENTIFIER = 'externalPersonIdentifier';

    public const EXTERNAL_CONTRACT_IDENTIFIER = 'externalContractIdentifier';

    public const PERSON_NAME = 'personName';

    public const ENTITY_OBJECT_TYPE_ID = 'entityObjectTypeId';

    public const ENTITY_OBJECT_ID = 'entityObjectId';

    public const OLD_DATA = 'oldData';

    public const NEW_DATA = 'newData';

    public const EXTERNAL_ENTITY_IDENTIFIER = 'externalEntityIdentifier';

    public const LABEL = 'label';

    protected $_resourceType = ResourceType::INTEGRATIONS_HR_FINANCE_TEST_RUN_RESULT;

    /**
     * @param Query $query
     * @return IntegrationsHrFinanceTestRunResult[] | Collection
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

        $query->setResourceType(ResourceType::INTEGRATIONS_HR_FINANCE_TEST_RUN_RESULT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationsHrFinanceTestRunResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATIONS_HR_FINANCE_TEST_RUN_RESULT, $id);
    }

    /**
     * @return \Arbor\Model\IntegrationsHrFinanceTestRun
     */
    public function getIntegrationsHrFinanceTestRun()
    {
        return $this->getProperty('integrationsHrFinanceTestRun');
    }

    /**
     * @param \Arbor\Model\IntegrationsHrFinanceTestRun $integrationsHrFinanceTestRun
     */
    public function setIntegrationsHrFinanceTestRun(\Arbor\Model\IntegrationsHrFinanceTestRun $integrationsHrFinanceTestRun = null)
    {
        $this->setProperty('integrationsHrFinanceTestRun', $integrationsHrFinanceTestRun);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->getProperty('action');
    }

    /**
     * @param string $action
     */
    public function setAction(string $action = null)
    {
        $this->setProperty('action', $action);
    }

    /**
     * @return string
     */
    public function getExternalPersonIdentifier()
    {
        return $this->getProperty('externalPersonIdentifier');
    }

    /**
     * @param string $externalPersonIdentifier
     */
    public function setExternalPersonIdentifier(string $externalPersonIdentifier = null)
    {
        $this->setProperty('externalPersonIdentifier', $externalPersonIdentifier);
    }

    /**
     * @return string
     */
    public function getExternalContractIdentifier()
    {
        return $this->getProperty('externalContractIdentifier');
    }

    /**
     * @param string $externalContractIdentifier
     */
    public function setExternalContractIdentifier(string $externalContractIdentifier = null)
    {
        $this->setProperty('externalContractIdentifier', $externalContractIdentifier);
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
        return $this->getProperty('personName');
    }

    /**
     * @param string $personName
     */
    public function setPersonName(string $personName = null)
    {
        $this->setProperty('personName', $personName);
    }

    /**
     * @return int
     */
    public function getEntityObjectTypeId()
    {
        return $this->getProperty('entityObjectTypeId');
    }

    /**
     * @param int $entityObjectTypeId
     */
    public function setEntityObjectTypeId(int $entityObjectTypeId = null)
    {
        $this->setProperty('entityObjectTypeId', $entityObjectTypeId);
    }

    /**
     * @return int
     */
    public function getEntityObjectId()
    {
        return $this->getProperty('entityObjectId');
    }

    /**
     * @param int $entityObjectId
     */
    public function setEntityObjectId(int $entityObjectId = null)
    {
        $this->setProperty('entityObjectId', $entityObjectId);
    }

    /**
     * @return string
     */
    public function getOldData()
    {
        return $this->getProperty('oldData');
    }

    /**
     * @param string $oldData
     */
    public function setOldData(string $oldData = null)
    {
        $this->setProperty('oldData', $oldData);
    }

    /**
     * @return string
     */
    public function getNewData()
    {
        return $this->getProperty('newData');
    }

    /**
     * @param string $newData
     */
    public function setNewData(string $newData = null)
    {
        $this->setProperty('newData', $newData);
    }

    /**
     * @return string
     */
    public function getExternalEntityIdentifier()
    {
        return $this->getProperty('externalEntityIdentifier');
    }

    /**
     * @param string $externalEntityIdentifier
     */
    public function setExternalEntityIdentifier(string $externalEntityIdentifier = null)
    {
        $this->setProperty('externalEntityIdentifier', $externalEntityIdentifier);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label = null)
    {
        $this->setProperty('label', $label);
    }
}
