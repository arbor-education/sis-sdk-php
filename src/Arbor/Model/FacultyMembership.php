<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class FacultyMembership extends ModelBase
{
    const FACULTY_RESPONSIBILITY = 'facultyResponsibility';

    const FACULTY = 'faculty';

    const STAFF = 'staff';

    const START_DATE = 'startDate';

    const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::FACULTY_MEMBERSHIP;

    /**
     * @param Query $query
     * @return FacultyMembership[] | Collection
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

        $query->setResourceType(ResourceType::FACULTY_MEMBERSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return FacultyMembership
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FACULTY_MEMBERSHIP, $id);
    }

    /**
     * @return FacultyResponsibility
     */
    public function getFacultyResponsibility()
    {
        return $this->getProperty('facultyResponsibility');
    }

    /**
     * @param FacultyResponsibility $facultyResponsibility
     */
    public function setFacultyResponsibility(FacultyResponsibility $facultyResponsibility = null)
    {
        $this->setProperty('facultyResponsibility', $facultyResponsibility);
    }

    /**
     * @return Faculty
     */
    public function getFaculty()
    {
        return $this->getProperty('faculty');
    }

    /**
     * @param Faculty $faculty
     */
    public function setFaculty(Faculty $faculty = null)
    {
        $this->setProperty('faculty', $faculty);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
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
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }
}
