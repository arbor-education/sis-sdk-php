<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ReportSubscription extends ModelBase
{
    const REPORT_IDENTIFIER = 'reportIdentifier';

    const SUBSCRIBER = 'subscriber';

    protected $_resourceType = ResourceType::REPORT_SUBSCRIPTION;

    /**
     * @param Query $query
     * @return ReportSubscription[] | Collection
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
    public function setReportIdentifier($reportIdentifier = null)
    {
        $this->setProperty('reportIdentifier', $reportIdentifier);
    }

    /**
     * @return Staff
     */
    public function getSubscriber()
    {
        return $this->getProperty('subscriber');
    }

    /**
     * @param Staff $subscriber
     */
    public function setSubscriber(Staff $subscriber = null)
    {
        $this->setProperty('subscriber', $subscriber);
    }
}
