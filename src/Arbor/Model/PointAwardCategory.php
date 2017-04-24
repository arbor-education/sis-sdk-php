<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\PointAwardScale;

class PointAwardCategory extends ModelBase
{
    const DESCRIPTION = 'description';

    const POINT_AWARD_SCALE = 'pointAwardScale';

    const DEFAULT_POINTS = 'defaultPoints';

    protected $_resourceType = ResourceType::POINT_AWARD_CATEGORY;

    /**
     * @param \Arbor\Query\Query $query
     * @return PointAwardCategory[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PointAwardCategory");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PointAwardCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::POINT_AWARD_CATEGORY, $id);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }

    /**
     * @return PointAwardScale
     */
    public function getPointAwardScale()
    {
        return $this->getProperty("pointAwardScale");
    }

    /**
     * @param PointAwardScale $pointAwardScale
     */
    public function setPointAwardScale(PointAwardScale $pointAwardScale = null)
    {
        $this->setProperty("pointAwardScale", $pointAwardScale);
    }

    /**
     * @return float
     */
    public function getDefaultPoints()
    {
        return $this->getProperty("defaultPoints");
    }

    /**
     * @param float $defaultPoints
     */
    public function setDefaultPoints($defaultPoints = null)
    {
        $this->setProperty("defaultPoints", $defaultPoints);
    }
}
