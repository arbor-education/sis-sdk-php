<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClassroomLayoutSeat extends ModelBase
{

    const CLASSROOM_LAYOUT_EQUIPMENT = 'classroomLayoutEquipment';

    const SEQUENCE_NUMBER = 'sequenceNumber';

    protected $_resourceType = ResourceType::CLASSROOM_LAYOUT_SEAT;

    /**
     * @param Query $query
     * @return ClassroomLayoutSeat[] | Collection
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

        $query->setResourceType(ResourceType::CLASSROOM_LAYOUT_SEAT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClassroomLayoutSeat
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLASSROOM_LAYOUT_SEAT, $id);
    }

    /**
     * @return ClassroomLayoutEquipment
     */
    public function getClassroomLayoutEquipment()
    {
        return $this->getProperty('classroomLayoutEquipment');
    }

    /**
     * @param ClassroomLayoutEquipment $classroomLayoutEquipment
     */
    public function setClassroomLayoutEquipment(ClassroomLayoutEquipment $classroomLayoutEquipment = null)
    {
        $this->setProperty('classroomLayoutEquipment', $classroomLayoutEquipment);
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
