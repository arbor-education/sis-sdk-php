<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class LearningMaterial extends ModelBase
{
    const LEARNING_MATERIAL_FOLDER = 'learningMaterialFolder';

    const TITLE = 'title';

    const SUMMARY = 'summary';

    const URL = 'url';

    const EDIT_URL = 'editUrl';

    const THIRD_PARTY_SITE = 'thirdPartySite';

    const AUTHORED_DATETIME = 'authoredDatetime';

    protected $_resourceType = ResourceType::LEARNING_MATERIAL;

    /**
     * @param Query $query
     * @return LearningMaterial[] | Collection
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

        $query->setResourceType(ResourceType::LEARNING_MATERIAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LearningMaterial
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LEARNING_MATERIAL, $id);
    }

    /**
     * @return LearningMaterialFolder
     */
    public function getLearningMaterialFolder()
    {
        return $this->getProperty('learningMaterialFolder');
    }

    /**
     * @param LearningMaterialFolder $learningMaterialFolder
     */
    public function setLearningMaterialFolder(LearningMaterialFolder $learningMaterialFolder = null)
    {
        $this->setProperty('learningMaterialFolder', $learningMaterialFolder);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty('summary');
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary = null)
    {
        $this->setProperty('summary', $summary);
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty('url');
    }

    /**
     * @param string $url
     */
    public function setUrl($url = null)
    {
        $this->setProperty('url', $url);
    }

    /**
     * @return string
     */
    public function getEditUrl()
    {
        return $this->getProperty('editUrl');
    }

    /**
     * @param string $editUrl
     */
    public function setEditUrl($editUrl = null)
    {
        $this->setProperty('editUrl', $editUrl);
    }

    /**
     * @return ThirdPartySite
     */
    public function getThirdPartySite()
    {
        return $this->getProperty('thirdPartySite');
    }

    /**
     * @param ThirdPartySite $thirdPartySite
     */
    public function setThirdPartySite(ThirdPartySite $thirdPartySite = null)
    {
        $this->setProperty('thirdPartySite', $thirdPartySite);
    }

    /**
     * @return \DateTime
     */
    public function getAuthoredDatetime()
    {
        return $this->getProperty('authoredDatetime');
    }

    /**
     * @param \DateTime $authoredDatetime
     */
    public function setAuthoredDatetime(\DateTime $authoredDatetime = null)
    {
        $this->setProperty('authoredDatetime', $authoredDatetime);
    }
}
