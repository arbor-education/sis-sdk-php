<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomGroupNotificationSetting extends ModelBase
{

    const CUSTOM_GROUP = 'customGroup';

    const TRIGGER_EVENT_TYPE = 'triggerEventType';

    const CREATE_PERSON_ALERT = 'createPersonAlert';

    const SEND_EMAIL = 'sendEmail';

    protected $_resourceType = ResourceType::CUSTOM_GROUP_NOTIFICATION_SETTING;

    /**
     * @param Query $query
     * @return CustomGroupNotificationSetting[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_GROUP_NOTIFICATION_SETTING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomGroupNotificationSetting
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_GROUP_NOTIFICATION_SETTING, $id);
    }

    /**
     * @return CustomGroup
     */
    public function getCustomGroup()
    {
        return $this->getProperty('customGroup');
    }

    /**
     * @param CustomGroup $customGroup
     */
    public function setCustomGroup(CustomGroup $customGroup = null)
    {
        $this->setProperty('customGroup', $customGroup);
    }

    /**
     * @return string
     */
    public function getTriggerEventType()
    {
        return $this->getProperty('triggerEventType');
    }

    /**
     * @param string $triggerEventType
     */
    public function setTriggerEventType($triggerEventType = null)
    {
        $this->setProperty('triggerEventType', $triggerEventType);
    }

    /**
     * @return bool
     */
    public function getCreatePersonAlert()
    {
        return $this->getProperty('createPersonAlert');
    }

    /**
     * @param bool $createPersonAlert
     */
    public function setCreatePersonAlert($createPersonAlert = null)
    {
        $this->setProperty('createPersonAlert', $createPersonAlert);
    }

    /**
     * @return bool
     */
    public function getSendEmail()
    {
        return $this->getProperty('sendEmail');
    }

    /**
     * @param bool $sendEmail
     */
    public function setSendEmail($sendEmail = null)
    {
        $this->setProperty('sendEmail', $sendEmail);
    }


}
