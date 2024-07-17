<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ContentTag extends ModelBase
{
    public const CONTENT = 'content';

    public const TAGGED = 'tagged';

    public const TAG_NAME = 'tagName';

    public const TAG_VALUE = 'tagValue';

    protected $_resourceType = ResourceType::CONTENT_TAG;

    /**
     * @param Query $query
     * @return ContentTag[] | Collection
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

        $query->setResourceType(ResourceType::CONTENT_TAG);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ContentTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CONTENT_TAG, $id);
    }

    /**
     * @return \Arbor\Model\Content
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param \Arbor\Model\Content $content
     */
    public function setContent(\Arbor\Model\Content $content = null)
    {
        $this->setProperty('content', $content);
    }

    /**
     * @return ModelBase
     */
    public function getTagged()
    {
        return $this->getProperty('tagged');
    }

    /**
     * @param ModelBase $tagged
     */
    public function setTagged(\ModelBase $tagged = null)
    {
        $this->setProperty('tagged', $tagged);
    }

    /**
     * @return string
     */
    public function getTagName()
    {
        return $this->getProperty('tagName');
    }

    /**
     * @param string $tagName
     */
    public function setTagName(string $tagName = null)
    {
        $this->setProperty('tagName', $tagName);
    }

    /**
     * @return string
     */
    public function getTagValue()
    {
        return $this->getProperty('tagValue');
    }

    /**
     * @param string $tagValue
     */
    public function setTagValue(string $tagValue = null)
    {
        $this->setProperty('tagValue', $tagValue);
    }
}
