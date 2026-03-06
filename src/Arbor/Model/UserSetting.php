<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UserSetting extends ModelBase
{
    public const USER = 'user';

    public const SETTING_NAME = 'settingName';

    public const SETTING_VALUE = 'settingValue';

    protected $_resourceType = ResourceType::USER_SETTING;

    /**
     * @param Query $query
     * @return UserSetting[] | Collection
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

        $query->setResourceType(ResourceType::USER_SETTING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserSetting
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_SETTING, $id);
    }

    /**
     * @return \Arbor\Model\User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param \Arbor\Model\User $user
     */
    public function setUser(\Arbor\Model\User $user = null)
    {
        $this->setProperty('user', $user);
    }

    /**
     * @return string
     */
    public function getSettingName()
    {
        return $this->getProperty('settingName');
    }

    /**
     * @param string $settingName
     */
    public function setSettingName(string $settingName = null)
    {
        $this->setProperty('settingName', $settingName);
    }

    /**
     * @return string
     */
    public function getSettingValue()
    {
        return $this->getProperty('settingValue');
    }

    /**
     * @param string $settingValue
     */
    public function setSettingValue(string $settingValue = null)
    {
        $this->setProperty('settingValue', $settingValue);
    }
}
