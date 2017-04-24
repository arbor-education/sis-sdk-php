<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class RoomFeature extends ModelBase
{
    const ROOM_FEATURE_NAME = 'roomFeatureName';

    const ASSIGN_TO_PEOPLE = 'assignToPeople';

    protected $_resourceType = ResourceType::ROOM_FEATURE;

    /**
     * @param \Arbor\Query\Query $query
     * @return RoomFeature[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("RoomFeature");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return RoomFeature
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ROOM_FEATURE, $id);
    }

    /**
     * @return string
     */
    public function getRoomFeatureName()
    {
        return $this->getProperty("roomFeatureName");
    }

    /**
     * @param string $roomFeatureName
     */
    public function setRoomFeatureName($roomFeatureName = null)
    {
        $this->setProperty("roomFeatureName", $roomFeatureName);
    }

    /**
     * @return bool
     */
    public function getAssignToPeople()
    {
        return $this->getProperty("assignToPeople");
    }

    /**
     * @param bool $assignToPeople
     */
    public function setAssignToPeople($assignToPeople = null)
    {
        $this->setProperty("assignToPeople", $assignToPeople);
    }
}
