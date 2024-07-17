<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class FacultyDepartment extends ModelBase
{
    public const DEPARTMENT = 'department';

    public const FACULTY = 'faculty';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::FACULTY_DEPARTMENT;

    /**
     * @param Query $query
     * @return FacultyDepartment[] | Collection
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
     * @return \Arbor\Model\Department
     */
    public function getDepartment()
    {
        return $this->getProperty('department');
    }

    /**
     * @param \Arbor\Model\Department $department
     */
    public function setDepartment(\Arbor\Model\Department $department = null)
    {
        $this->setProperty('department', $department);
    }

    /**
     * @return \Arbor\Model\Faculty
     */
    public function getFaculty()
    {
        return $this->getProperty('faculty');
    }

    /**
     * @param \Arbor\Model\Faculty $faculty
     */
    public function setFaculty(\Arbor\Model\Faculty $faculty = null)
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
}
