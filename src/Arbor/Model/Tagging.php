<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Tag;

class Tagging extends ModelBase
{
    const TAG = 'tag';

    const TAGGED_OBJECT = 'taggedObject';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const LINK1 = 'link1';

    const LINK2 = 'link2';

    protected $_resourceType = ResourceType::TAGGING;

    /**
     * @param \Arbor\Query\Query $query
     * @return Tagging[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Tagging");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Tagging
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TAGGING, $id);
    }

    /**
     * @return Tag
     */
    public function getTag()
    {
        return $this->getProperty("tag");
    }

    /**
     * @param Tag $tag
     */
    public function setTag(Tag $tag = null)
    {
        $this->setProperty("tag", $tag);
    }

    /**
     * @return ModelBase
     */
    public function getTaggedObject()
    {
        return $this->getProperty("taggedObject");
    }

    /**
     * @param ModelBase $taggedObject
     */
    public function setTaggedObject(ModelBase $taggedObject = null)
    {
        $this->setProperty("taggedObject", $taggedObject);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return ModelBase
     */
    public function getLink1()
    {
        return $this->getProperty("link1");
    }

    /**
     * @param ModelBase $link1
     */
    public function setLink1(ModelBase $link1 = null)
    {
        $this->setProperty("link1", $link1);
    }

    /**
     * @return ModelBase
     */
    public function getLink2()
    {
        return $this->getProperty("link2");
    }

    /**
     * @param ModelBase $link2
     */
    public function setLink2(ModelBase $link2 = null)
    {
        $this->setProperty("link2", $link2);
    }
}
