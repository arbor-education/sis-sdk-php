<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClassroomEventSeat extends ModelBase
{

    const CLASSROOM_EVENT_EQUIPMENT = 'classroomEventEquipment';

    const CLASSROOM_LAYOUT_SEAT = 'classroomLayoutSeat';

    const STUDENT = 'student';

    const SEQUENCE_NUMBER = 'sequenceNumber';

    protected $_resourceType = ResourceType::CLASSROOM_EVENT_SEAT;

    /**
     * @param Query $query
     * @return ClassroomEventSeat[] | Collection
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

        $query->setResourceType(ResourceType::CLASSROOM_EVENT_SEAT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClassroomEventSeat
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLASSROOM_EVENT_SEAT, $id);
    }

    /**
     * @return ClassroomEventEquipment
     */
    public function getClassroomEventEquipment()
    {
        return $this->getProperty('classroomEventEquipment');
    }

    /**
     * @param ClassroomEventEquipment $classroomEventEquipment
     */
    public function setClassroomEventEquipment(ClassroomEventEquipment $classroomEventEquipment = null)
    {
        $this->setProperty('classroomEventEquipment', $classroomEventEquipment);
    }

    /**
     * @return ClassroomLayoutSeat
     */
    public function getClassroomLayoutSeat()
    {
        return $this->getProperty('classroomLayoutSeat');
    }

    /**
     * @param ClassroomLayoutSeat $classroomLayoutSeat
     */
    public function setClassroomLayoutSeat(ClassroomLayoutSeat $classroomLayoutSeat = null)
    {
        $this->setProperty('classroomLayoutSeat', $classroomLayoutSeat);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->getProperty('sequenceNumber');
    }

    /**
     * @param int $sequenceNumber
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        $this->setProperty('sequenceNumber', $sequenceNumber);
    }


}
