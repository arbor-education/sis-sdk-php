<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PositionBusinessRole extends ModelBase
{
    const POSITION = 'position';

    const BUSINESS_ROLE = 'businessRole';

    const RANKING = 'ranking';

    protected $_resourceType = ResourceType::POSITION_BUSINESS_ROLE;

    /**
     * @param Query $query
     * @return PositionBusinessRole[] | Collection
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

        $query->setResourceType(ResourceType::POSITION_BUSINESS_ROLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PositionBusinessRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::POSITION_BUSINESS_ROLE, $id);
    }

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->getProperty('position');
    }

    /**
     * @param Position $position
     */
    public function setPosition(Position $position = null)
    {
        $this->setProperty('position', $position);
    }

    /**
     * @return BusinessRole
     */
    public function getBusinessRole()
    {
        return $this->getProperty('businessRole');
    }

    /**
     * @param BusinessRole $businessRole
     */
    public function setBusinessRole(BusinessRole $businessRole = null)
    {
        $this->setProperty('businessRole', $businessRole);
    }

    /**
     * @return int
     */
    public function getRanking()
    {
        return $this->getProperty('ranking');
    }

    /**
     * @param int $ranking
     */
    public function setRanking($ranking = null)
    {
        $this->setProperty('ranking', $ranking);
    }
}
