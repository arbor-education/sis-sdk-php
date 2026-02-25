<?php

namespace Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\ResourceType;

class UrlAttachment extends ModelBase
{
    public const CONTENT = 'content';

    public const URL = 'url';

    protected $_resourceType = ResourceType::URL_ATTACHMENT;

    /**
     * @param Query $query
     * @return UrlAttachment[] | Collection
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

        $query->setResourceType(ResourceType::URL_ATTACHMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UrlAttachment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::URL_ATTACHMENT, $id);
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
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty('url');
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url = null)
    {
        $this->setProperty('url', $url);
    }
}
