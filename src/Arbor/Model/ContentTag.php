<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Content;

class ContentTag extends ModelBase
{

    const CONTENT = 'content';

    const TAGGED = 'tagged';

    const TAG_NAME = 'tagName';

    const TAG_VALUE = 'tagValue';

    protected $_resourceType = ResourceType::CONTENT_TAG;

    /**
     * @param \Arbor\Query\Query $query
     * @return ContentTag[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("ContentTag");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ContentTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CONTENT_TAG, $id);
    }

    /**
     * @return Content
     */
    public function getContent()
    {
        return $this->getProperty("content");
    }

    /**
     * @param Content $content
     */
    public function setContent(Content $content = null)
    {
        $this->setProperty("content", $content);
    }

    /**
     * @return ModelBase
     */
    public function getTagged()
    {
        return $this->getProperty("tagged");
    }

    /**
     * @param ModelBase $tagged
     */
    public function setTagged(ModelBase $tagged = null)
    {
        $this->setProperty("tagged", $tagged);
    }

    /**
     * @return string
     */
    public function getTagName()
    {
        return $this->getProperty("tagName");
    }

    /**
     * @param string $tagName
     */
    public function setTagName($tagName = null)
    {
        $this->setProperty("tagName", $tagName);
    }

    /**
     * @return string
     */
    public function getTagValue()
    {
        return $this->getProperty("tagValue");
    }

    /**
     * @param string $tagValue
     */
    public function setTagValue($tagValue = null)
    {
        $this->setProperty("tagValue", $tagValue);
    }


}
