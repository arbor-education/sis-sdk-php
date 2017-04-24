<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class WidgetType extends ModelBase
{
    const WIDGET_TYPE_IDENTIFIER = 'widgetTypeIdentifier';

    const WIDGET_TYPE_NAME = 'widgetTypeName';

    protected $_resourceType = ResourceType::WIDGET_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return WidgetType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("WidgetType");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return WidgetType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::WIDGET_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getWidgetTypeIdentifier()
    {
        return $this->getProperty("widgetTypeIdentifier");
    }

    /**
     * @param string $widgetTypeIdentifier
     */
    public function setWidgetTypeIdentifier($widgetTypeIdentifier = null)
    {
        $this->setProperty("widgetTypeIdentifier", $widgetTypeIdentifier);
    }

    /**
     * @return string
     */
    public function getWidgetTypeName()
    {
        return $this->getProperty("widgetTypeName");
    }

    /**
     * @param string $widgetTypeName
     */
    public function setWidgetTypeName($widgetTypeName = null)
    {
        $this->setProperty("widgetTypeName", $widgetTypeName);
    }
}
