<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentRoomFeatureRequirement extends ModelBase
{
    public const STUDENT = 'student';

    public const ROOM_FEATURE = 'roomFeature';

    protected $_resourceType = ResourceType::STUDENT_ROOM_FEATURE_REQUIREMENT;

    /**
     * @param Query $query
     * @return StudentRoomFeatureRequirement[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_ROOM_FEATURE_REQUIREMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentRoomFeatureRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_ROOM_FEATURE_REQUIREMENT, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
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
