<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Tag extends ModelBase
{

    const TAG_NAME = 'tagName';

    const TAG_IDENTIFIER = 'tagIdentifier';

    protected $_resourceType = ResourceType::TAG;

    /**
     * @param \Arbor\Query\Query $query
     * @return Tag[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Tag");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Tag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::TAG, $id);
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
    public function getTagIdentifier()
    {
        return $this->getProperty("tagIdentifier");
    }

    /**
     * @param string $tagIdentifier
     */
    public function setTagIdentifier($tagIdentifier = null)
    {
        $this->setProperty("tagIdentifier", $tagIdentifier);
    }


}
