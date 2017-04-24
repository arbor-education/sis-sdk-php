<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\TimetableSlot;
use \Arbor\Model\Staff;

class TimetableSlotStaff extends ModelBase
{
    const TIMETABLE_SLOT = 'timetableSlot';

    const STAFF = 'staff';

    protected $_resourceType = ResourceType::TIMETABLE_SLOT_STAFF;

    /**
     * @param \Arbor\Query\Query $query
     * @return TimetableSlotStaff[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("TimetableSlotStaff");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TimetableSlotStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TIMETABLE_SLOT_STAFF, $id);
    }

    /**
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty("timetableSlot");
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(TimetableSlot $timetableSlot = null)
    {
        $this->setProperty("timetableSlot", $timetableSlot);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty("staff");
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty("staff", $staff);
    }
}
