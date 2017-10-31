<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class FacultyDepartment extends ModelBase
{

    const DEPARTMENT = 'department';

    const FACULTY = 'faculty';

    const START_DATE = 'startDate';

    const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::FACULTY_DEPARTMENT;

    /**
     * @param Query $query
     * @return FacultyDepartment[] | Collection
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

        $query->setResourceType(ResourceType::FACULTY_DEPARTMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return FacultyDepartment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FACULTY_DEPARTMENT, $id);
    }

    /**
     * @return Department
     */
    public function getDepartment()
    {
        return $this->getProperty('department');
    }

    /**
     * @param Department $department
     */
    public function setDepartment(Department $department = null)
    {
        $this->setProperty('department', $department);
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
