<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SessionRoomFeatureRequirement extends ModelBase
{
    public const SESSION = 'session';

    public const ROOM_FEATURE = 'roomFeature';

    protected $_resourceType = ResourceType::SESSION_ROOM_FEATURE_REQUIREMENT;

    /**
     * @param Query $query
     * @return SessionRoomFeatureRequirement[] | Collection
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
     * @return \Arbor\Model\RoomFeature
     */
    public function getRoomFeature()
    {
        return $this->getProperty('roomFeature');
    }

    /**
     * @param \Arbor\Model\RoomFeature $roomFeature
     */
    public function setRoomFeature(\Arbor\Model\RoomFeature $roomFeature = null)
    {
        $this->setProperty('roomFeature', $roomFeature);
    }
}
