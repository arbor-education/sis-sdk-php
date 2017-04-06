<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Curriculum;

class AchievementLevelSet extends ModelBase
{

    const CODE = 'code';

    const NAME = 'name';

    const ACHIEVED_THRESHOLD = 'achievedThreshold';

    const TYPE = 'type';

    const CURRICULUM = 'curriculum';

    protected $_resourceType = ResourceType::ACHIEVEMENT_LEVEL_SET;

    /**
     * @param \Arbor\Query\Query $query
     * @return AchievementLevelSet[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AchievementLevelSet");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AchievementLevelSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ACHIEVEMENT_LEVEL_SET, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
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

    /**
     * @return float
     */
    public function getAchievedThreshold()
    {
        return $this->getProperty("achievedThreshold");
    }

    /**
     * @param float $achievedThreshold
     */
    public function setAchievedThreshold($achievedThreshold = null)
    {
        $this->setProperty("achievedThreshold", $achievedThreshold);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty("type");
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->setProperty("type", $type);
    }

    /**
     * @return Curriculum
     */
    public function getCurriculum()
    {
        return $this->getProperty("curriculum");
    }

    /**
     * @param Curriculum $curriculum
     */
    public function setCurriculum(Curriculum $curriculum = null)
    {
        $this->setProperty("curriculum", $curriculum);
    }


}
