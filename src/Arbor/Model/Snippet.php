<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Snippet extends ModelBase
{
    public const SNIPPET_NAME = 'snippetName';

    public const SNIPPET_TEXT = 'snippetText';

    public const CATEGORY = 'category';

    public const STAFF = 'staff';

    public const LINKED_TO_ENTITY = 'linkedToEntity';

    public const IS_SHARED = 'isShared';

    protected $_resourceType = ResourceType::SNIPPET;

    /**
     * @param Query $query
     * @return Snippet[] | Collection
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
    public function setSnippetName(string $snippetName = null)
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
    public function setSnippetText(string $snippetText = null)
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
    public function setCategory(string $category = null)
    {
        $this->setProperty('category', $category);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
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
    public function setLinkedToEntity(\ModelBase $linkedToEntity = null)
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
    public function setIsShared(bool $isShared = null)
    {
        $this->setProperty('isShared', $isShared);
    }
}
