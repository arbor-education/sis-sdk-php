<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\NewsStory;

class NewsFeedMapping extends ModelBase
{

    const PERSON = 'person';

    const NEWS_STORY = 'newsStory';

    const RANK = 'rank';

    const RANK_VALID_UNTIL = 'rankValidUntil';

    protected $_resourceType = ResourceType::NEWS_FEED_MAPPING;

    /**
     * @param \Arbor\Query\Query $query
     * @return NewsFeedMapping[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("NewsFeedMapping");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return NewsFeedMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::NEWS_FEED_MAPPING, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty("person", $person);
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
     * @return float
     */
    public function getRank()
    {
        return $this->getProperty("rank");
    }

    /**
     * @param float $rank
     */
    public function setRank($rank = null)
    {
        $this->setProperty("rank", $rank);
    }

    /**
     * @return \DateTime
     */
    public function getRankValidUntil()
    {
        return $this->getProperty("rankValidUntil");
    }

    /**
     * @param \DateTime $rankValidUntil
     */
    public function setRankValidUntil(\DateTime $rankValidUntil = null)
    {
        $this->setProperty("rankValidUntil", $rankValidUntil);
    }


}
