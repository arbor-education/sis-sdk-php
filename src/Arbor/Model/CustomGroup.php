<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomGroup extends ModelBase
{
    const CUSTOM_GROUP_NAME = 'customGroupName';

    const DESCRIPTION = 'description';

    const ACADEMIC_YEAR = 'academicYear';

    const CONTAINS_STUDENTS = 'containsStudents';

    const CONTAINS_GUARDIANS = 'containsGuardians';

    const CONTAINS_STAFF = 'containsStaff';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::CUSTOM_GROUP;

    /**
     * @param Query $query
     * @return CustomGroup[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_GROUP, $id);
    }

    /**
     * @return string
     */
    public function getCustomGroupName()
    {
        return $this->getProperty('customGroupName');
    }

    /**
     * @param string $customGroupName
     */
    public function setCustomGroupName($customGroupName = null)
    {
        $this->setProperty('customGroupName', $customGroupName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getContainsStudents()
    {
        return $this->getProperty('containsStudents');
    }

    /**
     * @param string $containsStudents
     */
    public function setContainsStudents($containsStudents = null)
    {
        $this->setProperty('containsStudents', $containsStudents);
    }

    /**
     * @return string
     */
    public function getContainsGuardians()
    {
        return $this->getProperty('containsGuardians');
    }

    /**
     * @param string $containsGuardians
     */
    public function setContainsGuardians($containsGuardians = null)
    {
        $this->setProperty('containsGuardians', $containsGuardians);
    }

    /**
     * @return string
     */
    public function getContainsStaff()
    {
        return $this->getProperty('containsStaff');
    }

    /**
     * @param string $containsStaff
     */
    public function setContainsStaff($containsStaff = null)
    {
        $this->setProperty('containsStaff', $containsStaff);
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
