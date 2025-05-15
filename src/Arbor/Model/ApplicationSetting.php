<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ApplicationSetting extends ModelBase
{
    public const SETTING_NAME = 'settingName';

    public const SETTING_VALUE = 'settingValue';

    public const SETTING_CLASS = 'settingClass';

    protected $_resourceType = ResourceType::APPLICATION_SETTING;

    /**
     * @param Query $query
     * @return ApplicationSetting[] | Collection
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

        $query->setResourceType(ResourceType::APPLICATION_SETTING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ApplicationSetting
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::APPLICATION_SETTING, $id);
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

    /**
     * @return string
     */
    public function getSettingClass()
    {
        return $this->getProperty('settingClass');
    }

    /**
     * @param string $settingClass
     */
    public function setSettingClass(string $settingClass = null)
    {
        $this->setProperty('settingClass', $settingClass);
    }
}
