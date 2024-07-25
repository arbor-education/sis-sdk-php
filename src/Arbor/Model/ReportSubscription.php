<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ReportSubscription extends ModelBase
{
    public const REPORT_IDENTIFIER = 'reportIdentifier';

    public const SUBSCRIBER = 'subscriber';

    protected $_resourceType = ResourceType::REPORT_SUBSCRIPTION;

    /**
     * @param Query $query
     * @return ReportSubscription[] | Collection
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

        $query->setResourceType(ResourceType::REPORT_SUBSCRIPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ReportSubscription
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REPORT_SUBSCRIPTION, $id);
    }

    /**
     * @return string
     */
    public function getReportIdentifier()
    {
        return $this->getProperty('reportIdentifier');
    }

    /**
     * @param string $reportIdentifier
     */
    public function setReportIdentifier(string $reportIdentifier = null)
    {
        $this->setProperty('reportIdentifier', $reportIdentifier);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getSubscriber()
    {
        return $this->getProperty('subscriber');
    }

    /**
     * @param \Arbor\Model\Staff $subscriber
     */
    public function setSubscriber(\Arbor\Model\Staff $subscriber = null)
    {
        $this->setProperty('subscriber', $subscriber);
    }
}
