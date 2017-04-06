<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class LayoutObjectType extends ModelBase
{

    const LAYOUT_OBJECT_TYPE_NAME = 'layoutObjectTypeName';

    const WIDTH = 'width';

    const HEIGHT = 'height';

    protected $_resourceType = ResourceType::LAYOUT_OBJECT_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return LayoutObjectType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("LayoutObjectType");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return LayoutObjectType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::LAYOUT_OBJECT_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getLayoutObjectTypeName()
    {
        return $this->getProperty("layoutObjectTypeName");
    }

    /**
     * @param string $layoutObjectTypeName
     */
    public function setLayoutObjectTypeName($layoutObjectTypeName = null)
    {
        $this->setProperty("layoutObjectTypeName", $layoutObjectTypeName);
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->getProperty("width");
    }

    /**
     * @param int $width
     */
    public function setWidth($width = null)
    {
        $this->setProperty("width", $width);
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->getProperty("height");
    }

    /**
     * @param int $height
     */
    public function setHeight($height = null)
    {
        $this->setProperty("height", $height);
    }


}
