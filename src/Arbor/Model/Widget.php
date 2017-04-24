<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\WidgetType;

class Widget extends ModelBase
{
    const ZONE_IDENTIFIER = 'zoneIdentifier';

    const OBJECT = 'object';

    const WIDGET_TYPE = 'widgetType';

    const SETTINGS = 'settings';

    const POSITION_COLUMN = 'positionColumn';

    const POSITION_ROW = 'positionRow';

    protected $_resourceType = ResourceType::WIDGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return Widget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Widget");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Widget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::WIDGET, $id);
    }

    /**
     * @return string
     */
    public function getZoneIdentifier()
    {
        return $this->getProperty("zoneIdentifier");
    }

    /**
     * @param string $zoneIdentifier
     */
    public function setZoneIdentifier($zoneIdentifier = null)
    {
        $this->setProperty("zoneIdentifier", $zoneIdentifier);
    }

    /**
     * @return ModelBase
     */
    public function getObject()
    {
        return $this->getProperty("object");
    }

    /**
     * @param ModelBase $object
     */
    public function setObject(ModelBase $object = null)
    {
        $this->setProperty("object", $object);
    }

    /**
     * @return WidgetType
     */
    public function getWidgetType()
    {
        return $this->getProperty("widgetType");
    }

    /**
     * @param WidgetType $widgetType
     */
    public function setWidgetType(WidgetType $widgetType = null)
    {
        $this->setProperty("widgetType", $widgetType);
    }

    /**
     * @return string
     */
    public function getSettings()
    {
        return $this->getProperty("settings");
    }

    /**
     * @param string $settings
     */
    public function setSettings($settings = null)
    {
        $this->setProperty("settings", $settings);
    }

    /**
     * @return int
     */
    public function getPositionColumn()
    {
        return $this->getProperty("positionColumn");
    }

    /**
     * @param int $positionColumn
     */
    public function setPositionColumn($positionColumn = null)
    {
        $this->setProperty("positionColumn", $positionColumn);
    }

    /**
     * @return int
     */
    public function getPositionRow()
    {
        return $this->getProperty("positionRow");
    }

    /**
     * @param int $positionRow
     */
    public function setPositionRow($positionRow = null)
    {
        $this->setProperty("positionRow", $positionRow);
    }
}
