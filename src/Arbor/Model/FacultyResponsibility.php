<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class FacultyResponsibility extends ModelBase
{
    const FACULTY_RESPONSIBILITY_TYPE = 'facultyResponsibilityType';

    const FACULTY = 'faculty';

    const START_DATE = 'startDate';

    const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::FACULTY_RESPONSIBILITY;

    /**
     * @param Query $query
     * @return FacultyResponsibility[] | Collection
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

        $query->setResourceType(ResourceType::FACULTY_RESPONSIBILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return FacultyResponsibility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FACULTY_RESPONSIBILITY, $id);
    }

    /**
     * @return FacultyResponsibilityType
     */
    public function getFacultyResponsibilityType()
    {
        return $this->getProperty('facultyResponsibilityType');
    }

    /**
     * @param FacultyResponsibilityType $facultyResponsibilityType
     */
    public function setFacultyResponsibilityType(FacultyResponsibilityType $facultyResponsibilityType = null)
    {
        $this->setProperty('facultyResponsibilityType', $facultyResponsibilityType);
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
