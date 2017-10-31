<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RoomAsset extends ModelBase
{
    const ROOM_ASSET_NAME = 'roomAssetName';

    const ASSIGN_TO_PEOPLE = 'assignToPeople';

    protected $_resourceType = ResourceType::ROOM_ASSET;

    /**
     * @param Query $query
     * @return RoomAsset[] | Collection
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

        $query->setResourceType(ResourceType::ROOM_ASSET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RoomAsset
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM_ASSET, $id);
    }

    /**
     * @return string
     */
    public function getRoomAssetName()
    {
        return $this->getProperty('roomAssetName');
    }

    /**
     * @param string $roomAssetName
     */
    public function setRoomAssetName($roomAssetName = null)
    {
        $this->setProperty('roomAssetName', $roomAssetName);
    }

    /**
     * @return bool
     */
    public function getAssignToPeople()
    {
        return $this->getProperty('assignToPeople');
    }

    /**
     * @param bool $assignToPeople
     */
    public function setAssignToPeople($assignToPeople = null)
    {
        $this->setProperty('assignToPeople', $assignToPeople);
    }
}
