<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\NewsStory;

class NewsStoryComment extends ModelBase
{

    const NEWS_STORY = 'newsStory';

    const TEXT = 'text';

    protected $_resourceType = ResourceType::NEWS_STORY_COMMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return NewsStoryComment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("NewsStoryComment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return NewsStoryComment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::NEWS_STORY_COMMENT, $id);
    }

    /**
     * @return NewsStory
     */
    public function getNewsStory()
    {
        return $this->getProperty("newsStory");
    }

    /**
     * @param NewsStory $newsStory
     */
    public function setNewsStory(NewsStory $newsStory = null)
    {
        $this->setProperty("newsStory", $newsStory);
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->getProperty("text");
    }

    /**
     * @param string $text
     */
    public function setText($text = null)
    {
        $this->setProperty("text", $text);
    }


}
