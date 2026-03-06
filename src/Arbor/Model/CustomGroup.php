<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomGroup extends ModelBase
{
    public const CUSTOM_GROUP_NAME = 'customGroupName';

    public const DESCRIPTION = 'description';

    public const ACADEMIC_YEAR = 'academicYear';

    public const CONTAINS_STUDENTS = 'containsStudents';

    public const CONTAINS_GUARDIANS = 'containsGuardians';

    public const CONTAINS_STAFF = 'containsStaff';

    public const IS_DYNAMIC = 'isDynamic';

    public const IDENTIFIER = 'identifier';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::CUSTOM_GROUP;

    /**
     * @param Query $query
     * @return CustomGroup[] | Collection
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
    public function setCustomGroupName(string $customGroupName = null)
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
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
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
    public function setContainsStudents(string $containsStudents = null)
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
    public function setContainsGuardians(string $containsGuardians = null)
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
    public function setContainsStaff(string $containsStaff = null)
    {
        $this->setProperty('containsStaff', $containsStaff);
    }

    /**
     * @return bool
     */
    public function getIsDynamic()
    {
        return $this->getProperty('isDynamic');
    }

    /**
     * @param bool $isDynamic
     */
    public function setIsDynamic(bool $isDynamic = null)
    {
        $this->setProperty('isDynamic', $isDynamic);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty('identifier');
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier = null)
    {
        $this->setProperty('identifier', $identifier);
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
