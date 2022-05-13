<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviouralIncidentStudentInvolvement extends ModelBase
{
    const BEHAVIOURAL_INCIDENT = 'behaviouralIncident';

    const STUDENT = 'student';

    const RESOLVED_BY = 'resolvedBy';

    const RESOLVED_DATETIME = 'resolvedDatetime';

    const COMMENT = 'comment';

    const SEVERITY = 'severity';

    const ASSIGNEE = 'assignee';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_STUDENT_INVOLVEMENT;

    /**
     * @param Query $query
     * @return BehaviouralIncidentStudentInvolvement[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOURAL_INCIDENT_STUDENT_INVOLVEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviouralIncidentStudentInvolvement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOURAL_INCIDENT_STUDENT_INVOLVEMENT, $id);
    }

    /**
     * @return BehaviouralIncident
     */
    public function getBehaviouralIncident()
    {
        return $this->getProperty('behaviouralIncident');
    }

    /**
     * @param BehaviouralIncident $behaviouralIncident
     */
    public function setBehaviouralIncident(BehaviouralIncident $behaviouralIncident = null)
    {
        $this->setProperty('behaviouralIncident', $behaviouralIncident);
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
     * @return Staff
     */
    public function getResolvedBy()
    {
        return $this->getProperty('resolvedBy');
    }

    /**
     * @param Staff $resolvedBy
     */
    public function setResolvedBy(Staff $resolvedBy = null)
    {
        $this->setProperty('resolvedBy', $resolvedBy);
    }

    /**
     * @return \DateTime
     */
    public function getResolvedDatetime()
    {
        return $this->getProperty('resolvedDatetime');
    }

    /**
     * @param \DateTime $resolvedDatetime
     */
    public function setResolvedDatetime(\DateTime $resolvedDatetime = null)
    {
        $this->setProperty('resolvedDatetime', $resolvedDatetime);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->getProperty('comment');
    }

    /**
     * @param string $comment
     */
    public function setComment($comment = null)
    {
        $this->setProperty('comment', $comment);
    }

    /**
     * @return int
     */
    public function getSeverity()
    {
        return $this->getProperty('severity');
    }

    /**
     * @param int $severity
     */
    public function setSeverity($severity = null)
    {
        $this->setProperty('severity', $severity);
    }

    /**
     * @return Staff
     */
    public function getAssignee()
    {
        return $this->getProperty('assignee');
    }

    /**
     * @param Staff $assignee
     */
    public function setAssignee(Staff $assignee = null)
    {
        $this->setProperty('assignee', $assignee);
    }

}
