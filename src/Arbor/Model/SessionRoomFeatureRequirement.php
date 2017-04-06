<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Session;
use \Arbor\Model\RoomFeature;

class SessionRoomFeatureRequirement extends ModelBase
{

    const SESSION = 'session';

    const ROOM_FEATURE = 'roomFeature';

    protected $_resourceType = ResourceType::SESSION_ROOM_FEATURE_REQUIREMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SessionRoomFeatureRequirement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("SessionRoomFeatureRequirement");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SessionRoomFeatureRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::SESSION_ROOM_FEATURE_REQUIREMENT, $id);
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
     * @return RoomFeature
     */
    public function getRoomFeature()
    {
        return $this->getProperty("roomFeature");
    }

    /**
     * @param RoomFeature $roomFeature
     */
    public function setRoomFeature(RoomFeature $roomFeature = null)
    {
        $this->setProperty("roomFeature", $roomFeature);
    }


}
