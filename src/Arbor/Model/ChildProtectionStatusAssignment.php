<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ChildProtectionStatusAssignment extends ModelBase
{
    public const CHILD_PROTECTION_STATUS = 'childProtectionStatus';

    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const NOTES = 'notes';

    public const RESPONSIBLE_LOCAL_AUTHORITY = 'responsibleLocalAuthority';

    protected $_resourceType = ResourceType::CHILD_PROTECTION_STATUS_ASSIGNMENT;

    /**
     * @param Query $query
     * @return ChildProtectionStatusAssignment[] | Collection
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
     * @return \Arbor\Model\ChildProtectionStatus
     */
    public function getChildProtectionStatus()
    {
        return $this->getProperty('childProtectionStatus');
    }

    /**
     * @param \Arbor\Model\ChildProtectionStatus $childProtectionStatus
     */
    public function setChildProtectionStatus(\Arbor\Model\ChildProtectionStatus $childProtectionStatus = null)
    {
        $this->setProperty('childProtectionStatus', $childProtectionStatus);
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

    /**
     * @return \Arbor\Model\LocalAuthority
     */
    public function getResponsibleLocalAuthority()
    {
        return $this->getProperty('responsibleLocalAuthority');
    }

    /**
     * @param \Arbor\Model\LocalAuthority $responsibleLocalAuthority
     */
    public function setResponsibleLocalAuthority(\Arbor\Model\LocalAuthority $responsibleLocalAuthority = null)
    {
        $this->setProperty('responsibleLocalAuthority', $responsibleLocalAuthority);
    }
}
