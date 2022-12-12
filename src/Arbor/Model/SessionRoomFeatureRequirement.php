<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SessionRoomFeatureRequirement extends ModelBase
{
    const SESSION = 'session';

    const ROOM_FEATURE = 'roomFeature';

    protected $_resourceType = ResourceType::SESSION_ROOM_FEATURE_REQUIREMENT;

    /**
     * @param Query $query
     * @return SessionRoomFeatureRequirement[] | Collection
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

        $query->setResourceType(ResourceType::SESSION_ROOM_FEATURE_REQUIREMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SessionRoomFeatureRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SESSION_ROOM_FEATURE_REQUIREMENT, $id);
    }

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session = null)
    {
        $this->setProperty('session', $session);
    }

    /**
     * @return RoomFeature
     */
    public function getRoomFeature()
    {
        return $this->getProperty('roomFeature');
    }

    /**
     * @param RoomFeature $roomFeature
     */
    public function setRoomFeature(RoomFeature $roomFeature = null)
    {
        $this->setProperty('roomFeature', $roomFeature);
    }
}
