<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomGroupNotificationRecipient extends ModelBase
{
    public const CUSTOM_GROUP_NOTIFICATION_SETTING = 'customGroupNotificationSetting';

    public const STAFF = 'staff';

    public const STAFF_TYPE = 'staffType';

    protected $_resourceType = ResourceType::CUSTOM_GROUP_NOTIFICATION_RECIPIENT;

    /**
     * @param Query $query
     * @return CustomGroupNotificationRecipient[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_GROUP_NOTIFICATION_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomGroupNotificationRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_GROUP_NOTIFICATION_RECIPIENT, $id);
    }

    /**
     * @return \Arbor\Model\CustomGroupNotificationSetting
     */
    public function getCustomGroupNotificationSetting()
    {
        return $this->getProperty('customGroupNotificationSetting');
    }

    /**
     * @param \Arbor\Model\CustomGroupNotificationSetting
     * $customGroupNotificationSetting
     */
    public function setCustomGroupNotificationSetting(\Arbor\Model\CustomGroupNotificationSetting $customGroupNotificationSetting = null)
    {
        $this->setProperty('customGroupNotificationSetting', $customGroupNotificationSetting);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return string
     */
    public function getStaffType()
    {
        return $this->getProperty('staffType');
    }

    /**
     * @param string $staffType
     */
    public function setStaffType(string $staffType = null)
    {
        $this->setProperty('staffType', $staffType);
    }
}
