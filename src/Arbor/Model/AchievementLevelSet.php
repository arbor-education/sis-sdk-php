<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AchievementLevelSet extends ModelBase
{
    public const CODE = 'code';

    public const NAME = 'name';

    public const ACHIEVED_THRESHOLD = 'achievedThreshold';

    public const TYPE = 'type';

    public const CURRICULUM = 'curriculum';

    protected $_resourceType = ResourceType::ACHIEVEMENT_LEVEL_SET;

    /**
     * @param Query $query
     * @return AchievementLevelSet[] | Collection
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

        $query->setResourceType(ResourceType::ACHIEVEMENT_LEVEL_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AchievementLevelSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACHIEVEMENT_LEVEL_SET, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
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

    /**
     * @return float
     */
    public function getAchievedThreshold()
    {
        return $this->getProperty('achievedThreshold');
    }

    /**
     * @param float $achievedThreshold
     */
    public function setAchievedThreshold(float $achievedThreshold = null)
    {
        $this->setProperty('achievedThreshold', $achievedThreshold);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return \Arbor\Model\Curriculum
     */
    public function getCurriculum()
    {
        return $this->getProperty('curriculum');
    }

    /**
     * @param \Arbor\Model\Curriculum $curriculum
     */
    public function setCurriculum(\Arbor\Model\Curriculum $curriculum = null)
    {
        $this->setProperty('curriculum', $curriculum);
    }
}
