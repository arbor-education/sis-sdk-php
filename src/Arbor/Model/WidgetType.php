<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class WidgetType extends ModelBase
{
    const WIDGET_TYPE_IDENTIFIER = 'widgetTypeIdentifier';

    const WIDGET_TYPE_NAME = 'widgetTypeName';

    protected $_resourceType = ResourceType::WIDGET_TYPE;

    /**
     * @param Query $query
     * @return WidgetType[] | Collection
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

        $query->setResourceType(ResourceType::WIDGET_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return WidgetType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::WIDGET_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getWidgetTypeIdentifier()
    {
        return $this->getProperty('widgetTypeIdentifier');
    }

    /**
     * @param string $widgetTypeIdentifier
     */
    public function setWidgetTypeIdentifier($widgetTypeIdentifier = null)
    {
        $this->setProperty('widgetTypeIdentifier', $widgetTypeIdentifier);
    }

    /**
     * @return string
     */
    public function getWidgetTypeName()
    {
        return $this->getProperty('widgetTypeName');
    }

    /**
     * @param string $widgetTypeName
     */
    public function setWidgetTypeName($widgetTypeName = null)
    {
        $this->setProperty('widgetTypeName', $widgetTypeName);
    }
}
