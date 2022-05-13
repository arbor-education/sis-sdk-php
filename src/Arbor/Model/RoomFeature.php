<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RoomFeature extends ModelBase
{
    const ROOM_FEATURE_NAME = 'roomFeatureName';

    const ASSIGN_TO_PEOPLE = 'assignToPeople';

    protected $_resourceType = ResourceType::ROOM_FEATURE;

    /**
     * @param Query $query
     * @return RoomFeature[] | Collection
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

        $query->setResourceType(ResourceType::ROOM_FEATURE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RoomFeature
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ROOM_FEATURE, $id);
    }

    /**
     * @return string
     */
    public function getRoomFeatureName()
    {
        return $this->getProperty('roomFeatureName');
    }

    /**
     * @param string $roomFeatureName
     */
    public function setRoomFeatureName($roomFeatureName = null)
    {
        $this->setProperty('roomFeatureName', $roomFeatureName);
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
