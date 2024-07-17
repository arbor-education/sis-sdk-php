<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IntegrationsHrFinanceTestRun extends ModelBase
{
    public const INTEGRATIONS_HR_FINANCE_PROVIDER = 'integrationsHrFinanceProvider';

    public const REQUESTED_DATETIME = 'requestedDatetime';

    public const COMPLETED_DATETIME = 'completedDatetime';

    protected $_resourceType = ResourceType::INTEGRATIONS_HR_FINANCE_TEST_RUN;

    /**
     * @param Query $query
     * @return IntegrationsHrFinanceTestRun[] | Collection
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

        $query->setResourceType(ResourceType::INTEGRATIONS_HR_FINANCE_TEST_RUN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationsHrFinanceTestRun
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATIONS_HR_FINANCE_TEST_RUN, $id);
    }

    /**
     * @return \Arbor\Model\IntegrationsHrFinanceProvider
     */
    public function getIntegrationsHrFinanceProvider()
    {
        return $this->getProperty('integrationsHrFinanceProvider');
    }

    /**
     * @param \Arbor\Model\IntegrationsHrFinanceProvider $integrationsHrFinanceProvider
     */
    public function setIntegrationsHrFinanceProvider(\Arbor\Model\IntegrationsHrFinanceProvider $integrationsHrFinanceProvider = null)
    {
        $this->setProperty('integrationsHrFinanceProvider', $integrationsHrFinanceProvider);
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDatetime()
    {
        return $this->getProperty('requestedDatetime');
    }

    /**
     * @param \DateTime $requestedDatetime
     */
    public function setRequestedDatetime(\DateTime $requestedDatetime = null)
    {
        $this->setProperty('requestedDatetime', $requestedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }
}
