<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviourCategoryBehaviour extends ModelBase
{
    public const BEHAVIOUR_CATEGORY = 'behaviourCategory';

    public const BEHAVIOUR = 'behaviour';

    public const VERSION = 'version';

    protected $_resourceType = ResourceType::BEHAVIOUR_CATEGORY_BEHAVIOUR;

    /**
     * @param Query $query
     * @return BehaviourCategoryBehaviour[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOUR_CATEGORY_BEHAVIOUR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviourCategoryBehaviour
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOUR_CATEGORY_BEHAVIOUR, $id);
    }

    /**
     * @return \Arbor\Model\BehaviourCategory
     */
    public function getBehaviourCategory()
    {
        return $this->getProperty('behaviourCategory');
    }

    /**
     * @param \Arbor\Model\BehaviourCategory $behaviourCategory
     */
    public function setBehaviourCategory(\Arbor\Model\BehaviourCategory $behaviourCategory = null)
    {
        $this->setProperty('behaviourCategory', $behaviourCategory);
    }

    /**
     * @return \Arbor\Model\Behaviour
     */
    public function getBehaviour()
    {
        return $this->getProperty('behaviour');
    }

    /**
     * @param \Arbor\Model\Behaviour $behaviour
     */
    public function setBehaviour(\Arbor\Model\Behaviour $behaviour = null)
    {
        $this->setProperty('behaviour', $behaviour);
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->getProperty('version');
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version = null)
    {
        $this->setProperty('version', $version);
    }
}
