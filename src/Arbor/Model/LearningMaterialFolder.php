<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class LearningMaterialFolder extends ModelBase
{
    const PARENT_LEARNING_MATERIAL_FOLDER = 'parentLearningMaterialFolder';

    const NAME = 'name';

    protected $_resourceType = ResourceType::LEARNING_MATERIAL_FOLDER;

    /**
     * @param Query $query
     * @return LearningMaterialFolder[] | Collection
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

        $query->setResourceType(ResourceType::LEARNING_MATERIAL_FOLDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LearningMaterialFolder
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LEARNING_MATERIAL_FOLDER, $id);
    }

    /**
     * @return LearningMaterialFolder
     */
    public function getParentLearningMaterialFolder()
    {
        return $this->getProperty('parentLearningMaterialFolder');
    }

    /**
     * @param LearningMaterialFolder $parentLearningMaterialFolder
     */
    public function setParentLearningMaterialFolder(LearningMaterialFolder $parentLearningMaterialFolder = null)
    {
        $this->setProperty('parentLearningMaterialFolder', $parentLearningMaterialFolder);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

}
