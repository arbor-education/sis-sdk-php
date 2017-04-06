<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\NewsStory;

class TimelineMapping extends ModelBase
{

    const PERSON = 'person';

    const NEWS_STORY = 'newsStory';

    protected $_resourceType = ResourceType::TIMELINE_MAPPING;

    /**
     * @param \Arbor\Query\Query $query
     * @return TimelineMapping[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("TimelineMapping");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TimelineMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::TIMELINE_MAPPING, $id);
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


}
