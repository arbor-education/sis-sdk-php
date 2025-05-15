<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AttendanceFine extends ModelBase
{
    public const STUDENT = 'student';

    public const STATUS = 'status';

    public const FINE_DECISION_DATE = 'fineDecisionDate';

    public const FINE_CREATED_DATE = 'fineCreatedDate';

    public const NOTES = 'notes';

    protected $_resourceType = ResourceType::ATTENDANCE_FINE;

    /**
     * @param Query $query
     * @return AttendanceFine[] | Collection
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

        $query->setResourceType(ResourceType::ATTENDANCE_FINE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceFine
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ATTENDANCE_FINE, $id);
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
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return \DateTime
     */
    public function getFineDecisionDate()
    {
        return $this->getProperty('fineDecisionDate');
    }

    /**
     * @param \DateTime $fineDecisionDate
     */
    public function setFineDecisionDate(\DateTime $fineDecisionDate = null)
    {
        $this->setProperty('fineDecisionDate', $fineDecisionDate);
    }

    /**
     * @return \DateTime
     */
    public function getFineCreatedDate()
    {
        return $this->getProperty('fineCreatedDate');
    }

    /**
     * @param \DateTime $fineCreatedDate
     */
    public function setFineCreatedDate(\DateTime $fineCreatedDate = null)
    {
        $this->setProperty('fineCreatedDate', $fineCreatedDate);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes = null)
    {
        $this->setProperty('notes', $notes);
    }
}
