<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TeachingGroupMembership extends ModelBase
{
    public const TEACHING_GROUP = 'teachingGroup';

    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::TEACHING_GROUP_MEMBERSHIP;

    /**
     * @param Query $query
     * @return TeachingGroupMembership[] | Collection
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
     * @return \Arbor\Model\TeachingGroup
     */
    public function getTeachingGroup()
    {
        return $this->getProperty('teachingGroup');
    }

    /**
     * @param \Arbor\Model\TeachingGroup $teachingGroup
     */
    public function setTeachingGroup(\Arbor\Model\TeachingGroup $teachingGroup = null)
    {
        $this->setProperty('teachingGroup', $teachingGroup);
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
