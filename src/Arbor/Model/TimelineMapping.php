<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimelineMapping extends ModelBase
{

    const PERSON = 'person';

    const NEWS_STORY = 'newsStory';

    protected $_resourceType = ResourceType::TIMELINE_MAPPING;

    /**
     * @param Query $query
     * @return TimelineMapping[] | Collection
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

        $query->setResourceType(ResourceType::TIMELINE_MAPPING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimelineMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMELINE_MAPPING, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty('person', $person);
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


}
