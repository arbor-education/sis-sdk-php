<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class RoomAsset extends ModelBase
{
    const ROOM_ASSET_NAME = 'roomAssetName';

    const ASSIGN_TO_PEOPLE = 'assignToPeople';

    protected $_resourceType = ResourceType::ROOM_ASSET;

    /**
     * @param \Arbor\Query\Query $query
     * @return RoomAsset[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("RoomAsset");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return RoomAsset
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ROOM_ASSET, $id);
    }

    /**
     * @return string
     */
    public function getRoomAssetName()
    {
        return $this->getProperty("roomAssetName");
    }

    /**
     * @param string $roomAssetName
     */
    public function setRoomAssetName($roomAssetName = null)
    {
        $this->setProperty("roomAssetName", $roomAssetName);
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
