<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Content;

class NewsStory extends ModelBase
{
    const REFERENCE_DATETIME = 'referenceDatetime';

    const TITLE = 'title';

    const PROFILE_PICTURE = 'profilePicture';

    const IMAGE = 'image';

    const CATEGORY = 'category';

    const BODY = 'body';

    const TYPE_SPECIFIC_RATING_FACTOR = 'typeSpecificRatingFactor';

    const ORIGIN = 'origin';

    const IDENTIFIER = 'identifier';

    const TYPE = 'type';

    const DATA = 'data';

    const MAPPED_TO_NEWS_FEED = 'mappedToNewsFeed';

    const COMMENT_COUNT = 'commentCount';

    protected $_resourceType = ResourceType::NEWS_STORY;

    /**
     * @param \Arbor\Query\Query $query
     * @return NewsStory[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("NewsStory");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return NewsStory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::NEWS_STORY, $id);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDatetime()
    {
        return $this->getProperty("referenceDatetime");
    }

    /**
     * @param \DateTime $referenceDatetime
     */
    public function setReferenceDatetime(\DateTime $referenceDatetime = null)
    {
        $this->setProperty("referenceDatetime", $referenceDatetime);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty("title");
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty("title", $title);
    }

    /**
     * @return Content
     */
    public function getProfilePicture()
    {
        return $this->getProperty("profilePicture");
    }

    /**
     * @param Content $profilePicture
     */
    public function setProfilePicture(Content $profilePicture = null)
    {
        $this->setProperty("profilePicture", $profilePicture);
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->getProperty("image");
    }

    /**
     * @param string $image
     */
    public function setImage($image = null)
    {
        $this->setProperty("image", $image);
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->getProperty("category");
    }

    /**
     * @param string $category
     */
    public function setCategory($category = null)
    {
        $this->setProperty("category", $category);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->getProperty("body");
    }

    /**
     * @param string $body
     */
    public function setBody($body = null)
    {
        $this->setProperty("body", $body);
    }

    /**
     * @return float
     */
    public function getTypeSpecificRatingFactor()
    {
        return $this->getProperty("typeSpecificRatingFactor");
    }

    /**
     * @param float $typeSpecificRatingFactor
     */
    public function setTypeSpecificRatingFactor($typeSpecificRatingFactor = null)
    {
        $this->setProperty("typeSpecificRatingFactor", $typeSpecificRatingFactor);
    }

    /**
     * @return ModelBase
     */
    public function getOrigin()
    {
        return $this->getProperty("origin");
    }

    /**
     * @param ModelBase $origin
     */
    public function setOrigin(ModelBase $origin = null)
    {
        $this->setProperty("origin", $origin);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty("identifier");
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier($identifier = null)
    {
        $this->setProperty("identifier", $identifier);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty("type");
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->setProperty("type", $type);
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->getProperty("data");
    }

    /**
     * @param string $data
     */
    public function setData($data = null)
    {
        $this->setProperty("data", $data);
    }

    /**
     * @return bool
     */
    public function getMappedToNewsFeed()
    {
        return $this->getProperty("mappedToNewsFeed");
    }

    /**
     * @param bool $mappedToNewsFeed
     */
    public function setMappedToNewsFeed($mappedToNewsFeed = null)
    {
        $this->setProperty("mappedToNewsFeed", $mappedToNewsFeed);
    }

    /**
     * @return int
     */
    public function getCommentCount()
    {
        return $this->getProperty("commentCount");
    }

    /**
     * @param int $commentCount
     */
    public function setCommentCount($commentCount = null)
    {
        $this->setProperty("commentCount", $commentCount);
    }
}
