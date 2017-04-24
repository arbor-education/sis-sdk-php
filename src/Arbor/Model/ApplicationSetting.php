<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class ApplicationSetting extends ModelBase
{
    const SETTING_NAME = 'settingName';

    const SETTING_VALUE = 'settingValue';

    protected $_resourceType = ResourceType::APPLICATION_SETTING;

    /**
     * @param \Arbor\Query\Query $query
     * @return ApplicationSetting[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ApplicationSetting");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ApplicationSetting
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::APPLICATION_SETTING, $id);
    }

    /**
     * @return string
     */
    public function getSettingName()
    {
        return $this->getProperty("settingName");
    }

    /**
     * @param string $settingName
     */
    public function setSettingName($settingName = null)
    {
        $this->setProperty("settingName", $settingName);
    }

    /**
     * @return string
     */
    public function getSettingValue()
    {
        return $this->getProperty("settingValue");
    }

    /**
     * @param string $settingValue
     */
    public function setSettingValue($settingValue = null)
    {
        $this->setProperty("settingValue", $settingValue);
    }
}
