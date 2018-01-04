<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ApplicationSetting extends ModelBase
{

    const SETTING_NAME = 'settingName';

    const SETTING_VALUE = 'settingValue';

    protected $_resourceType = ResourceType::APPLICATION_SETTING;

    /**
     * @param Query $query
     * @return ApplicationSetting[] | Collection
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
    public function setSettingName($settingName = null)
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
    public function setSettingValue($settingValue = null)
    {
        $this->setProperty('settingValue', $settingValue);
    }


}
