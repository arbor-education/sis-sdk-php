<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class LearningMaterialFolder extends ModelBase
{
    public const PARENT_LEARNING_MATERIAL_FOLDER = 'parentLearningMaterialFolder';

    public const NAME = 'name';

    protected $_resourceType = ResourceType::LEARNING_MATERIAL_FOLDER;

    /**
     * @param Query $query
     * @return LearningMaterialFolder[] | Collection
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
     * @return \Arbor\Model\LearningMaterialFolder
     */
    public function getParentLearningMaterialFolder()
    {
        return $this->getProperty('parentLearningMaterialFolder');
    }

    /**
     * @param \Arbor\Model\LearningMaterialFolder $parentLearningMaterialFolder
     */
    public function setParentLearningMaterialFolder(\Arbor\Model\LearningMaterialFolder $parentLearningMaterialFolder = null)
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
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }
}
