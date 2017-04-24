<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Position;
use \Arbor\Model\BusinessRole;

class PositionBusinessRole extends ModelBase
{
    const POSITION = 'position';

    const BUSINESS_ROLE = 'businessRole';

    const RANKING = 'ranking';

    protected $_resourceType = ResourceType::POSITION_BUSINESS_ROLE;

    /**
     * @param \Arbor\Query\Query $query
     * @return PositionBusinessRole[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PositionBusinessRole");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PositionBusinessRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::POSITION_BUSINESS_ROLE, $id);
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->getProperty("position");
    }

    /**
     * @param Position $position
     */
    public function setPosition(Position $position = null)
    {
        $this->setProperty("position", $position);
    }

    /**
     * @return BusinessRole
     */
    public function getBusinessRole()
    {
        return $this->getProperty("businessRole");
    }

    /**
     * @param BusinessRole $businessRole
     */
    public function setBusinessRole(BusinessRole $businessRole = null)
    {
        $this->setProperty("businessRole", $businessRole);
    }

    /**
     * @return int
     */
    public function getRanking()
    {
        return $this->getProperty("ranking");
    }

    /**
     * @param int $ranking
     */
    public function setRanking($ranking = null)
    {
        $this->setProperty("ranking", $ranking);
    }
}
