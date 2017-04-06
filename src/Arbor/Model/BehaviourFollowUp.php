<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\Staff;

class BehaviourFollowUp extends ModelBase
{

    const STUDENT = 'student';

    const STAFF = 'staff';

    const FOLLOW_UP_DATETIME = 'followUpDatetime';

    const SUMMARY = 'summary';

    protected $_resourceType = ResourceType::BEHAVIOUR_FOLLOW_UP;

    /**
     * @param \Arbor\Query\Query $query
     * @return BehaviourFollowUp[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("BehaviourFollowUp");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BehaviourFollowUp
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::BEHAVIOUR_FOLLOW_UP, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
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

    /**
     * @return \DateTime
     */
    public function getFollowUpDatetime()
    {
        return $this->getProperty("followUpDatetime");
    }

    /**
     * @param \DateTime $followUpDatetime
     */
    public function setFollowUpDatetime(\DateTime $followUpDatetime = null)
    {
        $this->setProperty("followUpDatetime", $followUpDatetime);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty("summary");
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary = null)
    {
        $this->setProperty("summary", $summary);
    }


}
