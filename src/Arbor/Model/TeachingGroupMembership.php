<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TeachingGroupMembership extends ModelBase
{
    const TEACHING_GROUP = 'teachingGroup';

    const STUDENT = 'student';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::TEACHING_GROUP_MEMBERSHIP;

    /**
     * @param Query $query
     * @return TeachingGroupMembership[] | Collection
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

        $query->setResourceType(ResourceType::TEACHING_GROUP_MEMBERSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TeachingGroupMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TEACHING_GROUP_MEMBERSHIP, $id);
    }

    /**
     * @return TeachingGroup
     */
    public function getTeachingGroup()
    {
        return $this->getProperty('teachingGroup');
    }

    /**
     * @param TeachingGroup $teachingGroup
     */
    public function setTeachingGroup(TeachingGroup $teachingGroup = null)
    {
        $this->setProperty('teachingGroup', $teachingGroup);
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
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

}
