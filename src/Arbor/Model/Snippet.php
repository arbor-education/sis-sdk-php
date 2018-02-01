<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Snippet extends ModelBase
{

    const SNIPPET_NAME = 'snippetName';

    const SNIPPET_TEXT = 'snippetText';

    const CATEGORY = 'category';

    const STAFF = 'staff';

    const LINKED_TO_ENTITY = 'linkedToEntity';

    const IS_SHARED = 'isShared';

    protected $_resourceType = ResourceType::SNIPPET;

    /**
     * @param Query $query
     * @return Snippet[] | Collection
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

        $query->setResourceType(ResourceType::SNIPPET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Snippet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SNIPPET, $id);
    }

    /**
     * @return string
     */
    public function getSnippetName()
    {
        return $this->getProperty('snippetName');
    }

    /**
     * @param string $snippetName
     */
    public function setSnippetName($snippetName = null)
    {
        $this->setProperty('snippetName', $snippetName);
    }

    /**
     * @return string
     */
    public function getSnippetText()
    {
        return $this->getProperty('snippetText');
    }

    /**
     * @param string $snippetText
     */
    public function setSnippetText($snippetText = null)
    {
        $this->setProperty('snippetText', $snippetText);
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }

    /**
     * @param string $category
     */
    public function setCategory($category = null)
    {
        $this->setProperty('category', $category);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return ModelBase
     */
    public function getLinkedToEntity()
    {
        return $this->getProperty('linkedToEntity');
    }

    /**
     * @param ModelBase $linkedToEntity
     */
    public function setLinkedToEntity(ModelBase $linkedToEntity = null)
    {
        $this->setProperty('linkedToEntity', $linkedToEntity);
    }

    /**
     * @return bool
     */
    public function getIsShared()
    {
        return $this->getProperty('isShared');
    }

    /**
     * @param bool $isShared
     */
    public function setIsShared($isShared = null)
    {
        $this->setProperty('isShared', $isShared);
    }


}
