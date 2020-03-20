<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClassroomSeatingPlan extends ModelBase
{

    const ROOM_LAYOUT = 'roomLayout';

    const STAFF = 'staff';

    const TIMETABLE_SLOT = 'timetableSlot';

    protected $_resourceType = ResourceType::CLASSROOM_SEATING_PLAN;

    /**
     * @param Query $query
     * @return ClassroomSeatingPlan[] | Collection
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

        $query->setResourceType(ResourceType::CLASSROOM_SEATING_PLAN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClassroomSeatingPlan
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLASSROOM_SEATING_PLAN, $id);
    }

    /**
     * @return RoomLayout
     */
    public function getRoomLayout()
    {
        return $this->getProperty('roomLayout');
    }

    /**
     * @param RoomLayout $roomLayout
     */
    public function setRoomLayout(RoomLayout $roomLayout = null)
    {
        $this->setProperty('roomLayout', $roomLayout);
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
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
    }


}
