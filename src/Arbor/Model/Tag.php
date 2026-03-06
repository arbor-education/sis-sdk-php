<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Tag extends ModelBase
{
    public const TAG_NAME = 'tagName';

    public const TAG_IDENTIFIER = 'tagIdentifier';

    protected $_resourceType = ResourceType::TAG;

    /**
     * @param Query $query
     * @return Tag[] | Collection
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

        $query->setResourceType(ResourceType::TAG);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Tag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TAG, $id);
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
    public function getTagIdentifier()
    {
        return $this->getProperty('tagIdentifier');
    }

    /**
     * @param string $tagIdentifier
     */
    public function setTagIdentifier(string $tagIdentifier = null)
    {
        $this->setProperty('tagIdentifier', $tagIdentifier);
    }
}
