<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SessionRoomAssetRequirement extends ModelBase
{
    public const SESSION = 'session';

    public const ROOM_ASSET = 'roomAsset';

    public const QUANTITY = 'quantity';

    protected $_resourceType = ResourceType::SESSION_ROOM_ASSET_REQUIREMENT;

    /**
     * @param Query $query
     * @return SessionRoomAssetRequirement[] | Collection
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

        $query->setResourceType(ResourceType::SESSION_ROOM_ASSET_REQUIREMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SessionRoomAssetRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SESSION_ROOM_ASSET_REQUIREMENT, $id);
    }

    /**
     * @return \Arbor\Model\Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param \Arbor\Model\Session $session
     */
    public function setSession(\Arbor\Model\Session $session = null)
    {
        $this->setProperty('session', $session);
    }

    /**
     * @return \Arbor\Model\RoomAsset
     */
    public function getRoomAsset()
    {
        return $this->getProperty('roomAsset');
    }

    /**
     * @param \Arbor\Model\RoomAsset $roomAsset
     */
    public function setRoomAsset(\Arbor\Model\RoomAsset $roomAsset = null)
    {
        $this->setProperty('roomAsset', $roomAsset);
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->getProperty('quantity');
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity = null)
    {
        $this->setProperty('quantity', $quantity);
    }
}
