<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class NewsStoryComment extends ModelBase
{
    const NEWS_STORY = 'newsStory';

    const TEXT = 'text';

    protected $_resourceType = ResourceType::NEWS_STORY_COMMENT;

    /**
     * @param Query $query
     * @return NewsStoryComment[] | Collection
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

        $query->setResourceType(ResourceType::NEWS_STORY_COMMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return NewsStoryComment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NEWS_STORY_COMMENT, $id);
    }

    /**
     * @return NewsStory
     */
    public function getNewsStory()
    {
        return $this->getProperty('newsStory');
    }

    /**
     * @param NewsStory $newsStory
     */
    public function setNewsStory(NewsStory $newsStory = null)
    {
        $this->setProperty('newsStory', $newsStory);
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->getProperty('text');
    }

    /**
     * @param string $text
     */
    public function setText($text = null)
    {
        $this->setProperty('text', $text);
    }
}
