<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class LearningMaterialFolder extends ModelBase
{
    const PARENT_LEARNING_MATERIAL_FOLDER = 'parentLearningMaterialFolder';

    const NAME = 'name';

    protected $_resourceType = ResourceType::LEARNING_MATERIAL_FOLDER;

    /**
     * @param \Arbor\Query\Query $query
     * @return LearningMaterialFolder[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("LearningMaterialFolder");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return LearningMaterialFolder
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::LEARNING_MATERIAL_FOLDER, $id);
    }

    /**
     * @return LearningMaterialFolder
     */
    public function getParentLearningMaterialFolder()
    {
        return $this->getProperty("parentLearningMaterialFolder");
    }

    /**
     * @param LearningMaterialFolder $parentLearningMaterialFolder
     */
    public function setParentLearningMaterialFolder(LearningMaterialFolder $parentLearningMaterialFolder = null)
    {
        $this->setProperty("parentLearningMaterialFolder", $parentLearningMaterialFolder);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }
}
