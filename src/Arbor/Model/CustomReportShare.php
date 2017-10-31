<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportShare extends ModelBase
{

    const CUSTOM_REPORT = 'customReport';

    const SHARED_WITH = 'sharedWith';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SHARE;

    /**
     * @param Query $query
     * @return CustomReportShare[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_SHARE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportShare
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_SHARE, $id);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return ModelBase
     */
    public function getSharedWith()
    {
        return $this->getProperty('sharedWith');
    }

    /**
     * @param ModelBase $sharedWith
     */
    public function setSharedWith(ModelBase $sharedWith = null)
    {
        $this->setProperty('sharedWith', $sharedWith);
    }


}
