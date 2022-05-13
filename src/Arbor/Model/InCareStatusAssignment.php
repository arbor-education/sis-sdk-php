<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InCareStatusAssignment extends ModelBase
{
    const IN_CARE_STATUS = 'inCareStatus';

    const STUDENT = 'student';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const RESPONSIBLE_LOCAL_AUTHORITY = 'responsibleLocalAuthority';

    protected $_resourceType = ResourceType::IN_CARE_STATUS_ASSIGNMENT;

    /**
     * @param Query $query
     * @return InCareStatusAssignment[] | Collection
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

        $query->setResourceType(ResourceType::IN_CARE_STATUS_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InCareStatusAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_CARE_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return InCareStatus
     */
    public function getInCareStatus()
    {
        return $this->getProperty('inCareStatus');
    }

    /**
     * @param InCareStatus $inCareStatus
     */
    public function setInCareStatus(InCareStatus $inCareStatus = null)
    {
        $this->setProperty('inCareStatus', $inCareStatus);
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
