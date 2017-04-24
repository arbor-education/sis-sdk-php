<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class ReportSubscription extends ModelBase
{
    const REPORT_IDENTIFIER = 'reportIdentifier';

    const SUBSCRIBER = 'subscriber';

    protected $_resourceType = ResourceType::REPORT_SUBSCRIPTION;

    /**
     * @param \Arbor\Query\Query $query
     * @return ReportSubscription[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ReportSubscription");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ReportSubscription
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::REPORT_SUBSCRIPTION, $id);
    }

    /**
     * @return string
     */
    public function getReportIdentifier()
    {
        return $this->getProperty("reportIdentifier");
    }

    /**
     * @param string $reportIdentifier
     */
    public function setReportIdentifier($reportIdentifier = null)
    {
        $this->setProperty("reportIdentifier", $reportIdentifier);
    }

    /**
     * @return ModelBase
     */
    public function getSubscriber()
    {
        return $this->getProperty("subscriber");
    }

    /**
     * @param ModelBase $subscriber
     */
    public function setSubscriber(ModelBase $subscriber = null)
    {
        $this->setProperty("subscriber", $subscriber);
    }
}
