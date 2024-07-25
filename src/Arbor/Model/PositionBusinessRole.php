<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PositionBusinessRole extends ModelBase
{
    public const POSITION = 'position';

    public const BUSINESS_ROLE = 'businessRole';

    public const RANKING = 'ranking';

    protected $_resourceType = ResourceType::POSITION_BUSINESS_ROLE;

    /**
     * @param Query $query
     * @return PositionBusinessRole[] | Collection
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
     * @return \Arbor\Model\Position
     */
    public function getPosition()
    {
        return $this->getProperty('position');
    }

    /**
     * @param \Arbor\Model\Position $position
     */
    public function setPosition(\Arbor\Model\Position $position = null)
    {
        $this->setProperty('position', $position);
    }

    /**
     * @return \Arbor\Model\BusinessRole
     */
    public function getBusinessRole()
    {
        return $this->getProperty('businessRole');
    }

    /**
     * @param \Arbor\Model\BusinessRole $businessRole
     */
    public function setBusinessRole(\Arbor\Model\BusinessRole $businessRole = null)
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
    public function setRanking(int $ranking = null)
    {
        $this->setProperty('ranking', $ranking);
    }
}
