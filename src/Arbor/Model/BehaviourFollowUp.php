<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviourFollowUp extends ModelBase
{
    public const STUDENT = 'student';

    public const STAFF = 'staff';

    public const FOLLOW_UP_DATETIME = 'followUpDatetime';

    public const SUMMARY = 'summary';

    protected $_resourceType = ResourceType::BEHAVIOUR_FOLLOW_UP;

    /**
     * @param Query $query
     * @return BehaviourFollowUp[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOUR_FOLLOW_UP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviourFollowUp
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOUR_FOLLOW_UP, $id);
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
     * @return \DateTime
     */
    public function getFollowUpDatetime()
    {
        return $this->getProperty('followUpDatetime');
    }

    /**
     * @param \DateTime $followUpDatetime
     */
    public function setFollowUpDatetime(\DateTime $followUpDatetime = null)
    {
        $this->setProperty('followUpDatetime', $followUpDatetime);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty('summary');
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary = null)
    {
        $this->setProperty('summary', $summary);
    }
}
