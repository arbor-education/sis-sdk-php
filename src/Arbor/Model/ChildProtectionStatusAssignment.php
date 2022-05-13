<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ChildProtectionStatusAssignment extends ModelBase
{
    const CHILD_PROTECTION_STATUS = 'childProtectionStatus';

    const STUDENT = 'student';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const NOTES = 'notes';

    const RESPONSIBLE_LOCAL_AUTHORITY = 'responsibleLocalAuthority';

    protected $_resourceType = ResourceType::CHILD_PROTECTION_STATUS_ASSIGNMENT;

    /**
     * @param Query $query
     * @return ChildProtectionStatusAssignment[] | Collection
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

        $query->setResourceType(ResourceType::CHILD_PROTECTION_STATUS_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ChildProtectionStatusAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CHILD_PROTECTION_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return ChildProtectionStatus
     */
    public function getChildProtectionStatus()
    {
        return $this->getProperty('childProtectionStatus');
    }

    /**
     * @param ChildProtectionStatus $childProtectionStatus
     */
    public function setChildProtectionStatus(ChildProtectionStatus $childProtectionStatus = null)
    {
        $this->setProperty('childProtectionStatus', $childProtectionStatus);
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
    public function setNotes($notes = null)
    {
        $this->setProperty('notes', $notes);
    }

    /**
     * @return LocalAuthority
     */
    public function getResponsibleLocalAuthority()
    {
        return $this->getProperty('responsibleLocalAuthority');
    }

    /**
     * @param LocalAuthority $responsibleLocalAuthority
     */
    public function setResponsibleLocalAuthority(LocalAuthority $responsibleLocalAuthority = null)
    {
        $this->setProperty('responsibleLocalAuthority', $responsibleLocalAuthority);
    }

}
