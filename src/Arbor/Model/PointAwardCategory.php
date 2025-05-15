<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PointAwardCategory extends ModelBase
{
    public const DESCRIPTION = 'description';

    public const POINT_AWARD_SCALE = 'pointAwardScale';

    public const DEFAULT_POINTS = 'defaultPoints';

    protected $_resourceType = ResourceType::POINT_AWARD_CATEGORY;

    /**
     * @param Query $query
     * @return PointAwardCategory[] | Collection
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

        $query->setResourceType(ResourceType::POINT_AWARD_CATEGORY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PointAwardCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::POINT_AWARD_CATEGORY, $id);
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
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return \Arbor\Model\PointAwardScale
     */
    public function getPointAwardScale()
    {
        return $this->getProperty('pointAwardScale');
    }

    /**
     * @param \Arbor\Model\PointAwardScale $pointAwardScale
     */
    public function setPointAwardScale(\Arbor\Model\PointAwardScale $pointAwardScale = null)
    {
        $this->setProperty('pointAwardScale', $pointAwardScale);
    }

    /**
     * @return float
     */
    public function getDefaultPoints()
    {
        return $this->getProperty('defaultPoints');
    }

    /**
     * @param float $defaultPoints
     */
    public function setDefaultPoints(float $defaultPoints = null)
    {
        $this->setProperty('defaultPoints', $defaultPoints);
    }
}
