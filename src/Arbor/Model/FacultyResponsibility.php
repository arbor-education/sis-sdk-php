<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class FacultyResponsibility extends ModelBase
{
    public const FACULTY_RESPONSIBILITY_TYPE = 'facultyResponsibilityType';

    public const FACULTY = 'faculty';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::FACULTY_RESPONSIBILITY;

    /**
     * @param Query $query
     * @return FacultyResponsibility[] | Collection
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
     * @return \Arbor\Model\FacultyResponsibilityType
     */
    public function getFacultyResponsibilityType()
    {
        return $this->getProperty('facultyResponsibilityType');
    }

    /**
     * @param \Arbor\Model\FacultyResponsibilityType $facultyResponsibilityType
     */
    public function setFacultyResponsibilityType(\Arbor\Model\FacultyResponsibilityType $facultyResponsibilityType = null)
    {
        $this->setProperty('facultyResponsibilityType', $facultyResponsibilityType);
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
