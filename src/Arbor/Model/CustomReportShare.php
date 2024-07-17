<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomReportShare extends ModelBase
{
    public const CUSTOM_REPORT = 'customReport';

    public const SHARED_WITH = 'sharedWith';

    public const PERMISSION_LEVEL = 'permissionLevel';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SHARE;

    /**
     * @param Query $query
     * @return CustomReportShare[] | Collection
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
     * @return \Arbor\Model\CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param \Arbor\Model\CustomReport $customReport
     */
    public function setCustomReport(\Arbor\Model\CustomReport $customReport = null)
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
    public function setSharedWith(\ModelBase $sharedWith = null)
    {
        $this->setProperty('sharedWith', $sharedWith);
    }

    /**
     * @return string
     */
    public function getPermissionLevel()
    {
        return $this->getProperty('permissionLevel');
    }

    /**
     * @param string $permissionLevel
     */
    public function setPermissionLevel(string $permissionLevel = null)
    {
        $this->setProperty('permissionLevel', $permissionLevel);
    }
}
