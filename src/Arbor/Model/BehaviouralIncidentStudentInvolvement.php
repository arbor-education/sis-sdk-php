<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviouralIncidentStudentInvolvement extends ModelBase
{
    public const BEHAVIOURAL_INCIDENT = 'behaviouralIncident';

    public const STUDENT = 'student';

    public const RESOLVED_BY = 'resolvedBy';

    public const RESOLVED_DATETIME = 'resolvedDatetime';

    public const COMMENT = 'comment';

    public const SEVERITY = 'severity';

    public const ASSIGNEE = 'assignee';

    protected $_resourceType = ResourceType::BEHAVIOURAL_INCIDENT_STUDENT_INVOLVEMENT;

    /**
     * @param Query $query
     * @return BehaviouralIncidentStudentInvolvement[] | Collection
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
     * @return \Arbor\Model\BehaviouralIncident
     */
    public function getBehaviouralIncident()
    {
        return $this->getProperty('behaviouralIncident');
    }

    /**
     * @param \Arbor\Model\BehaviouralIncident $behaviouralIncident
     */
    public function setBehaviouralIncident(\Arbor\Model\BehaviouralIncident $behaviouralIncident = null)
    {
        $this->setProperty('behaviouralIncident', $behaviouralIncident);
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
    public function getResolvedBy()
    {
        return $this->getProperty('resolvedBy');
    }

    /**
     * @param \Arbor\Model\Staff $resolvedBy
     */
    public function setResolvedBy(\Arbor\Model\Staff $resolvedBy = null)
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
    public function setComment(string $comment = null)
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
    public function setSeverity(int $severity = null)
    {
        $this->setProperty('severity', $severity);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getAssignee()
    {
        return $this->getProperty('assignee');
    }

    /**
     * @param \Arbor\Model\Staff $assignee
     */
    public function setAssignee(\Arbor\Model\Staff $assignee = null)
    {
        $this->setProperty('assignee', $assignee);
    }
}
