<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffRoomFeatureRequirement extends ModelBase
{
    public const STAFF = 'staff';

    public const ROOM_FEATURE = 'roomFeature';

    protected $_resourceType = ResourceType::STAFF_ROOM_FEATURE_REQUIREMENT;

    /**
     * @param Query $query
     * @return StaffRoomFeatureRequirement[] | Collection
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
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
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
