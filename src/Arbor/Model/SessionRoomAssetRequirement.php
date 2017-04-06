<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Session;
use \Arbor\Model\RoomAsset;

class SessionRoomAssetRequirement extends ModelBase
{

    const SESSION = 'session';

    const ROOM_ASSET = 'roomAsset';

    const QUANTITY = 'quantity';

    protected $_resourceType = ResourceType::SESSION_ROOM_ASSET_REQUIREMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SessionRoomAssetRequirement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("SessionRoomAssetRequirement");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SessionRoomAssetRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::SESSION_ROOM_ASSET_REQUIREMENT, $id);
    }

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->getProperty("session");
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session = null)
    {
        $this->setProperty("session", $session);
    }

    /**
     * @return RoomAsset
     */
    public function getRoomAsset()
    {
        return $this->getProperty("roomAsset");
    }

    /**
     * @param RoomAsset $roomAsset
     */
    public function setRoomAsset(RoomAsset $roomAsset = null)
    {
        $this->setProperty("roomAsset", $roomAsset);
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->getProperty("quantity");
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity = null)
    {
        $this->setProperty("quantity", $quantity);
    }


}
