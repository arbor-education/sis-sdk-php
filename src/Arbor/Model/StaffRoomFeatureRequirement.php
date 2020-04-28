<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StaffRoomFeatureRequirement extends ModelBase
{
    const STAFF = 'staff';

    const ROOM_FEATURE = 'roomFeature';

    protected $_resourceType = ResourceType::STAFF_ROOM_FEATURE_REQUIREMENT;

    /**
     * @param Query $query
     * @return StaffRoomFeatureRequirement[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_ROOM_FEATURE_REQUIREMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffRoomFeatureRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_ROOM_FEATURE_REQUIREMENT, $id);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
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
