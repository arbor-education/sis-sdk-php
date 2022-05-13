<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Content extends ModelBase
{
    const CONTENT_NAME = 'contentName';

    const DESCRIPTION = 'description';

    protected $_resourceType = ResourceType::CONTENT;

    /**
     * @param Query $query
     * @return Content[] | Collection
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

        $query->setResourceType(ResourceType::CONTENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Content
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CONTENT, $id);
    }

    /**
     * @return string
     */
    public function getContentName()
    {
        return $this->getProperty('contentName');
    }

    /**
     * @param string $contentName
     */
    public function setContentName($contentName = null)
    {
        $this->setProperty('contentName', $contentName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }
}
